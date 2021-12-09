<?php

extract($_POST);

$serviceId = "service9";
$service = "Towing";

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
        <title>Towing</title>
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
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/car3.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Towing</h4>
                                <p class="mb-0 text-white-50">Our services include Towing of vehicles to and fro from any locations within the radius of 15 miles.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </body>
 </html> 