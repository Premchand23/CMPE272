<?php

  
  session_start();
  $connd = mysqli_connect("localhost","root","Leclerc@01","rating");
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
die();
}
  $product = $_POST['products'];
  $service_rating = $_POST["rating"];
  $service_review = $_POST["review"];
  $sql="INSERT INTO rateservices (product,rating,review) VALUES ('".$product."','".$service_rating."','".$service_review."')";
  
  if($connd->query($sql) === TRUE){
    header("Location: index.php");
  } else {
    header("Location: index.php");
  }