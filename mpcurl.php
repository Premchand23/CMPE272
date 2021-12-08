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
    <h3>Most viewed products/servcies</h3>
    <div>
        <h4> Most viewed from Users from http://annapurnaananya.tech/ </h4>
        <?php
        //$ch = curl_init ("http://annapurnaananya.tech/recent.php");
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //$page = curl_exec($ch);
        //print($page);


        $url = "http://annapurnaananya.tech/recent.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");
        curl_setopt($ch, CURLOPT_URL, urlencode($url));
        $response = curl_exec($ch);
        print($response);
        curl_close($ch);
        ?>
        <br/>
    </div>
</body>
</html>