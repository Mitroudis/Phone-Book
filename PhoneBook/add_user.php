<?php
require_once 'db.php';
if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
if($fname == ''  || $sname == '' || $phone ==''  ){
		echo '<p class="errorMsg">Fields marked with * are required</p>';
	}else {
		$sql = "INSERT INTO contactdetails(contact_name,contact_surname	,phone,email) VALUES ('$fname','$sname','$phone', '$email')";

		$result= $con -> query($sql);
		if($result){
		echo '<p class="successMsg">Record added successfully</p><br> ';
		}else {
			echo '<p class="errorMsg">There was error while adding record</p>';  
   
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

		<div id= "main">
		 
		  <h1> Phone Book</h1>
		<?php  include_once 'menu-main.php';?>
		</div>
		<div class="container">
			<div class="row">&nbsp;</div>
			<div class="row">&nbsp;</div>
			<div class="row">
				<div class="col-3">&nbsp;</div>
				<div class="col-6">
		  
					<form class="addusrbox" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						<div class="mb-3">
							<label class="form-label">First Name<span style="color:red;">*</span></label>
							<input type="text" class="form-control" name ="fname">
						</div>
						<div class="mb-3">
							<label class="form-label">Last Name<span style="color:red;">*</span></label>
							<input type="text" class="form-control" name ="sname">
						</div>
						<div class="mb-3">
							<label class="form-label">Phone<span style="color:red;">*</span></label>
							<input type="number" class="form-control" name ="phone">
						</div>
						<div class="mb-3">
							<label class="form-label">Email</label>
							<input type="email" class="form-control" name="email">
						</div>
						<button type="submit" class="btn btn-primary" value ="Add" name="submit">Add User</button>
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