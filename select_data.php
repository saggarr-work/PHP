<?php
    //connecting to the databade
    $servername = "localhost";
    $username  = "root";
    $password = "";
    $database = "contact";

    //creating connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    //die if connection was not successful
    if(!$conn){
        die("sorry we faild to connect: " . mysqli_connect_error());
    }else{
        echo "connection was successful <br><br>";
    }

    $sql = "SELECT * FROM `contactus`";
    $result = mysqli_query($conn, $sql);

    //return num of rows in database
    $num = mysqli_num_rows($result);
    echo "total number of row in the table is $num <br><br>";

    // display the rows return by the sql query
    while($row = mysqli_fetch_assoc($result)){
        echo $row['slno'] . " hello " . $row['name'] . " your email is " . $row['email'] . "your concern is " . $row['concern'] . " at time " . $row['date'] . "<br>";
    }
    //create a table in database
?>