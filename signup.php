<?php
    include("database.php");
    include("header1.html");
    session_start();

?>


<!DOCTYPE html>
<html lang="en">

    <body class="bodytext2">
        Signup Here:
    <form action="signup.php" method="post">
        <input type="text" name="firstname" placeholder="First Name"><br>
        <input type="text" name="lastname" placeholder="Last Name"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="phonenumber" placeholder="Phone Number (optional)"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="signup" value="Sign Up">
    </form>

    <a>Already have an account?</a><br>
    <a href=login.php>Log in</a><br>
</body>

    <style>

    .bodytext2 {
        text-align: center;
    }

    body {
        margin: 0;
    }

    </style>

</html>

<?php
//written with help at 3hr 52min
 if($_SERVER["REQUEST_METHOD"] == "POST"){

    $firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_SPECIAL_CHARS);
    $lastname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $phonenumber = filter_input(INPUT_POST, "phonenumber", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($firstname)){
        echo"Please enter a first name";
    }
    elseif(empty($lastname)){
        echo"Please enter a last name";
    }
    elseif(empty($email)){
        echo"Please enter a email";
    }
    elseif(empty($password)){
        echo"Please enter a password";
    }
    else{
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password)
                VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$hash')";
        mysqli_query($conn, $sql);
        echo"sign up worked1";
    }
    
    //if(isset($_POST["signup"])){

    //    if(!empty($_POST["firstname"]) &&
    //       !empty($_POST["lastname"]) &&
    //      (!empty($_POST["email"]) || !empty($_POST["phonenumber"])) &&
    //       !empty($_POST["password"])){

    //       $_SESSION["firstname"] = $_POST["firstname"];
    //       $_SESSION["lastname"] = $_POST["lastname"];
    //       $_SESSION["email"] = $_POST["email"];
    //       $_SESSION["phonenumber"] = $_POST["phonenumber"];
    //       $_SESSION["password"] = $_POST["password"];

    //       header("Location: index.php");
    //    }

    //    else{
    //        echo"Sign up failed, please try again <br>";
    //    }
    //}
 }

 mysqli_close($conn);

?>