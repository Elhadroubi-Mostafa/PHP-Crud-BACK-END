<?php
session_start();
$login = 0;
$invalid = 0;
  include 'connect.php';
  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT username and password FROM crud where 
    username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    if($result){
      $row = mysqli_num_rows($result);
      if($row > 0){
        $login = 1;
        $_SESSION['username'] = $username;
        header('location:home.php');
      }
      else{
        $invalid = 1;
      }
    }
    else{
      die(mysqli_error($con));
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  echo $invalid ? "<h1  style='color:red'>Invalid Data</h1>" : "";
  echo $login ? "<h1  style='color:green'>Logined successfully</h1>" : "";
  ?>
</body>
</html>