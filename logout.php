<?php

session_start();
if(isset($_SESSION['username'])){
    session_unset();
    session_destroy();
  echo"<script>location.href='front.html'</script>";
}
else{

    //echo "<script> alert('Do not Acces from URL LogIn first')</script>";
    echo " <script> location.href='front.html'</script>" ;
    }