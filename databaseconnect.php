<?php

    // Path: databaseconnect.php
    $host = 'localhost'; // Database
    $user = 'root'; // Database username
    $pass = ''; // password for the database
    $db = ''; // name of the database


    $conn = new mysqli($host, $user, $pass, $db);
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        // echo "Connected successfully";
    }

    // $conn->close();