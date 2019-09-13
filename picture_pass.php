<!doctype html>
<html lang="us-en">
	<head>
		<title>Picture Password</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8" />
		<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<style>
			#pic{
				height: 420px;
				width: 510px;
				margin-left: 50px;
				border-radius: 5px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.5);
				margin-top: 20px;
			}

			.small_box{
				height: 140px;
				width: 170px;
				border-radius: 3px;
				margin-left: 10px;
				margin-top: 10px;
				padding: 0;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.5);
				overflow: hidden;
			}

			#input{
				margin-top: 30px;
				width: 400px;
			}
		</style>
	</head>
	<body>
		<div class="jumbotron" style="background-color: #1a1a1a; color: white;">
			<h1 style="margin-left: 20px;">Picture Password</h1>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div><img id="pic" src="images/img1.jpg" /></div>
			</div>
			<div class="col-md-1">
				<button class="btn btn-warning" style="margin-top: 230px;" onclick="image_crop()">Crop</button>
			</div>
		
			<div class="col-md-6">
				<div class="row">
					<div class="small_box col-sm-4"><img id="00"></div>
					<div class="small_box col-sm-4"><img id="01"></div>
					<div class="small_box col-sm-4"><img id="02"></div>
				</div>	
				<div class="row">
					<div class="small_box col-sm-4"><img id="10"></div>
					<div class="small_box col-sm-4"><img id="11"></div>
					<div class="small_box col-sm-4"><img id="12"></div>
				</div>
				<div class="row">
					<div class="small_box col-sm-4"><img id="20"></div>
					<div class="small_box col-sm-4"><img id="21"></div>
					<div class="small_box col-sm-4"><img id="22"></div>
				</div>
			</div>
		</div>
		<form style="margin-left: 500px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			<input type="password" class="form-control" id="input" name="pic" placeholder="Pattern Here" />
			<button class="btn btn-info" id="submit" name="submit">Save</button>
		</form>
	<script>
		function image_crop(){
			
			var m_left=0;
			var m_top=0;
			var i,j;
			for (i=0; i<3; i++)
			{

				m_left=0;
				console.log(i);
				console.log(m_top);
				for(j=0;j<3;j++)
				{
					var temp_id;
					temp_id=i.toString()+j.toString();
					console.log(temp_id);
					document.getElementById(temp_id).src="images/img1.jpg";
					document.getElementById(temp_id).style.marginLeft=m_left.toString()+'px';
					document.getElementById(temp_id).style.marginTop=m_top.toString()+'px';
					m_left=m_left-170;
				}
				
				m_top=m_top-140;
			}
		}
	</script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
	
	$('#00').click(function(){
		$('#input').val($('#input').val()+'00');
		document.getElementById('00').style.opacity='0.5';
	});

	$('#01').click(function(){
		$('#input').val($('#input').val()+'01');
		document.getElementById('01').style.opacity='0.5';
	});

	$('#02').click(function(){
		$('#input').val($('#input').val()+'02');
		document.getElementById('02').style.opacity='0.5';
	});

	$('#10').click(function(){
		$('#input').val($('#input').val()+'10');
		document.getElementById('10').style.opacity='0.5';
	});

	$('#11').click(function(){
		$('#input').val($('#input').val()+'11');
		document.getElementById('11').style.opacity='0.5';
	});

	$('#12').click(function(){
		$('#input').val($('#input').val()+'12');
		document.getElementById('12').style.opacity='0.5';
	});

	$('#20').click(function(){
		$('#input').val($('#input').val()+'20');
		document.getElementById('20').style.opacity='0.5';
	});

	$('#21').click(function(){
		$('#input').val($('#input').val()+'21');
		document.getElementById('21').style.opacity='0.5';
	});

	$('#22').click(function(){
		$('#input').val($('#input').val()+'22');
		document.getElementById('22').style.opacity='0.5';
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
		$pic=$_POST['pic'];
		$pic=md5($pic);
		$ses=$_SESSION["id"];
		
		$sql = "UPDATE details SET Picture='$pic' WHERE id='$ses'";
		echo mysqli_query($conn, $sql);
		
		if (mysqli_query($conn, $sql)) {
		    echo '<script>alert("Pictorial Password Added");</script>';
		    echo '<script type="text/javascript"> window.location = "thanks.php" </script>';
		} 
		
		else {
			}

		mysqli_close($conn);
	}
?>