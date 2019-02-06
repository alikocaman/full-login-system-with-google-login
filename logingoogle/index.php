
<?php

session_start();
if(!isset($_SESSION['access_taken'])) {
    header("location:login.php");
    exit();
}

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
        <div class="col-md-3" align="center">
<img src="" alt="">

        </div>
          <div class="col-md-9" align="center">

         <table class="table table-bordered table-hover">
              
              <tbody>
                  
                     <tr>
                    <td>İD</td>
                    <td><?php echo $_SESSION['id'];?></td>
                      </tr>

                       <tr>
                    <td>fİRST NAME</td>
                    <td><?php echo $_SESSION['givenname'];?></td>
                      </tr>
                         <tr>
                    <td>Email</td>
                    <td><?php echo $_SESSION['email']; ?></td>
                      </tr>
                         <tr>
                    <td>Lastname</td>
                    <td><?php echo $_SESSION['familyname']; ?></td>
                      </tr>
                         <tr>
                    <td>Gender</td>
                    <td><?php echo $_SESSION['gender'] ;?></td>
                      </tr>
                  


              </tbody>


         </table>
        </div>
    </div>


</div>
</body>
</html>