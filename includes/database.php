<?php

$connection = mysqli_connect(hostname: 'localhost',username: 'root',password: '',database: 'test_db');

if( $connection == false)
   {
      
   
   echo " access denied for database!<br>";
   echo mysqli_connect_error();
   exit();
   
   }


?>