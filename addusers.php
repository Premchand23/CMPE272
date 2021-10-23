<?php
extract($_POST);


session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'Leclerc@01';
$DATABASE_NAME = 'login';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if (!mysqli_select_db($con, "Users")){
	exit("Could not open the database");
}
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$cell = $_POST['cell'];
$query = "INSERT INTO user_details (firstname,lastname,email,address,phone,cell) VALUES ('$fname','$lname','$email','$address','$phone','$cell')";

if( !mysqli_query($con,$query)){
	exit("Query Not Executed");
}else exit("User Created")

?>