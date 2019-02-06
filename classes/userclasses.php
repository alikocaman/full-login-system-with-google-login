<?php 
  use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;


class user
{

  


  public function user_register($email,$sifre,$kod){


 try{
   $db=veritabaninabaglan();
  
   $query=$db->prepare("select user_id from users where (email=:email)");
    $query->bindParam("email",$email,PDO::PARAM_STR);

    $query->execute();

$count=$query->rowCount();
if ($count<1) {



  $sorgu=$db->prepare("INSERT INTO users(email,sifre,kod) values(:email,:sifre,:kod)");

  $sorgu->bindParam("email",$email,PDO::PARAM_STR);
  $sorgu->bindParam("sifre",$sifre,PDO::PARAM_STR);
  $sorgu->bindParam("kod",$kod,PDO::PARAM_STR);
  $sorgu->execute();

return true;


 
}

else{
 return false;

}







      

 }


 catch(EXCEPTION $e){

  echo "birtakım hatalar oldu".$e->getMessage();

 }

  
    }


 public function sifremidegistir($email){

$db=veritabaninabaglan();
 $sorgu=$db->prepare("select  email from users where email=:email");
$sorgu->bindParam("email",$email,PDO::PARAM_STR);
$sorgu->execute();
 
 $emailsayisi=$sorgu->rowCount();


 if($emailsayisi>0){

$onaykodu=md5(rand(0,1000));


$db=veritabaninabaglan();
$sorgu=$db->prepare("UPDATE  users set onaykodu=:onaykodu  where email=:email");
$sorgu->bindParam("onaykodu",$onaykodu,PDO::PARAM_STR);
$sorgu->bindParam("email",$email,PDO::PARAM_STR);
$sorgu->execute();



$mail = new PHPMailer(true);
  

  


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
    $mail->Subject = 'Şifre Değiştirme Talebi';
    $mail->Body='şifrenizi Değiştirmek için  Size Gönderilmiş olan linke tıklanyınız'.
    '<a href="http://localhost/aa/natrologin/sifredogrulama.php ?onaykodu='.$onaykodu.'">'.$onaykodu.'</a>';
 


    $mail->send();
    echo 'Message has been sent';
} 

catch (Exception $e) {

    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
 return true;



}

else {
 
 return  false;

}

















 }









}





 ?>