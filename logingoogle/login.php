
<?php

require_once  'config.php';


if(isset($_SESSION['access_taken'])) {
    header("location:index.php");
    exit();
}










$loginurl=$googClinet->createAuthUrl();



?>






<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="UTF-8">
	<title>Login With Google</title>
</head>
<body>
	<div class="container" style="margin-top: 100px">
		
  <div class="row justify-content-center">
<div class="col-md-6" align="center">	

<img src="images/logo.png" alt=""><br><br>
<form action="	">
	
 <input    type="text"  placeholder="Email....." name="email" class="form-control"><br>

 <input placeholder="Password....." name="placeholder="" " class="form-control"><br>
 <input type="submit" value="Log İn" class="btn btn-primary">
 <a href="<?php echo $loginurl; ?>" class="btn-danger" type="button">Log İn</a>

</form>
</div>
  	</div>


	</div>
</body>
</html>