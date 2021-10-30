<html>
	<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>General Service</title>
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
    	<p> The most viewed services are as folows</p>
        <table border ="1" cellpadding="3" cellspacing="2">
            <?php
                $data = json_encode($_COOKIE);
                $data = json_decode($data, true);
                unset($data['lastvisited']);
                $mostviewed = [];
                foreach($data as $key => $value) {
                    $link = json_decode($value);
                    $link->key = $key;
                    array_push( $mostviewed, $link);
                }
                function cmp($a, $b) {
                    return strcmp($a->visits, $b->visits);
                }
                usort($mostviewed, "cmp");
                $mostviewed = array_splice($mostviewed, -5);
                foreach ($mostviewed as $key => $value) {
                    print("<tr><th>Service</th><th>Name of the service</th><th>Number of time visited</th></tr>");
                    print("<tr><td>$value->key</td><td><a href=\"$value->link\">$value->name</a></td><td>$value->visits</td></tr>"); 
                }
            ?>
        </table>
    </body>
</html>  