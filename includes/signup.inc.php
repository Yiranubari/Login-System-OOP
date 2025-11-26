<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    require_once __DIR__ . "/../Classes/Dbh.php";
    require_once __DIR__ . "/../Classes/Signup.php";


    $signup = new Signup($username, $pwd, $email);
    $signup->signupUser();

    header("Location: ../index.php?signup=success");
}
