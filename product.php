<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Grocery shop</title>
</head>

<body>
  <section class="navbar">
    <h4 class="logo">Nish's Grocery</h4>
    <div class="navdiv">
      <ul id="nav">
        <li> <a href="product.php">Home</a></li>
        <li><a href="index.php">Insert Product </a> </li>
        <li><a href="logout.php">Log Out </a> </li>

      </ul>
    </div>
  </section>
  <div class="container">
    <!-- <div class="bg-info text-center p-2">
    <h1>Nish's Grocery</h1> !-->
  </div>

  <div class="row">
    <br>
    <?php
    include 'config.php';
    $allData = mysqli_query($conn, "SELECT * FROM `grocery_product`");
    while ($row = mysqli_fetch_array($allData)) {
      echo  "
    <div class='col-lg-3 col-md-6'>
      <img class='img-fluid img-thumbnail' src='{$row['image']}' alt=''>
      <h5 class='text-center'>Price {$row['price']}</h5>
      <a class='btn btn-danger col-4 d-block m-auto px-9 text-white' href='frontCart.php?mid={$row['id']}'>Add to Cart</a>
    </div>
  ";
    }
    ?>
  </div>

  </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>