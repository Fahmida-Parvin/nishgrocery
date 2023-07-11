<?php
include "config.php";
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_FILES['image'];
//print_r($image);
$imageLocation = $_FILES['image']['tmp_name'];
$imageName = $_FILES['image']['name'];
$image_des = "img/" . $imageName;


move_uploaded_file($imageLocation, $image_des);
$insert_query = "INSERT INTO `grocery_product`( `name`, `price`, `image`) VALUES ('$name','$price','$image_des')";

if(mysqli_query($conn, $insert_query)){
    //echo "<script> alert('Product inserted')</script>";
    echo "<script>location.href='index.php'</script>";
}
?>