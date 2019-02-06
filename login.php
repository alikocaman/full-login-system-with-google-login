<?php 
$loginhata="";

session_start();
ob_start();

require_once 'inc/header.php';
require_once 'inc/menu.php';
require_once 'config.php';

require_once 'inc/websitesimegamenu.php';
   require_once 'inc/digermegamenu.php';
   require_once 'inc/emailmegamenu.php';
    require_once 'inc/hostingmegamenu.php';
    require_once 'inc/sslmegamenu.php';
   require_once 'inc/sunucumegamenu.php';
    
 require_once 'inc/domainmegamenu.php';

 ?>

<?php

require_once  'configg.php';


if(isset($_SESSION['access_taken'])) {
    header("location:giris.php");
    exit();
}










$loginurl=$googClinet->createAuthUrl();



?>









 <?php 
 if($_SERVER['REQUEST_METHOD']=="POST" &&isset($_POST['girisyap']))

 {
  $db=veritabaninabaglan();

  $email=$_POST['musteriemail'];
   $sifre=$_POST['musterisifre'];

   $sorgu=$db->prepare("select user_id,email from users where email=:musteriemail and sifre=:musterisifre");

   $sorgu2=$db->prepare("select user_id,email from users where email=:musteriemail and sifre=:musterisifre and aktivasyon=0");
 

   $sorgu->bindParam("musteriemail",$email,PDO::PARAM_STR);
   $sorgu->bindParam("musterisifre",$sifre,PDO::PARAM_STR);
  $sorgu2->bindParam("musteriemail",$email,PDO::PARAM_STR);
   $sorgu2->bindParam("musterisifre",$sifre,PDO::PARAM_STR);
   $sorgu->execute();
   $sorgu2->execute();



   if($sorgu->rowcount()>0){



     if($sorgu2->rowcount()>0)
     {

      $loginhata='<div style="color:white;background-color:red;width:80%;height:auto">Üzgünüz Girişi Yapmanıza izin Veremeyiz Lütfen Aktivasyonu gerçekleştiriniz</div>';


     }

     else{
  $gelen=$sorgu->fetch();
   $_SESSION['user_id']=$gelen['user_id'];
   $_SESSION['user_email']=$gelen['email'];

  
header("location:http://localhost/aa/natrologin/giris.php");

     }
      
   


 
 


     
    

}
else
{


$loginhata='<div style="color:white;background-color:red;width:80%;height:auto">Üzgünüz Email adresiniz yada şifreniz hatalıdır tekrar deneyini</div>';

}






 }




  ?>


<section class="loginicerik">
	<div class="container-fluid">
		<div class="row">
   <div class="col-lg-1 col-sm-1 "></div>
   <div class="col-lg-4  col-md-7  col-sm-10 col-12 loginpanel px-5 py-3" ><h1>Müşteri Girişi</h1>
    <div class="loginhata"><?php echo $loginhata; ?></div>
<form action="" method="POST">
  <div class="form-group">
    <label for="">Müşteri No, Gsm No veya E-Posta Adresiniz<i class="fas fa-info-circle"></i></label>
    <div class="input-group">
      <div class="input-group-prepend"><span class="input-group-text" style="background-color:green"><i class="fas fa-user" style="background-color:green;color:white"></i></span></div>
      <input type="email" placeholder="Müşteri Email" class="form-control" name="musteriemail">
    </div>
    
  </div>
    <div class="form-group">
    <label for="">Şifre<i class="fas fa-info-circle"></i></label>
    <div class="input-group">
      <div class="input-group-prepend"><span class="input-group-text" style="background-color:green"><i class="fas fa-lock" style="color:white"></i></span></div>
      <input type="password" placeholder="Şifre" class="form-control" name="musterisifre">
      <div class="input-group-append"><span class="input-group-text"><i class="fas fa-eye"></i></span></div>
    </div>
   
  </div>
  <div class="form-group">
    <input type="checkbox" name="benihatirla"><span style="color:white">Beni Hatırla</span><a href="sifremiunutum.php">Şifremi Unuttum</a>
  </div>

<div class="form-group">
<div class="row">
  <div class="col-md-6 col-sm-12 col-lg-6">

    <input type="submit" value="Giriş Yap" class="form-control loginbutton" name="girisyap">
      </div>
      <div class="col-md-6 col-sm-12 col-lg-6">
<a class="btn btn-danger form-control"  href= "<?php echo $loginurl; ?>" name="googlegirisyap">Google ile Giriş Yap</a>
</div>
</div>
</div>
  <div class="form-group text-center ">

<a href="signup.php" class="form-control btn btn-success" type="button" style="text-decoration: none;color:white;height: 50px">Yeni Hesap Oluştur</a>
    
  </div>






</form>


   </div>
   <div class="col-lg-7  col-md-5 col-sm-1 " ></div>

    </div>
	</div>


</section>

 <?php 

 require_once 'inc/footer.php';
   ?>