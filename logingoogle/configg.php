<?php 	
session_start();
ob_start();
 


 require_once 'googleapi/vendor/autoload.php';
 $googClinet=new Google_Client();
 $googClinet->setClientId("486621519271-d02k01dp6r2kb0lg9ncsvfjlgjgfm87c.apps.googleusercontent.com");
 $googClinet->setClientSecret("DXKtR0RJM9EtqN126zyPXPso");

$googClinet->setApplicationName("natro");
$googClinet->setRedirectUri("http://localhost/logingoogle/g-callback.php");
$googClinet->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");



 ?>