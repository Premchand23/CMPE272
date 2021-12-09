<?php

extract($_POST);

$serviceId = "service3";
$service = "Off Road Vehicle Repair";

// set link and visit count
if(!isset($_COOKIE[$serviceId])) {
    $value = array( "link" => '', "visits" => '', "name" => $service);
} else {
    $value = json_decode(stripslashes($_COOKIE[$serviceId]), true);
}
$value['link'] = $_SERVER['REQUEST_URI'];
if(empty($value['visits'])) {
    $count = 1;
} else {
    $count = $value['visits'] + 1;
}
$value['visits'] = $count;
setcookie($serviceId, json_encode($value));

// add to last visited
if(!isset($_COOKIE["lastvisited"])) {
    $value = array();
} else {
   $value = json_decode(stripslashes($_COOKIE["lastvisited"]), true);
}
foreach (array_keys($value, $serviceId, true) as $key) {
    unset($value[$key]);
}
array_push($value, $serviceId);
$value = array_splice($value, -5);
setcookie("lastvisited", json_encode($value), time()+3600*24*7);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Off Road Vehicle Repair</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
    	<div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/car2.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Off Road Vehicle Repair</h4>
                            <p class="text-black-50 mb-0">Our services include genral inspection for all damages, check steering, suspension and driveline parts, repair jobs of bent or broken parts and any other servcie that the vehicle requires.
                            </p>     
                        </div>
                        
                    </div>
                </div>
        </div>
    </body>
 </html>  