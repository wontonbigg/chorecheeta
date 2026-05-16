<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "1234";
    $db_name = "businessdb";
    $conn = "";

    try{
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo"Connection failed, please try again";
    }

    //if($conn){
        //echo"You are connected!";
    //}
    //else{
        //echo"Could not connect!";
    //}
?>
