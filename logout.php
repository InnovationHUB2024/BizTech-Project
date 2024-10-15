<?php
session_start();
unset($_SESSION['id']);
header("LOCATION:index.php");
?>