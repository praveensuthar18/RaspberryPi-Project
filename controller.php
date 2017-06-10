<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Switches</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="includes.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
<?php include("header.php"); ?>
<?php

if ( file_get_contents('test.txt') == 'exit' )
{
	file_put_contents('test.txt', '000');
}
if ( $_GET['get'] == 1 && ctype_digit(file_get_contents('test.txt')) )
{
	$red = substr(file_get_contents('test.txt'),0,1);
	$green = substr(file_get_contents('test.txt'),1,1);
	$blue = substr(file_get_contents('test.txt'),2,1);

	if ( $_GET['red'] == 1 )
	{
		if ( substr(file_get_contents('test.txt'),0,1) == 1 )
		{
			$red = 0;
		}
		else
		{
			$red = 1;
		}
	}
	else if ( $_GET['green'] == 1 )
	{
		if ( substr(file_get_contents('test.txt'),1,1) == 1 )
		{
			$green = 0;
		}
		else
		{
			$green = 1;
		}
	}
	else if ( $_GET['blue'] == 1 )
	{
		if ( substr(file_get_contents('test.txt'),2,1) == 1 )
		{
			$blue = 0;
		}
		else
		{
			$blue = 1;
		}
	}
	$combined = $red . $green . $blue;
	file_put_contents('test.txt', $combined);
}

if ( !ctype_digit(file_get_contents('test.txt')) )
{
	echo '<span style="color: #ff0000">Text file contents not an integer.</span>';
} ?>



<!--<div class="container">
  <br>
<div class="row">
      <div class="col-md-3 col-md-offset-2">
        <h2>Lights</h2>
      </div>

      <div class="col-md-2">
          <a href="controller.php?red=1&amp;get=1" class="btn btn-success btn-lg btn-block btn-huge">ON</a>
      </div>
      <div class="col-md-2">
          <a href="#" class="btn btn-primary btn-lg btn-block btn-huge">OFF</a>
      </div>
</div>
  <hr>
  <div class="row">
      <div class="col-md-3 col-md-offset-2">
        <h2>FANS</h2>
      </div>

      <div class="col-md-2">
          <a href="#" class="btn btn-default btn-lg btn-block btn-huge">ON</a>
      </div>
      <div class="col-md-2">
          <a href="#" class="btn btn-warning btn-lg btn-block btn-huge">OFF</a>
      </div>
</div>
  <hr>
  <div class="row">
      <div class="col-md-3 col-md-offset-2">
        <h2>AC</h2>
      </div>

      <div class="col-md-2">
          <a href="#" class="btn btn-info btn-lg btn-block btn-huge">ON</a>
      </div>
      <div class="col-md-2">
          <a href="#" class="btn btn-danger btn-lg btn-block btn-huge">OFF</a>
      </div>
  </div>
  <hr>

</div>
</body>


</html>';*/-->
<div class="container">
  <br>
<div class="row">
      <div class="col-md-2">
  <a href="controller.php?red=1&amp;get=1" class="btn btn-danger btn-lg btn-block btn-huge">RED</a>
      </div>

      <div class="col-md-2">
          <a href="controller.php?green=1&amp;get=1" class="btn btn-success btn-lg btn-block btn-huge">GREEN</a>
      </div>
      <div class="col-md-2">
          <a href="controller.php?blue=1&amp;get=1" class="btn btn-primary btn-lg btn-block btn-huge">BLUE</a>
      </div>
</div>
  <hr>

</div>



<!--<div style="width: 100%; height: 100%;">

<a href="controller.php?red=1&amp;get=1" style="text-decoration: none; color: #000000;">

</a><br>
<a href="controller.php?green=1&amp;get=1" style="text-decoration: none; color: #000000;">
	<img src="green.png" border="0">
</a><br>
<a href="controller.php?blue=1&amp;get=1" style="text-decoration: none; color: #000000;">
	<img src="blue.png" border="0">
</a>

</div>-->

</body>
</html>
