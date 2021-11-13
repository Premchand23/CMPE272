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
    	<p> The user from our company </p>
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
    	<p> Users from http://monicamandapati.live/ </p>  
		<?php

		
		$ch = curl_init ("http://monicamandapati.live/myusers.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$page = curl_exec($ch);
		print($page);
		?>
		<br/>
		<p> Users from http://annapurnaananya.tech/ </p>  
		<?php

		
		$ch = curl_init ("http://annapurnaananya.tech/ananyaUsers.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$page = curl_exec($ch);
		print($page);
		?>
		<br/>
		<p> Users from http://guruvardhan.works/272/ </p>  
		<?php
		$username = trim($values["admin"]);
		$password = trim($values["admin"]);

		//set the directory for the cookie using defined document root var
		//build a unique path with every request to store. the info per user with custom func. I used this function to build unique paths based on member ID, that was for my use case. It can be a regular dir.
		//$path = build_unique_path($path); // this was for my use case

		//login form action url
		$url="http://guruvardhan.works/272/login.html"; 
		$postinfo = "email=".$username."&password=".$password;

		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_NOBODY, false);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

		/**curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
		//set the cookie the site has for certain features, this is optional
		curl_setopt($ch, CURLOPT_COOKIE, "cookiename=0");
		curl_setopt($ch, CURLOPT_USERAGENT,
		    "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");**/
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_REFERER, $_SERVER['REQUEST_URI']);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
		$page = curl_exec($ch);
		print($page);

		//page with the content I want to grab
		/**curl_setopt($ch, CURLOPT_URL, "http://guruvardhan.works/272/users.php");
		//do stuff with the info with DomDocument() etc
		$html = curl_exec($ch);
		print($html);**/
		curl_close($ch);
		?>
		<br/>	
	</body>
</html>	