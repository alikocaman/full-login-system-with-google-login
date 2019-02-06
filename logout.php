<?php 

session_start();

session_unset($_SESSION['access_taken']);

session_destroy();
header("location:index.php");


 ?>