<?php
session_start();

  header('location: login.php');

  $con = mysqli_connect('localhost', 'root',);
  mysqli_select_db($con, 'registrationform');

  $username=$_POST['user'];
  $pass=$_POST['password'];
  $hash_pass=hash_password($pass);

  $s="select * FROM userstable WHERE username='$username'";

  $result=mysqli_query($con,$s);

  $num = mysqli_num_rows($result);

  if ($num == 1){
    echo "Username Already Taken";
  } else{
    $reg="insert into userstable(username,password) values('$username','$pass')";
    mysqli_query($con, $reg);

    echo "You have successfully registered";
  }

?>