
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>


<?php 

$a="aliveli";
$email_error_msg="";
require_once 'inc/header.php';
require_once 'inc/menu.php';

require 'mailgonderme/vendor/autoload.php';


require_once 'inc/websitesimegamenu.php';
require_once 'inc/digermegamenu.php';
   require_once 'inc/emailmegamenu.php';
    require_once 'inc/hostingmegamenu.php';
    require_once 'inc/sslmegamenu.php';
   require_once 'inc/sunucumegamenu.php';
    
 require_once 'inc/domainmegamenu.php';
require_once 'config.php';
 require_once 'classes/userclasses.php';



 require_once 'mailgonderme/vendor/autoload.php';
 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

  $nesnem=new user();
  $mail = new PHPMailer(true);  

if($_SERVER['REQUEST_METHOD']=="POST"&&isset($_POST['hesabimiolustur']))
{
$kod=md5(rand(0,1000));

$email=$_POST['email'];

$sifre=$_POST['sifre'];



  $sonuc=$nesnem->user_register($email,$sifre,$kod);

  


  if($sonuc){

try {
    //Server settings



$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
    );


                                // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'alikocaman676@gmail.com';                 // SMTP username
    $mail->Password = 'Kalender1984.';                           // SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->SetLanguage("tr", "phpmailer/language");
    $mail->CharSet  ="utf-8";
    $mail->Encoding="base64";
   // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
                                     // TCP port to connect to

    //Recipients
    $mail->setFrom('alikocaman676@gmail.com');
   $mail->addAddress($email);  
              // Name is optional
  
    //Attachments
   // Optional name

    //Content
    $mail->isHTML(true);                              
    $mail->Subject = 'E-posta Doğrulama linki ';
    $mail->Body='mailinizi Doğrulamak için Aşağıdaki linke Tıklayın'."<br>".'<a href="http://localhost/aa/natrologin/dogrula.php?email='.$email.' && kod='.$kod.'">Tiklayınız</a>';


    $mail->send();
    echo 'Message has been sent';
} 

catch (Exception $e) {

    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}






   

  }












  else{
    $email_error_msg='<span style="color:blue">Kaydınız Yapılamadı aynı emaile sahip kullanıcı mevcut</span>';

  }




}




?>

<section class="signupicerik">
  <div class="container-fluid">
    <div class="row">
   <div class="col-lg-1 col-sm-1 "></div>
   <div class="col-lg-4  col-md-4  col-sm-10 col-12 loginpanel px-5 py-3" ><h1>Müşteri Girişi</h1>
<p class="hata"><?php echo $email_error_msg ?></p>

<form action="" method="POST" id="validationform" name="validationform" >

  <div class="form-group">
    <div class="input-group">
   <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-envelope"></i></span></div>
   <input type="email" placeholder="Email Adresinizi Giriniz" class="form-control" name="email" id="email" >

 </div>
<p id="email_error_msg"></p>

  </div>
  <div class="form-group">
      <div class="input-group">
   <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-envelope"></i></span></div>
   <input type="email" placeholder="Email Adres Tekrarı" class="form-control" name="emailtekrar" required="" id="emailrepeat">

 </div>
 <p id="emailrepeat_error_msg"></p>

  </div>



  <div class="form-group">
      <div class="input-group">
   <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
   <input type="password" placeholder="Şifre" class="form-control" name="sifre" id="password">
   <div class="input-group-append"><span class="input-group-text kemal"><i class="far fa-eye goster"></i><i class="far fa-eye-slash gizle"></i></span></div>
 </div>
 <p id="password_error_msg"></p>
  </div>

 
   <div class="form-group">
      <div class="input-group">
   <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
   <input type="password" placeholder="Şifretekrar" class="form-control" name="sifretekrar"  id="passwordrepeat" >
   <div class="input-group-append"><span class="input-group-text kemalcik"><i class="far fa-eye gosterr"></i><i class="far fa-eye-slash gizlee"></i></span></div>
 </div>
<p id="passwordrepeat_error_msg"></p>
  </div>

<div class="form-group">
  <input type="checkbox" name="kampanyaistegi"><span class="kampanya">Koca Bilişim tarafından gönderilecek kampanya iletilerini almak istiyorum</span>
</div>
<div class="form-group"><span class="sozlesme">Hesap Oluşturarak Hizmet Sözleşmesini ve Servis Şartlarını kabul etmiş sayılırsınız.</span></div>


 <div class="form-group text-center ">

<input type="submit"  class="form-control btn btn-success"  class="aliveli" value="Hesabımı Oluştur" name="hesabimiolustur" id="submitbutton">
    
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
<script src="src/js/validation2.js"></script>
