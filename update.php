<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

    <title>Nish's Grocery</title>
    <style>
    body{
        background-image: url(img/pic3.jpg);
        background-position: top 25% right 0;
       background-size: cover;
       background-repeat: no-repeat;
    }
        form{
            color: rgb(25, 17, 17);
         box-shadow: 0px 0px 10px 0px;
         border-radius: 10px;
         padding: 23px;
         background-color: rgba(158, 131, 131, 0.726);
        }
        .regis{
    text-align: center;
    padding: 5px;
}
    </style>
  </head>
  <body>
  <section class="navbar">
      <h4 class="logo">Nish's Grocery</h4>
               <div class="navdiv">
                      <ul id="nav">
                      <li> <a href="front.html">Home</a></li>
                       <li><a href="register.php">Registration</a></li>
                       <li><a href="login.php">Log In</a> </li>
                       <li><a href="index.php">Insert Product </a> </li> 
                  
                   </ul>
               </div>
           </section>
<?php
include "config.php";
$id = $_GET['id'];
$dataFetchQuery = "SELECT * FROM `grocery_product` WHERE id='$id'";

$record = mysqli_query($conn, $dataFetchQuery);
$row = mysqli_fetch_array($record);
?>
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <form action="updateAction.php" method="post" enctype="multipart/form-data">
                <div>
                    <h2>Update Product</h2>
                </div>
                <div class="mb-3">
                    Product Name:
                    <input type="text" name="u_name" class="form-control" value="<?php echo $row['name']; ?>">
                </div>
                <div class="mb-3">
                    Product Price:
                    <input type="text" name="u_price" class="form-control" value="<?php echo $row['price']; ?>">
                </div>
                <div class="mb-3">
                    Product Image:
                    <input type="file" id='n_image' name="u_image" class="form-control">
                </div>
                
                <div class="mb-3">
                    Image:
                    <img  id="s_image" width="80px" src="<?php echo $row['image']; ?>" alt="">
                </div>
                <!--Id pathanor technique-->
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="Login" class="btn btn-primary col-12">Update</button>
            </form>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#n_image').change(function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#s_image').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</body>
</html>