<?php
  session_start();
  !isset($_SESSION['username']) ? header('location:index.php') : "";
  include 'connect.php';
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>hello <?php echo $_SESSION['username']?></h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos alias minus expedita!</p>
  <hr>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, omnis blanditiis corporis
    voluptates quo iusto! Sapiente quae possimus nesciunt consequuntur.
  </p>
  <button><a href="logout.php">Log out</a></button>
</body>
</html>