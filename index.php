<?php
    include("header2.html");
    include("database.php");
    session_start();

    //displays the cookies
    echo $_SESSION["firstname"] . "<br>";
    echo $_SESSION["lastname"] . "<br>";
    echo $_SESSION["email"] . "<br>";
    echo $_SESSION["phonenumber"] . "<br>";
    echo $_SESSION["password"] . "<br>";


    //shows all the data in database businessdb
    //$sql = "SELECT * FROM users";
    //$result = mysqli_query($conn, $sql);
    //if(mysqli_num_rows($result) > 0){
    //    while($row = mysqli_fetch_assoc($result)){
    //        echo $row["id"] . "<br>";
    //    echo $row["firstname"] . "<br>";
    //    echo $row["lastname"] . "<br>";
    //    echo $row["email"] . "<br>";
    //    }
    //}
    //else{
    //   echo"user not found888888";
    //}

    //inserts data into database business db, for testing purposes
    //$email = "patrick@67.com";
    //$password = "rock3";
    //$hash = password_hash($password, PASSWORD_DEFAULT);

    //$sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password)
            //VALUES ('null', 'null', '$email', 'null', '$hash')";

    //try{
        //mysqli_query($conn, $sql);
        //echo"user is now registered!";
    //}
    //catch(mysqli_sql_exception){
        //echo"could not register user!";
    //}

    mysqli_close($conn);

    //password for phpmyadmin is 1234 used on config.inc.php
?>



<!DOCTYPE html>

<body style="background-color:rgb(255, 221, 0);">
    <form action="index.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>

<main>
    Complete chores, ordered straight to your door!
    Chore Cheeta is a gig economy where you can pay others to come to your house and complete chores for you.
    Ideally we will absolve humanity of all chores. Wish me luck
    <button class="explore">Learn More</button>
</main>

<style>

     body {
        margin: 0;
    }

</style>

</html>

<?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: login.php");
    }
?>


