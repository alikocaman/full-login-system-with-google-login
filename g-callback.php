<?php

require_once 'configg.php';

session_start();
if(isset($_SESSION['access_taken']))

 $googClinet->setAccessToken($_SESSION['access_taken']);


   


 else if(isset($_GET['code']))
{
   $token= $googClinet->fetchAccessTokenWithAuthCode($_GET['code']);

   $_SESSION['access_taken']=$token;

}

else {


    header("location:login.php");
    exit();

}
$Aut=new Google_Service_Oauth2($googClinet);
$userData=$Aut->userinfo_v2_me->get();

$_SESSION['email']=$userData['email'];
$_SESSION['givenname']=$userData['givenname'];
$_SESSION['name']=$userData['name'];
$_SESSION['gender']=$userData['gender'];
$_SESSION['picture']=$userData['picture'];
$_SESSION['familyname']=$userData['familyname'];
$_SESSION['id']=$userData['id'];


header("location:giris.php");
exit();




?>
