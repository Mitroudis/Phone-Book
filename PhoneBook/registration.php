<?php
	require_once 'db.php';
	if(isset($_POST['submit'])){
		$name1 = $_POST['fname'];
		$username = $_POST['usrname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		if($username == ''  || $password == ''){
			echo '<p class="errorMsg">Fields marked with * are required</p>';
		}else{	
			$sql = $con -> query("SELECT * FROM userdetails WHERE username = '$username' ");
			if(!$sql || mysqli_num_rows($sql)==1){
				echo '<p class="errorMsg">This Username already exists</p>';
	
			}else{
				$sql = "INSERT INTO userdetails(name, username, email, password) VALUES ('$name1','$username','$email', '$password')";
				$result= $con -> query($sql);
				if($result){
					echo '<p class="successMsg">Record added successfully</p>';
				}else{
					echo '<p class="errorMsg">There was error while adding record</p>';  
				}
			}
		}

	}
?>

<html>
	<head>
		<title>Phone Book</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Registration</h1>
		<div class="container">
			<div class="row">&nbsp;</div>
				<div class="row">&nbsp;</div>
				<div class="row">
					<div class="col-3">&nbsp;</div>
					<div class="col-6">
						<form class="registbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" class="form-control" name ="fname">
							</div>
							<div class="mb-3">
								<label  class="form-label">Username<span style="color:red;">*</span></label>
								<input type="text" class="form-control" name="usrname">
							</div>
							<div class="mb-3">
								<label class="form-label">Email</label>
								<input type="email" class="form-control" name="email">
							</div>
							<div class="mb-3">
								<label class="form-label">Password<span style="color:red;">*</span></label>
								<input type="password" class="form-control" name="password">
							</div>
							<button type="submit" class="btn btn-primary" value ="Register" name="submit">Register</button>
							<p class="acount"> Already have an account? please login <a href="index.php" id="reg"> Here </a>
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

