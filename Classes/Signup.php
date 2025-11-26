<?php

class Signup extends Dbh
{
    private $username;
    private $pwd;
    private $email;

    public function __construct($username, $pwd, $email)
    {
        $this->username = $username;
        $this->pwd = $pwd;
        $this->email = $email;
    }

    private function insertUser()
    {
        $query = "INSERT INTO users(`username`, `pwd`, `email`) VALUES (:username, :pwd, :email);";
        $stmt = parent::connect()->prepare($query);

        $hashedPwd = password_hash($this->pwd, PASSWORD_DEFAULT);

        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $hashedPwd);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();
    }

    private function isEmptySubmit()
    {
        if (!empty($this->username) && !empty($this->pwd) && !empty($this->email)) {
            return false;
        } else {
            return true;
        }
    }


    public function signupUser()
    {
        // Error handlers
        if ($this->isEmptySubmit()) {
            header("Location: ../index.php?error=emptyinput");
            die();
        }

        // If no errors, signup user
        $this->insertUser();
    }
}
