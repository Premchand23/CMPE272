<?php

  
  session_start();
  $connd = mysqli_connect("database272.c5madrxjubxj.us-east-2.rds.amazonaws.com","root","password","db272");
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
die();
}
  $product = $_POST['products'];
  $service_rating = $_POST["rating"];
  $service_review = $_POST["review"];
  $company_id = 'premchandj auto';
  $sql="INSERT INTO ratings (productid,ratings,review,companyId) VALUES ('".$product."','".$service_rating."','".$service_review."','".$company_id."')";
  
  if($connd->query($sql) === TRUE){
    header("Location: index.php");
  } else {
    header("Location: index.php");
  }