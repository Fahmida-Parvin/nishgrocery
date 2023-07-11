<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Nish's Grocery</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background-image: url(img/pic3.jpg);
      background-position: top 25% right 0;
      background-size: cover;
      background-repeat: no-repeat;
    }

    form {
      color: rgb(25, 17, 17);
      box-shadow: 0px 0px 10px 0px;
      border-radius: 10px;
      padding: 23px;
      background-color: rgba(158, 131, 131, 0.726);
    }

    .regis {
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
        <li> <a href="product.php">Home</a></li>

        <li><a href="login.php">Insert </a> </li>
        <li> <a href="logout.php">Log Out</a></li>

      </ul>
    </div>
  </section>

  <!--product display container -->
  <form>
    <table class="table table-hover">
      <thead>
        <tr>

          <th>Name</th>
          <th>Price</th>
          <th>Image</th>
        </tr>
      </thead>
      <tbody>
        <?php
   include 'config.php';
   $allData = mysqli_query($conn, "SELECT * FROM `cart`");
   while($row=mysqli_fetch_array($allData)){
     echo  "
     <tr>
     
     <td>{$row['id']}</td>
     <td>{$row['name']}</td>
     <td>{$row['price']}</td>
       <td><img width='68px' src='$row[image]' alt=''> </td>
       <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Delete</a></td>
      </tr>
     ";
   }
   ?>
      </tbody>
    </table>

    <div class="container-fluid">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <form>
            <div>
              <h2 class="regis">Add to Cart</h2>
            </div>
            <div class="mb-3">
              Fullname:
              <input type="text" name="c_username" class="form-control">
            </div>
            <div class="mb-3">
              Address:
              <input type="text" name="c_address" class="form-control">
            </div>
            <div class="mb-3">
              Mobile:
              <input type="text" name="c_mobile" class="form-control">
            </div>
            <div class="mb-3">
              Country:
              <input type="text" name="c_country" class="form-control">
            </div>
            <div>
              <table>
                <tr>
                  <td><label for="online_payment">Payment:</label></td>
                  <td>
                    <input type="radio" value="online" name="payment" id="online_payment">
                    <label for="online_payment">Online Payment</label>
                  </td>
                </tr>
                <tr>
                  <td><label for="cash_on_delivery"> </label></td>
                  <td>
                    <input type="radio" value="cash" name="payment" id="cash_on_delivery">
                    <label for="cash_on_delivery">Cash on Delivery</label>
                  </td>
                </tr>
              </table>
            </div>

            <div class="mb-3">
              Total Amount:  
            </div>

            <div class="mb-3">
              <button class="btn btn-info d-block m-auto col-12" onclick="showAlert()">Complete Order</button>

              <script>
                function showAlert() {
                  alert("Completed!");
                }
              </script>
            </div>
          </form>
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