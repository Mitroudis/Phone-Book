<?php
	require_once 'db.php';
	$query = "SELECT contact_id FROM contactdetails ";
    $result = $con -> query($query);
	$row = @mysqli_num_rows($result);
?>
<html>
	<head>
		<title>Phone Book</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-4">&nbsp;</div>
				<div class="col-6">
					<nav class="navbar navbar-expand-lg navbar-light bg-light" id="general-menu">
						<a class="navbar-brand" href="#">Menu:</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="menu collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item active">
									<a class="nav-link" href="dashboard.php">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="add_user.php">Add New</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="view_user.php">View All</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Profile</a>
									<ul>
										<li><a href="viewProfile.php">View</a></li>
										<li><a href="logout.php">Logout</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<div class="col-4">&nbsp;</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>