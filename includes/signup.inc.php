<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    require_once __DIR__ . "/../Classes/Dbh.php";
    require_once __DIR__ . "/../Classes/Signup.php";


    $signup = new Signup($username, $pwd);
    $signup->signupUser();

    header("Location: ../index.php?signup=success");
}
