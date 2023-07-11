<?php
include "config.php";
$id = $_GET['id'];
echo $id;

$delete_query = "DELETE FROM `grocery_product` WHERE id='$id'";
mysqli_query($conn, $delete_query);
header("location: index.php");
?>