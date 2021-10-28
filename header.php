<?php
session_start();

require "includes/dbh.inc.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <!-- <link rel="stylesheet" href="./styles/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="nav-header-main">
            <a class="header-logo" href="#">
                <img src="img/unnamed.png" alt="logo">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="header-login">
            <?php

            if (isset($_SESSION['userId'])) {
                echo '<form action="includes/logout.inc.php" method="POST">
                <button type="submit" name="logout-submit">Logout</button>
            </form>';
            } else {
                echo '<form action="includes/login.inc.php" method="POST">
                <input type="text" name="mailuid" placeholder="Username/E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
            </form>
            <a class="header-signup" href="signup.php">Sign Up</a>';
            }
            ?>
        </div>
    </header>
</body>

</html>