<!doctype html>
<html lang="us-en">
	<head>
		<title>LOGIN</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8" />
		<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<style>
			#box{
				margin-left: 500px; 
				margin-right: 500px; 
				padding: 20px; 
				background-color: #bfbfbf;
				border-radius: 5px;
				padding-left: 30px;
				padding-right: 30px;
			}
		</style>
	</head>
	
	<body>
		<div class="jumbotron" style="background-color: #1a1a1a; color: white;">
			<h1 style="margin-left: 20px;">OTP Verification</h1>
		</div>
		<div id="box">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal">
				<div class="form-group">
					<label class="control-label">OTP:</label>
					<input type="password" class="form-control" name="otp" placeholder="One Time Password">
				</div>
				
				<button type="submit" class="btn btn-default" name="submit1" style="color: #000; font-weight: bold; margin-left: 0;">Login</button>
			</form>
		</div>
	</body>
</html>

<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("Location: first_step.php");
}
if(isset($_POST["submit1"]))
{
	$otp=$_POST['otp'];
	echo $otp;
	if($otp==$_SESSION['otp'])
	{
		session_destroy();
		echo '<script type="text/javascript"> window.location = "thanks.php" </script>';
	}
}

?>