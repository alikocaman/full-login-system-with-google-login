$(function(){

$("#email_error_msg").hide();
$("#emailrepeat_error_msg").hide();
$("#password_error_msg").hide();
$("#paswordrepeat_error_msg").hide();

var email_error=false;
var emailrepeat_error=false;
var password_error=false;
var passwordrepeat_error=false;

$("#email").focusout(function(event) {

check_email();

});



$("#emailrepeat").focusout(function(event) {

check_emailrepeat();

});


$("#password").focusout(function(event) {

check_password();

});



$("#passwordrepeat").focusout(function(event) {

check_passwordrepeat();

});



/* email doğrulaması codları başladı*/
 function check_email(){

 var rgx=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}/;
 if($("#email").val().match(rgx))
 {
 $("#email_error_msg").show();
 	$("#email_error_msg").html('<i class="fas fa-check" style="color:green"></i> <span style="color:white">Geçerli Email formatı</span>');
 email_error=false;

 }
 else{

 	$("#email_error_msg").show();
 	$("#email_error_msg").html('<i class="fas fa-times" style="color:red"></i> <span style="color:white">Geçersiz Email  formatı</span>');
  
  email_error=true;
 }




 }
 /* email doğrulaması codları bitti*/
  /* email tekrarı doğrulaması codları başladı*/
  function check_emailrepeat(){
 
if($("#email").val()==$("#emailrepeat").val()){

$("#emailrepeat_error_msg").show();
 	$("#emailrepeat_error_msg").html('<i class="fas fa-check" style="color:green"></i> <span style="color:white">Emailler Uyuşuyor</span>');
 emailrepeat_error=false;

}
else{
	$("#emailrepeat_error_msg").show();
 	$("#emailrepeat_error_msg").html('<i class="fas fa-times" style="color:red"></i> <span style="color:white">Emailler Aynı Değil!</span>');
 emailrepeat_error=true;
}








  }


   /* şifre doğrulaması codları başlardı*/
  function check_password(){

  	 var  rgx=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/;
  	if($("#pasword").val()!==""){

     
     if($("#password").val().match(rgx)){

$("#password_error_msg").show();
 	$("#password_error_msg").html('<i class="fas fa-check" style="color:green"></i> <span style="color:white">şifre formata uygun');
     
     password_error=false;
     }
     else{
     
     	$("#password_error_msg").show();
 	$("#password_error_msg").html('<i class="fas fa-times" style="color:red"></i> <span style="color:white">Bir küçük Bir büyük  bir özel karakter ve bir harf kullanılmalı</span>');
      	password_error=true;
     }

  	}
  	else{
  		$("#password_error_msg").show();
 	$("#password_error_msg").html('<i class="fas fa-times" style="color:red"></i> <span style="color:white">Boş Bırakılamaz !</span>');

  	password_error=true;

  	}
  	



  }


  /* şifre  doğrulaması codları bitti*/
    /* şifre  tekrar kodları başladı*/

 
 function check_passwordrepeat(){

 	if($("#password").val()==$("#passwordrepeat").val()){


      	$("#passwordrepeat_error_msg").show();
 	$("#passwordrepeat_error_msg").html('<i class="fas fa-check" style="color:green"></i> <span style="color:white">Şifreler Uyuşuyor</span>');
     
     passwordrepeat_error=false;



 	}
 	else {
 		$("#passwordrepeat_error_msg").show();
 	$("#paswordrepeat_error_msg").html('<i class="fas fa-times" style="color:red"></i> <span style="color:white">Şifreler Uyuşmuyor!</span>');
    
    passwordrepeat_error=true;
 	}

 }

   /* şifre  tekrar kodları bitti*/



/* validationun yapıldığı yer*/


$("#validationform").submit(function(){


check_email();
check_emailrepeat();
check_password();
check_passwordrepeat();

if(email_error==false&&emailrepeat_error==false&&password_error==false&&passwordrepeat_error==false)
{

return true;

}
else{

return false;

}

})





$("#validationform2").submit(function(){



check_password();
check_passwordrepeat();

if(password_error==false&&passwordrepeat_error==false)
{

return true;

}
else{

return false;

}

})



$("#validationform3").submit(function(){



check_password();
check_passwordrepeat();

if(password_error==false&&passwordrepeat_error==false)
{

return true;

}
else{

return false;

}

})























 

})