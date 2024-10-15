<?php
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $username;
  $error = "";
  $ok = "";

  // die("ERROR: Could not connect. email: " . $email . " password: " . $password );


  function OpenCon()
  {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "p@55w0rd";
    $db = "miva_blog";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

    return $conn;
  }
  
  function CloseCon($conn){
    $conn->close();
  }

  $conn = OpenCon();
  
  if ($conn === false) {
    die("ERROR: Could not connect. " . $conn->connect_error);
  } else
    $ok .= "Connected Successfully";

  $checkemail = mysqli_query($conn, "select * from credentials where Email='$email'");
  if (mysqli_num_rows($checkemail) > 0) {
    $ok .= "Email is valid";
    $checkpass = mysqli_query($conn, "select * from credentials where Email='$email' and Password='$password'");
    if (mysqli_num_rows($checkpass) > 0) {
      $ok .= "Success";
      session_start();

      //echo $_SESSION;
      $sql = "select Username from credentials where Email='$email'";
      if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_row()) {
          $username = $row[0];
        }
        $result->free_result();
      }
      $_SESSION['id'] = $username;
      header("Location:index.php");
    } else {
      $error .= "Incorrect password";
    }
  } else {
    $error .= "Invalid Email Address";
  }
}
