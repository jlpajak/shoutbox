<?php
include 'database.php';

//check for submit
if(isset($_POST['submit'])){
  $user = mysqli_real_escape_string($con, $_POST['user']);
  $message = mysqli_real_escape_string($con, $_POST['message']);

  //set timezone
  date_default_timezone_set('UTC');
  $time = date('h:i:s', time());

  if(!isset($user) || $user == ''  || !isset($message) || $message == ''){
    $error = "Please fill whole form";
    header("Location: index.php?error=".urlencode($error));
    exit();
  } else{
    $query = "INSERT INTO shouts (user, message, time) VALUES ('$user', '$message', '$time') ";

    if(!mysqli_query($con, $query)){
      die('Error: '.mysqli_error($con));
    } else {
      header("Location: index.php");
      exit();
    }
  }
}

?>
