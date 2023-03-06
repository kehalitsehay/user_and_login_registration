<?php

session_start();
if (!isset($_SESSION['username'])){
  header('Location:index.html');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="logout" style="color: white; float:right; margin-top:-180px;font-size:20px; border:2px solid green;background-color:brown; border-radius:50px;text-align:center;">
    <a href="logout.php">Logout</a><br>
    </div>
    <h1 style="color: white;margin:200px; text-align:center; text-transform:uppercase;">Welcome, <?php echo $_SESSION['username'], "!!!"; ?> </h1>
  </div>
</body>
</html>