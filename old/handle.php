<?php
include ('includes/database.php');


$login = $_POST ['login'];
$password = $_POST ['password'];


$count = mysqli_query( $connection, "SELECT * from `users` Where `login` = '".$login."' AND `password` = '".$password."'");

if (mysqli_num_rows($count) == 0 )

{
     echo 'You are not registired';
}else
{       
    echo 'Hello,'. $login . ':)';
} 
?>