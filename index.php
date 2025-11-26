<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username">
        <input type="password" name="pwd">
        <button>Signup</button>
    </form>

    <?php
    if (isset($_GET['error']) && $_GET['error'] === 'emptyinput') {
        echo "<p>Please fill in all fields!</p>";
    } else if (isset($_GET['signup']) && $_GET['signup'] === 'success') {
        echo "<p>Signup successful!</p>";
    }
    ?>
</body>

</html>