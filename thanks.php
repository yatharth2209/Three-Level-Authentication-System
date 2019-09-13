<!doctype html>
<html lang="us-en">
	<head>
		<title>Picture Password</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8" />
		<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
</head>
	<body>
		<div class="jumbotron" style="background-color: #1a1a1a; color: white;">
			<h1 style="margin-left: 20px;">Thank You</h1>
		</div>
		<img src="images/thankyou.jpg"><br />
		<button class="btn btn-danger" style="margin-left: 500px;"><a href="index.php" style="text-decoration: none; color: white;">Login</a></button>
	</body>
</html>
<?php
session_start();
/*if(!isset($_SESSION['id'])){ //if login in session is not set
    header("Location: first_step.php");
}*/
?>