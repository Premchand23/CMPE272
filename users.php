<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PremchandJ</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div class="d-flex justify-content-center">
				<h1>Customer List</h1>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="list-group">
  			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    			<!--<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">-->
    			<div class="d-flex gap-2 w-100 justify-content-between">
      				<div>
        				<h6 class="mb-0">Joson Dowe</h6>
        				<p class="mb-0 opacity-75">Phone Number: +1 1234567890</p>
        				<p class="mb-0 opacity-75">Email: jd@test.com</p>
      				</div>
      				<!--<small class="opacity-50 text-nowrap">now</small>-->
    			</div>
  			</a>
  			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    			<!--<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">-->
    			<div class="d-flex gap-2 w-100 justify-content-between">
      				<div>
        				<h6 class="mb-0">Robert California</h6>
        				<p class="mb-0 opacity-75">Phone Number: +1 9876543210</p>
        				<p class="mb-0 opacity-75">Email: rc@test.com</p>
      				</div>
      				<!--<small class="opacity-50 text-nowrap">3d</small>-->
    			</div>
  			</a>
  			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
  	  			<!--<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">-->
    			<div class="d-flex gap-2 w-100 justify-content-between">
      				<div>
        				<h6 class="mb-0">Carole Denver</h6>
        				<p class="mb-0 opacity-75">Phone Number: +1 4567890321</p>
        				<p class="mb-0 opacity-75">Email: cd@test.com</p>
      				</div>
      				<!--<small class="opacity-50 text-nowrap">1w</small>-->
    			</div>
  			</a>
  			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
  	  			<!--<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">-->
    			<div class="d-flex gap-2 w-100 justify-content-between">
      				<div>
        				<h6 class="mb-0">Natalie Washington</h6>
        				<p class="mb-0 opacity-75">Phone Number: +1 3216549870</p>
        				<p class="mb-0 opacity-75">Email: nw@test.com</p>
      				</div>
      				<!--<small class="opacity-50 text-nowrap">1w</small>-->
    			</div>
  			</a>
  			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
  	  			<!--<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">-->
    			<div class="d-flex gap-2 w-100 justify-content-between">
      				<div>
        				<h6 class="mb-0">Georgia Milpitas</h6>
        				<p class="mb-0 opacity-75">Phone Number: +1 6789012345</p>
        				<p class="mb-0 opacity-75">Email: gm@test.com</p>
      				</div>
      				<!--<small class="opacity-50 text-nowrap">1w</small>-->
    			</div>
  			</a>
  			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
  	  			<!--<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">-->
    			<div class="d-flex gap-2 w-100 justify-content-between">
      				<div>
        				<h6 class="mb-0">Michael Pennsylvania</h6>
        				<p class="mb-0 opacity-75">Phone Number: +1 3216549870</p>
        				<p class="mb-0 opacity-75">Email: mp@test.com</p>
      				</div>
      				<!--<small class="opacity-50 text-nowrap">1w</small>-->
    			</div>
  			</a>
  			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
  	  			<!--<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">-->
    			<div class="d-flex gap-2 w-100 justify-content-between">
      				<div>
        				<h6 class="mb-0">Creed Bratton</h6>
        				<p class="mb-0 opacity-75">Phone Number: +1 7894561230</p>
        				<p class="mb-0 opacity-75">Email: cb@test.com</p>
      				</div>
      				<!--<small class="opacity-50 text-nowrap">1w</small>-->
    			</div>
  			</a>
  			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
  	  			<!--<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">-->
    			<div class="d-flex gap-2 w-100 justify-content-between">
      				<div>
        				<h6 class="mb-0">Erica Albright</h6>
        				<p class="mb-0 opacity-75">Phone Number: +1 5432109876</p>
        				<p class="mb-0 opacity-75">Email: ea@test.com</p>
      				</div>
      				<!--<small class="opacity-50 text-nowrap">1w</small>-->
    			</div>
  			</a>
		</div>                 
	</body>
</html>