







 

<?php 
ob_start();
require_once 'inc/header.php';
require_once 'inc/menu.php';
require_once 'config.php';
require_once 'classes/userclasses.php';

  require_once 'inc/websitesimegamenu.php';
   require_once 'inc/digermegamenu.php';
   require_once 'inc/emailmegamenu.php';
    require_once 'inc/hostingmegamenu.php';
    require_once 'inc/sslmegamenu.php';
   require_once 'inc/sunucumegamenu.php';
    
 require_once 'inc/domainmegamenu.php';

 require_once 'mailgonderme/vendor/autoload.php';
 $nesnem=new user();
  use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;




?>
<?php 

$hata="";

 if($_SERVER['REQUEST_METHOD']=="POST"&& isset($_POST['sifrehatirlatbutton'])){
 $email=$_POST['email'];

$sonuc=$nesnem->sifremidegistir($email);
if($sonuc){

 header("location:sifremidegistir.php");
 exit();

}
else{
$hata='<div style="background-color:red;color:white;height:4rem;width:100%">
 Kayıtlarımız Arasında Böyle Bir Email Kaydı Bulunmamaktadır </div>';


}






}



 ?>
<section class="loginicerik">
	<div class="container-fluid">
		<div class="row">
   <div class="col-lg-1 col-sm-1 "></div>
   <div class="col-lg-4  col-md-4  col-sm-10 col-12 loginpanel px-5 py-3" >
 <div class="row justify-content-center">
   <div class="col-md-10 col-lg-10 col-sm-10 col-10" style="background-color:#3BAFDA;color:white;height:auto;border-radius:4px">
     
     Natro üye hesabınızla ilişkili e-posta, gsm numarası yada kayıtlı domain adından birini girerek DEVAM ET’e tıklayın. Size yeni şifre oluşturabileceğiniz bir onay kodu göndereceğiz.
   </div>
 </div>



    <h3>Giriş Bilgilerini Hatırlat</h3>
    <p><?php echo $hata; ?></p>


<form action="" method="post">
 
   
 <div class="form-group sifremiunuttum">
  <div class="input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div>
   <input type="text" placeholder="eposta kayıtlı domain telefon no" class="form-control" name="email">
</div> </div>
 

  <div class="form-group">

    <input type="submit" class="form-control sifremiunuttumbutton" name="sifrehatirlatbutton" value="Devam Et">
    
  </div>






</form>


   </div>
   <div class="col-lg-7  col-md-8 col-sm-1 " ></div>

    </div>
	</div>


</section>

 <?php 

 require_once 'inc/footer.php';
   ?>