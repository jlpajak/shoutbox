<?php
//connect to MySQL
$con = mysqli_connect("localhost","root","","shoutbox");

//test
if(mysqli_connect_errno()){
  echo 'failed'.mysqli_connect_error();
}
?>
