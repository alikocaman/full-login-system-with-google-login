
   /*form validation için yaptığım örnek*/
 function inputvalidation(txtinput){
  



var deger=txtinput.getAttribute("id");
  var rgx="";
if(deger=="email"){
    if(txtinput.value!==""){
     rgx=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}/;
     if(txtinput.value.match(rgx)){
emailgosterilecek.innerHTML='<i class="fas fa-check" style="margin-right:1rem"></i>'+'Doğru Format';
 emailgosterilecek.style.color="green";
  var emaildurum="bir";
}
     else{
emailgosterilecek.innerHTML='<i class="fas fa-times" style="margin-right:1rem"></i>'+'Hatalı email yazımı';
 emailgosterilecek.style.color="yellow";
 emaildurum="sifir";

}
}
else {
 emailgosterilecek.innerHTML='<i class="fas fa-times" style="margin-right:1rem"></i>'+'Boş Bırakmayınız';
emailgosterilecek.style.color="yellow";
emaildurum="sifir";


}
  }

/*email doğrulaması bitti*/
/*email tekrar doğrulaması başladı*/
if(deger=="emailtekrar"){

  if(txtinput.value!==""){
rgx=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}/;
  if(txtinput.value.match(rgx)){
   
     var emailtekrardegeri= txtinput.value;
   var  emaildegeri=document.getElementById("email").value;
   if(emaildegeri==emailtekrardegeri){
emailtekrargosterilecek.innerHTML='<i class="fas fa-check" style="margin-right:1rem"></i>'+'Emailler uyuşuyor';
emailtekrargosterilecek.style.color="green";
 var emailtekrardurum="bir";

   }
   else{

  emailtekrargosterilecek.innerHTML='<i class="fas fa-times" style="margin-right:1rem"></i>'+'Emailler Uyuşmuyor Tekrar gözden geçirin';
emailtekrargosterilecek.style.color="yellow";
emailtekrardurum="sifir";

   }


  }
    else{
      emailtekrargosterilecek.innerHTML='<i class="fas fa-times" style="margin-right:1rem"></i>'+'Email Format Hatası';
emailtekrargosterilecek.style.color="yellow";
emailtekrardurum="sifir";



    }

   
  }
else{
emailtekrargosterilecek.innerHTML='<i class="fas fa-times" style="margin-right:1rem"></i>'+'Boş Bırakmayınız';
emailtekrargosterilecek.style.color="yellow";
emailtekrardurum="sifir";

}


}
/*email tekrar doğrulaması bitti*/
  
/*şimdi ise şifre doğrulaması yapacağız*/
if(deger=="sifre")
{
  if(txtinput.value!=""){
    
    rgx=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/;

    if(txtinput.value.match(rgx)){
  sifregosterilecek.innerHTML='<i class="fas fa-check" style="margin-right:1rem"></i>'+'uygun format';
sifregosterilecek.style.color="green";
 var sifredurum="bir";



    }
    else{
  sifregosterilecek.innerHTML='<i class="fas fa-times" style="margin-right:1rem"></i>'+'Şifrenizi kontrol ediniz Şifrede bir büyük harf bir küçük harf ve bir rakam yer almalıdır';
sifregosterilecek.style.color="yellow";

 sifredurum="sifir";


    }
 }
else {
  
sifregosterilecek.innerHTML='<i class="fas fa-times" style="margin-right:1rem"></i>'+'Boş Bırakmayınız';
sifregosterilecek.style.color="yellow";
sifredurum="sifir";


}
}
/*şifre tekrar validation yeri*/

if(deger=="sifretekrar"){

 if(txtinput.value!=="")
 {
    var sifredeger=document.getElementById("sifre").value;
    var sifredegertekrar=txtinput.value;
  
   if(sifredeger==sifredegertekrar)
   {
sifretekrargosterilecek.innerHTML='<i class="fas fa-check" style="margin-right:1rem"></i>'+'şifrelerler uyuşmuyor';
sifretekrargosterilecek.style.color="green";
 var sifretekrardurum="bir";


 }
else{
sifretekrargosterilecek.innerHTML='<i class="fas fa-times" style="margin-right:1rem"></i>'+'şifrelerler uyuşmuyor';
sifretekrargosterilecek.style.color="yellow";
sifretekrardurum="sifir";

}

}
else{
  
sifretekrargosterilecek.innerHTML='<i class="fas fa-times" style="margin-right:1rem"></i>'+'Boş Bırakmayınız';
sifretekrargosterilecek.style.color="yellow";
sifretekrardurum="sifir";

}
 


}










 }


