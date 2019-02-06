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

if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['hesabimiolustur'])){


 if(isset($_GET['onaykodu']))

 {

 	$onaykodu=$_GET['onaykodu'];
$sifre=$_POST['sifre'];

$db=veritabaninabaglan();
$sorgu=$db->prepare("select onaykodu from users where onaykodu=:onaykodu");
$sorgu->bindParam("onaykodu",$onaykodu,PDO::PARAM_STR);
$sorgu->execute();
$sayi=$sorgu->rowCount();
if($sayi>0){

 $sorgu2=$db->prepare("UPDATE users  set sifre=:sifre where onaykodu=:onaykodu");
         $sorgu2->bindParam("sifre",$sifre,PDO::PARAM_STR);
         $sorgu2->bindParam("onaykodu",$onaykodu,PDO::PARAM_STR);
         $sorgu2->execute();

   
 $hata='<div style="background-color:green;color:white;height:8rem;width:100%;padding:2rem">Şifre Değitirme
     Talebiniz Başarıyla Gerçekleşmiştir <a href="login.php">Buradan Girişe gidebilirsiniz</a></div>';




}
else{

 $hata='<div style="background-color:red;color:white;height:6rem;width:100%">'.$onaykodu.'</div>';




}




}

else{
 $hata='<div style="background-color:red;color:white;height:6rem;width:100%">Onay kodu Boş olama E-postadaki linke tıklayın</div>';

}


 }












 ?>

 <section class="signupicerik">
  <div class="container-fluid">
    <div class="row">
   <div class="col-lg-1 col-sm-1 "></div>

   <div class="col-lg-4  col-md-4  col-sm-10 col-12 loginpanel px-5 py-3" >
   <div><?php  if(isset($hata)){echo $hata;} ?></div>

   	<h1>Şifre Değitirme</h1>


<form action="" method="POST" id="validationform3" name="validationform" >

  
 



  <div class="form-group">
  	<label for="">Yeni Şifre</label>
      <div class="input-group">
   <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
   <input type="password" placeholder="Şifre" class="form-control" name="sifre" id="password">
   <div class="input-group-append"><span class="input-group-text kemal"><i class="far fa-eye goster"></i><i class="far fa-eye-slash gizle"></i></span></div>
 </div>
 <p id="password_error_msg"></p>
  </div>

 
   <div class="form-group">
   	<label for="">Yeni Şifre Tekrarı</label>
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
