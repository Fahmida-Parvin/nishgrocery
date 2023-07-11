<?php
 
 session_start();
 include 'product.php';
 if(isset($_SESSION['username'])){
  echo "<h1>Hello ".$_SESSION['username']." </h1>";

 }
  else{
    echo "<script> alert('Do not access from url!!')</script>";
    echo " <script> location.href='login.php'</script>" ;
}



