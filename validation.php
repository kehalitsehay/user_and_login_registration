<?php
session_start();

  $con = mysqli_connect('localhost', 'root');
  
  mysqli_select_db($con, 'registrationform');

  $username=$_POST['user'];
  $pass=$_POST['password'];

  $s="select * FROM userstable WHERE username='$username' && password='$pass'";

  $result=mysqli_query($con,$s);

  $num = mysqli_num_rows($result);

  if ($num == 1){
    $_SESSION['username'] = $username;
    header('Location:index.php');
  } else{
    header('Location:index.html');
    //$wpass="You have entered wrong password";
  }

?>