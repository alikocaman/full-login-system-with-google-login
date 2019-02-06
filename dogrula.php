<?php 

 require_once 'config.php';


$emaill=$_GET['email'];
$kodd=$_GET['kod'];
$activasyon=0;

  $db=veritabaninabaglan();

 $sorgu=$db->prepare("select user_id from users where email=:email and kod=:kod and aktivasyon=0");
 $sorgu->bindParam("email",$emaill,PDO::PARAM_STR);
 $sorgu->bindParam("kod",$kodd,PDO::PARAM_STR);

 $sorgu->execute();
   $count=$sorgu->rowCount();

if($count>0){

 
$sorgum=$db->exec("update users set aktivasyon=1");




echo '<h1 style="color:white;text-align:center;background-color:green">Aktivasyonuz başarıyla gerçekleşti</h1>';




}




else{

echo '<h1 style="color:white;text-align:center;background-color:red">zaten aktivasyon yapmışsınız</h1>';


}








 ?>