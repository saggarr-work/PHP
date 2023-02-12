<?php
    //connecting to the databade
    $servername = "localhost";
    $username  = "root";
    $password = "";

    //creating connection
    $conn = mysqli_connect($servername, $username, $password);

    //die if connection was not successful
    if(!$conn){
        die("sorry we faild to connect: " . mysqli_connect_error());
    }else{
        echo "connection was successful <br>";
    }

    //creating database
    $sql = "CREATE DATABASE php";
    $result = mysqli_query($conn, $sql);

    //checks if database creation was successful
    if($result){
        echo "the database was created successfully";
    }
    else{
        echo "the database was not created successfully because of this error---->". mysqli_error($conn);
    }
?>