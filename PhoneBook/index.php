<?php
ob_start();
session_start();
include 'db.php';
if(isset($_POST['submit'])){
	$username1 = $_POST['username1'];
	$password1 = $_POST['password1'];
	
	if($username1 =='' || $password1 == ''){
	echo '<p class="errorMsg">All the fields are required</p>'; 
	}else{
		$sql = mysqli_query($con,"SELECT * FROM userdetails WHERE username = '$username1' AND password = '$password1'");

        if(mysqli_num_rows($sql)==1) {
		$member = mysqli_fetch_assoc($sql);
		
			$_SESSION['username1'] = $username1;
			$_SESSION['contact_id'] = $member['contact_id'];
			
			header('Location: dashboard.php?d=dashboard'); 
		
		}else{
			echo '<p class="errorMsg">Invalid username or password</p>';
		}
	}
}

?>
<html>
	<head>
		<title>Phone Book</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Gluten:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1> Phone Book</h1>
		<div class="container">
			<div class="row">&nbsp;</div>
			<div class="row">&nbsp;</div>
			<div class="row">
				<div class="col-3">&nbsp;</div>
				<div class="col-6">
					<form class="loginbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						<div class="mb-3">
							<label class="form-label">Username</label>
							<input type="text" class="form-control" name ="username1">
						</div>
						<div class="mb-3">
							<label class="form-label">Password</label>
							<input type="password" class="form-control" name="password1">
						</div>
						<button type="submit" class="btn btn-primary" value ="login" name="submit">Login</button>
						<p> Not a member yet? Register <a href="registration.php" id="reg"> Here</a>
					</form>
				</div>
				<div class="col-3">&nbsp;</div>
			</div>
		</div>	
		<div class= "bubbles">
			<img src="img/bubble.png">
			<img src="img/bubble.png">
			<img src="img/bubble.png">
			<img src="img/bubble.png">
			<img src="img/bubble.png">
			<img src="img/bubble.png">
			<img src="img/bubble.png">
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>