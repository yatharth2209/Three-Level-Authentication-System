<!DOCTYPE html>
<html>
<head>
	<title>Level 2 Authentication</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		#container{
			margin: 150px 450px;
		}
		#red_box, #blue_box, #green_box{
			padding: 50px;
			margin-left: 20px;
		}
		#input{
			margin-top: 30px;
			width: 400px;
		}
		#submit{
			margin-top: 30px;
			margin-left: 150px;
		}
	</style>
</head>

<body>
<div class="jumbotron" style="background-color: #1a1a1a; color: white;">
<h1 style="margin-left: 20px;">Graphical Password Step-2</h1>
</div>

<div id="container">
	<button id="red_box" class="btn btn-danger"></button>
	<button id="blue_box" class="btn btn-primary"></button>
	<button id="green_box" class="btn btn-success"></button>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<input type="password" class="form-control" id="input" name="graph" placeholder="Pattern Here" />
		<button class="btn btn-info" id="submit" name="submit">Login</button>
	</form>
</div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$('#red_box').click(function(){
		$('#input').val($('#input').val()+'RED');
	});
	$('#blue_box').click(function(){
		$('#input').val($('#input').val()+'BLUE');
	});
	$('#green_box').click(function(){
		$('#input').val($('#input').val()+'GREEN');
	});
</script>
</html>
<?php
include 'connection.php';

session_start();
/*if(!isset($_SESSION['id'])){ //if login in session is not set
    header("Location: first_step.php");
}*/
if(isset($_POST["submit"]))
	{
		$graph=$_POST['graph'];
		$graph=md5($graph);
		$ses=$_SESSION["id"];
		
		$sql = "select * from details where Id='$ses' and Graphical='$graph'";
		
		if (mysqli_query($conn, $sql)) {
		    echo '<script type="text/javascript"> window.location = "logpicture_pass.php" </script>';
		} 
		
		else {
			echo '<script>alert("Invalid pattern");</script>';
			}

		mysqli_close($conn);
		}
?>