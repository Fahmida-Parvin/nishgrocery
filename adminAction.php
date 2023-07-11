<?php

include 'config.php';
session_start();
$username="admin";
$pass="admin";
$input_username=$_POST['a_username'];
$input_pass=$_POST['a_pass'];

if($input_username == $username && $input_pass==$pass){
 $_SESSION['a_username']=$username;
 echo "<script>location.href='index.php'</script>";
}
else{
    echo "<script>alert('Wrong Pass!!')</script>";
}


?>