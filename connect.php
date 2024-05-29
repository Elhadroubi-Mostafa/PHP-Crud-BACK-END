<?php
$con = new mysqli('localhost', 'root', '', 'newcrud');
if(!$con){
  die(mysqli_error($con));
}
?>