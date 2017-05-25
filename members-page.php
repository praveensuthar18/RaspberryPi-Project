<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Member Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="includes.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php include("header.php"); ?>

    <div id="container">
        <div id="content">
            <?php

            echo '<h2>Welcome to your page ';
            if (isset($_SESSION['username'])){
                echo "{$_SESSION['username']}!";
            }
            echo '</h2>';
            ?>

            <div class="container home-signup-links" >
              <div class="row">
                <div class="col-md-6">
                   <div class="well">
                    <center>  <img alt="WiFi" src="images/wifi1.png"> </center>
                      <h4 class="text-center" >Connect device using WiFi</h4>
                      <br>
                      <a href="rooms.php" class="btn btn-primary btn-lg btn-block">WiFi</a>
                   </div>
                </div>
                <div class="col-md-6">
                    <div class="well">
                      <center>  <img alt="Bluetooth" src="images/bluetooth.png"> </center>
                      <h4 class="text-center">Connect device using Bluetooth</h4>
                      <br>
                      <a href="rooms.php" class="btn btn-success btn-lg btn-block">Bluetooth</a>

                    </div>
                </div>

              </div>
            </div>

</div>
</body>
</html>
