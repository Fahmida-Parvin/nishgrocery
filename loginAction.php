<?php
include 'config.php';
$l_username = $_GET['l_username'];
$l_pass = $_GET['l_pass'];
$result = mysqli_query($conn, "SELECT * FROM `register` WHERE db_username='$l_username' AND db_pass='$l_pass'");

if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['username'] = $l_username;
    echo "<script>location.href='home.php'</script>";
} else {
    echo "<script>alert('Username and password do not match')</script>";
    echo "<script>location.href='login.php'</script>";
}
?>

