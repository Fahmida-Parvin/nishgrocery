<?php

include 'config.php';
 $r_username= $_POST['r_username'];
 $r_email= $_POST['r_email'];
 $r_mobile= $_POST['r_mobile'];
 $r_pass= $_POST['r_pass'];
 $r_con_pass= $_POST['r_con_pass'];

 $username_pattern = "/^[a-zA-Z]+$/";
 $email_pattern = "/^((cse|eee|law)_\d{10}@lus\.ac\.bd)$/";
 $mobile_pattern = "/^(\+88)?-?01[3-9]\d{8}$/";
 $pass_pattern = "/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#%*_+<>&])).{6,20}$/";
 

 $dublicateUsernameQuery = "SELECT * FROM `register` WHERE db_username='$r_username'";

 $dublicate_username=mysqli_query($conn,$dublicateUsernameQuery);

if(mysqli_num_rows($dublicate_username)>0){
    echo "<script>alert('Username Already taken!!')</script>";
    echo "<script>location.href= 'register.php'</script>";
}else if(!preg_match($username_pattern,$r_username)){
    echo "<script> alert('Only char (3-20)')</script>";
    echo "<script> location.href='register.php'</script>";
} else if (!preg_match($email_pattern, $r_email)){
    echo "<script> alert('Invalid email')</script>";
    echo "<script> location.href='register.php'</script>";
} else if (!preg_match($mobile_pattern, $r_mobile)){
    echo "<script> alert('Invalid BD mobile number')</script>";
    echo "<script> location.href='register.php'</script>";
} else if (!preg_match($pass_pattern, $r_pass)) {
    echo "<script> alert('Minimun one uppercase,one lowercase,one digit,one special character and length should be (6-20)')</script>";
    echo "<script> location.href='register.php'</script>";
} else if ($r_pass !== $r_con_pass) {
    echo "<script> alert('Password and Confirm Password do not match')</script>";
    echo "<script> location.href='register.php'</script>";
}

else {
    $insertQuery = "INSERT INTO `register`(`db_username`, `db_email`, `db_mobile`, `db_pass`) VALUES ('$r_username','$r_email','$r_mobile','$r_pass')";
if (!mysqli_query($conn,$insertQuery)){
    echo "<script>alert('Not registered')</script>";
    echo "<script>location.href= 'register.php'</script>";
} else {
    echo "<script>alert('Successfully registered')</script>";
    echo "<script>location.href= 'login.php'</script>";
}
}
?>