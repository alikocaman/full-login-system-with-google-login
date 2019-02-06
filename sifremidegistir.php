
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
 ?>
<?php 




 ?>


 <section class="signupicerik">
  <div class="container-fluid">
    <div class="row">
   <div class="col-lg-1 col-sm-1 "></div>
   <div class="col-lg-4  col-md-4  col-sm-10 col-12 loginpanel px-5 py-3" >
    <div style="background-color:green;height: 8rem;padding:1rem;color: white">
    <i class="fas fa-check" style="color:white"></i>Tebrikler! Şifrenizi değiştirmeniz için kullanacağınız "Onay Kodu" kayıtlı e-mail adresinize başarıyla gönderildi. 
Lütfen gelen kutunuzla birlikte istenmeyen e-posta (spam) klasörünüde kontrol edin.
    </div>

    <h1>Şifre Sıfırlama</h1>
<p class="hata"><?php echo $email_error_msg ?></p>

<form action="" method="POST" id="validationform2" name="validationform2" >

  
  <div class="form-group">
    <label for="">Onay Kodu</label>
      <div class="input-group">
   <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-envelope"></i></span></div>
   <input type="text" placeholder="Onay Kodunuz" class="form-control" name="onaykodu
   " required="" id="emailrepeat">

 </div>


  </div>



  <div class="form-group">
    <label for="">Yeni Şifreniz</label>
      <div class="input-group">
   <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
   <input type="password" placeholder="Şifre" class="form-control" name="sifre" id="password">
   <div class="input-group-append"><span class="input-group-text kemal"><i class="far fa-eye goster"></i><i class="far fa-eye-slash gizle"></i></span></div>
 </div>
 <p id="password_error_msg"></p>
  </div>

 
   <div class="form-group">
       <label for="">Yeni Şifre Tekrarınız</label>
      <div class="input-group">
   <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
   <input type="password" placeholder="Şifretekrar" class="form-control" name="sifretekrar"  id="passwordrepeat" >
   <div class="input-group-append"><span class="input-group-text kemalcik"><i class="far fa-eye gosterr"></i><i class="far fa-eye-slash gizlee"></i></span></div>
 </div>
<p id="passwordrepeat_error_msg"></p>
  </div>





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
