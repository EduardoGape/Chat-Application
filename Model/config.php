<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "Chat-Application";

    $conn = mysqli_connect($servername, $username, $pass, $dbname);

    if($conn){
        echo "Database connected" . mysqli_connect_error();
    }
?>