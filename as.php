<?php

extract($_POST);

$service = "A/C Service";

setcookie("Service6", $service, time()-3600);

setcookie("Service6", $service, time()+3600*24*7);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>A/C Service</title>
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
                                <h4 class="text-white">A/C Service</h4>
                                <p class="mb-0 text-white-50">Our services include Recharging the A/C, Repairing A/C Compressor, Condensor, and Evaporator, and Replacing Thermal Expansion Valve or Orifice Tube.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    	<!--<div class="container px-4 px-lg-5">-->
                <!-- Featured Project Row-->
                <!--<div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/car2.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>A/C Service</h4>
                            <p class="text-black-50 mb-0">Our services include Recharging the A/C, Repairing A/C Compressor, Condensor, and Evaporator, and Replacing Thermal Expansion Valve or Orifice Tube.
                            </p>     
                        </div> 
                    </div>
                </div>-->
        </div>
    </body>
 </html> 