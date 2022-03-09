<?php
	session_start();

?>
<html>
	<head>
		<title>Vieiw Profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="main">
		  
		<h1> Phone Book</h1>
		<?php  include_once 'menu-main.php';?>
		</div>
		<div class="container table-responsive">
			<div class="row">&nbsp;</div>
			<div class="row">&nbsp;</div>
			<div class="row">
				<div class="col-3">&nbsp;</div>
				<div class="col-6">
					<p class="prof"> User Profile</p>
					<table class="table table-hover table-responsive viewtabl">
						<thead>
							<tr>
								<th scope="col"><strong>Name</strong></th>
								<th scope="col"><strong>Username</strong></th>
								<th scope="col"><strong>Email</strong></th>
							</tr>
						</thead>
					<tbody>
						<?php
						require_once 'db.php';
						$query = "SELECT * FROM userdetails where contact_id= '".$_SESSION['contact_id']."'";
						$result = $con -> query($query);
						$row = @mysqli_fetch_assoc($result)?>
						<tr>
							<td class="ev"> <?php echo $row["name"];?></td>
							<td class="od"><?php echo $row["username"];?></td>
							<td class="ev"><?php echo $row["email"];?></td>
						</tr>
					</tbody>
					</table>
				</div>
			</div>
			<div class="col-3">&nbsp;</div>
		</div>	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>