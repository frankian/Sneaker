<?php
$server='localhost';
$username='root';
$database='zoro';
$password="";
$conn=mysqli_connect($server,$username,$database,$password);
if(!$conn){
  die('connection failed');
  mysqli_connect_error();
}
else{
  echo "success";
}
 ?>
