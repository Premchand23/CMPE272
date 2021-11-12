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
    	<p> Test for CURL </p>  
		<?php

		
		$ch = curl_init ("http://premchandj.xyz/mostviewed.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$page = curl_exec($ch);

		$dom = new DOMDocument();
		libxml_use_internal_errors(true);
		$dom->loadHTML($page);
		libxml_clear_errors();
		$xpath = new DOMXpath($dom);

		$data = array();
		// get all table rows and rows which are not headers
		$table_rows = $xpath->query('//table/tr');		
		foreach($table_rows as $row => $tr) {
    		foreach($tr->childNodes as $td) {
        		$data[$row][] = preg_replace('~[\r\n]+~', '', trim($td->nodeValue));
    		}
    		$data[$row] = array_values(array_filter($data[$row]));
		}

		echo '<pre>';
		// print_r($data);

		echo "<table style='margin-left: 35%;'";
		foreach($data as $key=>$row) {
    		echo "<tr>";
    		foreach($row as $key2=>$row2){
        		echo "<td>" . $row2 . "</td>";
    		}
    		echo "</tr>";
		}
		echo "</table>";

		curl_close($ch);
		?>
		<!--<h1>List of Users</h1><br/><br/>
		<table border ="1" cellpadding="3" cellspacing="2">
		</table> -->	
	</body>
</html>	