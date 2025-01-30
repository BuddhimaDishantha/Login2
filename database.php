<?php
$server="localhost";
 $user="root";
 $password="";
 $db_name="user_db";
 $conn="";
 $conn=mysqli_connect($server,$user,$password,$db_name);
 if(isset($conn)){
    echo "connect";
 }
?>