
<?php 


session_start();

$a="";
 if(isset($_SESSION['user_email'])){
 
  $a=$_SESSION['user_email'];

}
 
 if(isset($_SESSION['access_taken']))

   $a=$_SESSION['email'];
 ?>



<div class="row bg-primary">
  
 <div class="col-md-9">
    <nav class="navbar navbar-expand-md bg-primary navbar-dark ">
       <button class="navbar-toggler" data-target="#bir" data-toggle="collapse">
         
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="navbar-collapse collapse" id="bir">
       <a href="" class="navbar-brand"><img src="src/images/logo.png" alt=""></a>  
      <ul class="navbar-nav">
        

  <li class="nav-item"><a href="" class="nav-link bir">Domain</a></li>
  <li class="nav-item"><a href="" class="nav-link iki">Web Sitesi</a></li>
  <li class="nav-item"><a href="" class="nav-link uc">Hosting</a></li>
  <li class="nav-item"><a href="" class="nav-link dort">E-mail</a></li>
  <li class="nav-item"><a href="" class="nav-link bes">Sunucu</a></li>
  <li class="nav-item"><a href="" class="nav-link alti">SSl</a></li>
  <li class="nav-item"><a href="" class="nav-link yedi">Diğer</a></li>


      </ul>

       </div>



    </nav>


 </div>
<div class="col-md-3 text-center ">
  
<span class="girisyap dropdown type="button"  data-toggle="dropdown"style="background-color:green"><i class="fas fa-user" style="background-color:green;color:white"></i><i style="color:white">Hesabım</i><i class="fas fa-caret-down" style="margin-left:.2rem;color:white"></i><div style="font-size:10px;color: white;text-overflow: ellipsis;overflow:hidden;white-space:nowrap;"><?php echo $a; ?></div></span>
<div class="dropdown-menu">
  
<a href="" class="dropdown-item">Müşteri Bilgilerim</a>
<a href="" class="dropdown-item">Hesap İşlemlerim</a>
<a href="" class="dropdown-item">Basında Biz</a>
<div class="dropdown-divider"></div>
<a href="" class="dropdown-item">Alan Adı Yönetimi</a>
<a href="" class="dropdown-item">Web Sitesi Yönetimi</a>
<a href="" class="dropdown-item">Hosting Yönetimi</a>
<a href="" class="dropdown-item">Sunucu Yönetimi</a>
<a href="" class="dropdown-item">Servis Yönetimi</a>
<a href="" class="dropdown-item">SSl Yönetimi</a>
<div class="dropdown-divider"></div>
<a href="logout.php" class="dropdown-item">Çıkış Yap</a>


</div>



<span class="sepetim" style="margin-top:-1rem !important"><i class="fas fa-shopping-cart"></i><a href="">Sepetim</a></span>

</div>
</div>