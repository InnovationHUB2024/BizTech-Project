<?php
if(isset($_POST['submit'])) {
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $checkpass=$_POST['checkpass'];
    $error="";
    $ok="";

    if($password!=$checkpass) {
        $error.="Passwords do not match.";
    }
    else { 

        include("databaseconnect.php");

        $sql = "CREATE TABLE IF NOT EXISTS credentials(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            Email VARCHAR(70) NOT NULL UNIQUE,
            Username VARCHAR(70) NOT NULL UNIQUE,
            Password VARCHAR(70) NOT NULL
        )";

        if($conn->query($sql) === true){
            $ok.="Table created successfully.";
        } else{
            $error.="ERROR: Could not able to execute $sql1. " . $conn->error;
        }

        $duplicate_e=mysqli_query($conn,"select * from credentials where Email='$email'");
        $duplicate_u=mysqli_query($conn,"select * from credentials where Username='$username'");
        if (mysqli_num_rows($duplicate_e)>0)
        {
            $error.= "Email is already taken<br>";
        }
        else if (mysqli_num_rows($duplicate_u)>0)
        {
            $error.= "Username is already taken<br>";
        }
        else{ 
            $sql1="INSERT INTO credentials VALUES(DEFAULT,'$email','$username','$password')";
            if($conn->query($sql1) === true){
                $ok.="Inserted into table successfully.";
                header("Location:login.php");
            } else{
                $error.="ERROR: Could not able to execute $sql1. " . $conn->error;
            }
        }
    }
} 
?>