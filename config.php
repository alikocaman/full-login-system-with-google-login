<?php

define('DBSERVER','localhost');
define('DBNAME','natro');
define('DBUSER','root');
define('DBPASSWORD','');

 function veritabaninabaglan(){

    $host=DBSERVER;
    $dbname=DBNAME;
    $dbuser=DBUSER;
    $dbpassword=DBPASSWORD;


    try{
      

        $db=new pdo("mysql:host=$host;dbname=$dbname",$dbuser,$dbpassword);

   $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     return $db;
    }


    catch (PDOException $e){

        echo $e->getMessage();


    }

}

veritabaninabaglan();



?>