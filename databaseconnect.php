<?php

    // Path: databaseconnect.php
    $host = 'localhost'; // Database
    $user = 'root'; // Database username
    $pass = 'p@55w0rd'; // password for the database
    $db = 'miva_blog'; // name of the database


    $conn = new mysqli($host, $user, $pass, $db);
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        // echo "Connected successfully";
    }

    // $conn->close();