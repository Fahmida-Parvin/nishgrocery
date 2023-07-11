<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nish's Grocery</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <body class="body">
        <section class="header">
            <h1 id="logo">Nish's Grocery</h1>
            <div>
                   <ul id="navbar">
                  <li> <a href="home.html">Home</a></li>
                  <li><a href="Aboutus.html">About Us</a></li>
                    <li><a href="Registration.html">Registration</a></li>
                    <li><a href="login.html">Log In</a> </li>                   
               
                </ul>
            </div>
        </section>
        <h1 class="regis">Log In</h1>
        <form action="loginAction.php" method="get">
            <table>
                <tr>
                    <td> <label for="username">Username: </label></td>
                    <td> <input type="text" name="l_username" id="iemail"></td>
                </tr>
                <tr>
                    <td> <label for="pass">Password: </label></td>
                    <td> <input type="password" name="l_pass" id="ipass"></td>
                    <td><span id="epass"></span></td> <-- Move the span inside a <td> element ->
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" id="sub-btn" name="submit-button" value="Log In"></td>
                </tr>
            </table>
        </form>

        </body>
        </html>
-->
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
         padding: 40px;
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
                  
                   </ul>
               </div>
           </section>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
       <div class="col-lg-4 col-md-6 col-sm-12">
    <form action="adminAction.php" method="post">
    <div>   
    <h2 class="regis">Admin form</h2>
    </div> 
  <div class="mb-3">
   Username:
      <input type="text" name="a_username" class="form-control">
    </div>
 
    <div class="mb-3">
        Password
      <input type="text" name="a_pass" class="form-control" >
    </div>
  
  <div class="mb-3">
     <button type="login" class="btn btn-info d-block m-auto col-12">Log in</button> 
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