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
         padding: 12px;
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
                     <li> <a href="product.php">Home</a></li>
                                
                     <li><a href="index.php">Insert Product</a> </li>
                     <li><a href="logout.php">Log Out</a> </li>
                  
                   </ul>
               </div>
           </section>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
       <div class="col-lg-4 col-md-6 col-sm-12">
    <form action="insert.php" method="post" enctype="multipart/form-data">
    <div>   
    <h2 class="regis">Insert Product</h2>
    </div> 
  <div class="mb-3">
   Name:
      <input type="text" name="name" class="form-control">
    </div>
 
    <div class="mb-3">
        Price:
      <input type="text" name="price" class="form-control" >
    </div>
   
    <div class="mb-3">
        Image:
      <input type="file" name="image" class="form-control" >
    </div>
  <div class="mb-3">
     <button type="login" class="btn btn-info d-block m-auto col-12">Insert</button> 
    </div>

         <!--product display container -->
    <table class="table table-hover">
  <thead>
    

  </thead>
  <tbody>
    <tr>
      <td>Id</td>
      <td>Name</td>
      <td>Price</td>
      <td>Image</td>
      <td>Update</td>
      <td>Delete</td>

    </tr>
  </tbody>
  <?php
include 'config.php';
$allData = mysqli_query($conn, "SELECT * FROM `grocery_product`");
while($row=mysqli_fetch_array($allData)){
  echo  "
  <tr>
  
  <td>{$row['id']}</td>
  <td>{$row['name']}</td>
  <td>{$row['price']}</td>
    <td><img width='68px' src='$row[image]' alt=''> </td>
    <td><a class='btn btn-warning' href='update.php? id=$row[id]'>Update</a></td>
    <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Delete</a></td>
   </tr>
  ";
}
?>
</table>
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