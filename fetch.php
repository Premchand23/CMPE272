<!DOCtype html>
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
    <body>  
    	<h1>List of Users</h1><br/><br/>
    	<div style="padding-left: 1%;">
    		<div >
				<h3> The user from our company </h3>
		    	<?php
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
				if (!mysqli_select_db($con,"Users")){
					die("Could not open the database");
				}


				$query = "SELECT * FROM user_details";

				$result = mysqli_query($con,$query);

				if (!$result){
					die("Could not execute the query");
				}
				?>
				<table border ="1" cellpadding="3" cellspacing="2">
					<?php
						print("<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Home Address</th><th>Home Phone</th><th>Cell Phone</th></tr>");
						for ($counter = 0; 
							$row = mysqli_fetch_row($result); 
							$counter++) {
							print("<tr>");
							foreach($row as $key => $value)
								print("<td>$value</td>");
							print("</tr>");
						}
						mysqli_close($con);
					?>
				</table>
				<br/>
			</div>
			<hr>
			<div>
    			<h3> Users from http://monicamandapati.live/ </h3>  
				<?php
				$ch = curl_init ("http://monicamandapati.live/myusers.php");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$page = curl_exec($ch);
				print($page);
				?>
				<br/>
			</div>
			<hr>
			<div>
				<h3> Users from http://annapurnaananya.tech/ </h3>  
				<?php
				$ch = curl_init ("http://annapurnaananya.tech/ananyaUsers.php");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$page = curl_exec($ch);
				print($page);
				?>
				<br/>
			</div>
			<hr>
			<h3> Users from http://guruvardhan.works/272/ </h3>  
			<div style="position: relative; width: 100%; height:100%; margin-top: 15%; margin-left: -35%;">	
				<?php
				$ch = curl_init ("http://guruvardhan.works/272/getUsers.php");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$page = curl_exec($ch);
				print($page);
				?>
			</div>	
		</div>	
	</body>
</html>	