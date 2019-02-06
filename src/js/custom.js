
/*menulere tıklandığında renginin yeşil olması ve mega menu yapımı*/

$(document).ready(function(){
$(".gizle").hide();
$(".gizlee").hide();

$("#domainmegamenu,#digermegamenu,#emailmegamenu,#sslmegamenu,#sunucumegamenu,#websitesimegamenu,#hostingmegamenu").hide();


$('nav ul li a').click(function(e){

e.preventDefault();

var sinifi=$(this).attr('class');
if(sinifi=="nav-link bir"){

$("#domainmegamenu").toggle();
$("#digermegamenu,#emailmegamenu,#sslmegamenu,#sunucumegamenu,#websitesimegamenu,#hostingmegamenu").hide();


}
else if(sinifi=="nav-link iki"){


$("#websitesimegamenu").toggle();
$("#digermegamenu,#emailmegamenu,#sslmegamenu,#sunucumegamenu,#domainmegamenu,#hostingmegamenu").hide();

}

else if(sinifi=="nav-link uc"){
	$("#hostingmegamenu").toggle();

$("#digermegamenu,#emailmegamenu,#sslmegamenu,#sunucumegamenu,#domainmegamenu,#websitesimegamenu").hide();

}

else if(sinifi=="nav-link dort"){
	$("#emailmegamenu").toggle();

$("#digermegamenu,#hostingmegamenu,#sslmegamenu,#sunucumegamenu,#domainmegamenu,#websitesimegamenu").hide();

}
else if(sinifi=="nav-link bes"){
	$("#sunucumegamenu").toggle();

$("#digermegamenu,#hostingmegamenu,#sslmegamenu,#emailmegamenu,#domainmegamenu,#websitesimegamenu").hide();

}


else if(sinifi=="nav-link alti"){
	$("#sslmegamenu").toggle();

$("#digermegamenu,#hostingmegamenu,#sunucumegamenu,#emailmegamenu,#domainmegamenu,#websitesimegamenu").hide();

}
else if(sinifi=="nav-link yedi"){
	$("#digermegamenu").toggle();

$("#sslmegamenu,#hostingmegamenu,#sunucumegamenu,#emailmegamenu,#domainmegamenu,#websitesimegamenu").hide();

}







	
});

$(".kemal").click(function(event) {

 var deger=$("input[name='sifre']").attr('type');
 if(deger=="text"){

 $("input[name='sifre']").attr('type','password');
 $(".gizle").show();
$(".goster").hide();



 }
 else {
 $("input[name='sifre']").attr('type','text');
  $(".gizle").hide();
$(".goster").show();

 }


});

$(".kemalcik").click(function(event) {

 var deger=$("input[name='sifretekrar']").attr('type');
 if(deger=="text"){

 $("input[name='sifretekrar']").attr('type','password');
 $(".gizlee").show();
$(".gosterr").hide();



 }
 else {
 $("input[name='sifretekrar']").attr('type','text');
 
  $(".gizlee").hide();
 $(".gosterr").show();

 }


});







})


