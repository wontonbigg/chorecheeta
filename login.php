<?php
    include("database.php");
    include("header1.html");
    session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bodytext">
    this is the login page
    <form action="login.php" method="post">
        <label>Email</label><br>
        <input type="text" name="email"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login">
    </form>

    <a>Dont have an account?</a><br>
    <a href=signup.php>Sign up</a><br>
</body>

<style>

.bodytext {
    text-align: center;
}

body {
    margin: 0;
    }

</style>

</html>

<?php

    if(isset($_POST["login"])){

        if(!empty($_POST["email"]) &&
           !empty($_POST["password"])){

            //$_SESSION["firstname"] = $_POST["firstname"];
            //$_SESSION["lastname"] = $_POST["lastname"];
            $_SESSION["email"] = $_POST["email"];
            //$_SESSION["phonenumber"] = $_POST["phonenumber"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: index.php");
        }

        else{
            echo"missing email or password <br>";
        }
    }


?>