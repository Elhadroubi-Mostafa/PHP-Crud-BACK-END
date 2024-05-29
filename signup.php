<?php
$user = 0;
$success = 0;
$match = 0;
include 'connect.php';
if(isset($_POST['signup'])){
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);

  $sql = "SELECT * FROM crud WHERE username = '$username'";
  $result = mysqli_query($con, $sql);
  if($result){
    $row = mysqli_num_rows($result);
    echo $row;
    if($row > 0){
      // echo "<br>user already exist";
      $user = 1;
    }
    else{
      if($password === $cpassword){
        $sql = "INSERT INTO crud(username, password)
        VALUES('$username', '$password')";
        $result = mysqli_query($con, $sql);
        if($result){
          $success = 1;
        } 
      }
      else{
        $match = 1;
      }
    }
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
  echo $user ? "<h1  style='color:red'>Already exist</h1>" : "";
  echo $success ? "<h1  style='color:green'>Singed up successfully</h1>" : "";
  echo $match ? "<h1  style='color:red'>Password did not match</h1>" : "";
  ?>
</body>
</html>