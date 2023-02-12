<?php
    //connecting to the databade
    $servername = "localhost";
    $username  = "root";
    $password = "";
    $database = "php";

    //creating connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    //die if connection was not successful
    if(!$conn){
        die("sorry we faild to connect: " . mysqli_connect_error());
    }else{
        echo "connection was successful <br>";
    }

    //create a table in database
?>