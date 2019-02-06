<?php 

require_once  'config.php';
unset($_SESSION['access_taken']);

$googClinet->revokeToken();
session_destroy();
header("location:login.php");
extit();
  



 ?>