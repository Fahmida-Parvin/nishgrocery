<?php
/*include "config.php";
$id = $_POST['id'];
$name = $_POST['u_name'];
$price = $_POST['u_price'];
$image = $_FILES['u_image'];
//print_r($image);
$imageLocation = $_FILES['u_image']['tmp_name'];
$imageName = $_FILES['u_image']['name'];
$image_des = "img/" . $imageName;

move_uploaded_file($imageLocation, $image_des);
$update_query = "UPDATE `grocery_product` SET `name`='$name',`price`='$price',`image`='$image' WHERE id='$id'";

if(mysqli_query($conn, $update_query)){
    echo "<script> alert('Updated')</script>";
    echo "<script>location.href='index.php'</script>";
}
?> */

include 'config.php';

$id = $_POST['id'];
$name = $_POST['u_name'];
$price = $_POST['u_price'];

$select_Query = "SELECT * FROM `grocery_product` WHERE id='$id'";
$select_Query_result = mysqli_query($conn, $select_Query);
$result = mysqli_fetch_array($select_Query_result);
$image = $result['image'];
$previmage = $result['image'];

if ($name === '' || $price === '') {
    echo "<script>alert('Not Filled')</script>";
    echo "<script>location.href = 'update.php? id=$id'</script>";
} else if ($result) {
    $imageLocation = $_FILES['u_image']['tmp_name'];
    $imageName = $_FILES['u_image']['name'];
    $imagesize = $_FILES['u_image']['size'];
    $image_des = "img/" . $imageName;
    $filesize = 2 * 1024 * 1024; // 2MB
    $allowedregex = '/\.(jpg|jpeg|png)$/i';

    $update_query = "UPDATE `grocery_product` SET `name`='$name',`price`='$price',`image`='$image_des' WHERE id = '$id'";

    if ( $imagesize <=  $filesize && preg_match($allowedregex, $imageName)) {
        echo $name . " " . $price . " " . $imageLocation . " " . $imagesize;

        
        // Delete previous image
        if (!empty($previmage) && file_exists($previmage)) {
            unlink($previmage);
        }

        
        if (mysqli_query($conn, $update_query)) {
            move_uploaded_file($imageLocation, $image_des);
            echo "<script>alert('Successfully Insert.')</script>";
            echo "<script>location.href = 'index.php'</script>";
        } else {
            echo "<script>alert('Failed to update the product.')</script>";
            echo "<script>location.href = 'index.php'</script>";
        }
    } else if ($imagesize >  $filesize) {
        echo "<script>alert('Size should not be more than 2MB.')</script>";
        echo "<script>location.href = 'index.php'</script>";
    } else {
        $update_query = "UPDATE `grocery_product` SET `name`='$name',`price`='$price' WHERE id = '$id'";
        if (mysqli_query($conn, $update_query)) {
            move_uploaded_file($imageLocation, $image_des);
            echo "<script>alert('Successfully Insert.')</script>";
            echo "<script>location.href = 'index.php'</script>";
        }
        echo "<script>location.href = 'index.php'</script>";
    }
} else {
    echo "<script>alert('Failed to update the product.')</script>";
    echo "<script>location.href = 'index.php'</script>";
}