<?php

class Signup extends Dbh
{
    private $username;
    private $pwd;

    public function __construct($username, $pwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    private function insetUser()
    {
        $query = "INSERT INTO users('username', 'pwd') VALUES (:username, :pwd);";
        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $this->pwd);
        $stmt->execute();
    }

    private function isEmptySubmit()
    {
        if (isset(this->username) && isset(this->pwd)) {
            return false;
        } else {
            return true;
        }
    }


    private function signupUser()
    {
        // Error handlers


        // If no errors, signup user
    }
}