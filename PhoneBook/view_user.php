<?php
session_start();
?>
<html>
	<head>
		<title>Phone Book</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<script>
			function ConfirmDelete() {
			return confirm("Do you want to delete?");
			}
		</script>
	</head>
	<body>
		<div id = "main" class= "table-responsive">
			<h1> Phone Book</h1>
			<?php  include_once 'menu-main.php';?>
			<div class="row">&nbsp;</div>
			<div class="row">&nbsp;</div>
			<div class="row">&nbsp;</div>
			<div class="row">
				<div class="col-4">&nbsp;</div>
				<div class="col-4">
					<form class="searchbox" action="search.php" method= "POST">
						<div class="mb-3">
							<label class="form-label">First Name</label>
							<input type="text" class="form-control" name ="searchfname">
						</div>
						<div class="mb-3">
							<label class="form-label">Last Name</label>
							<input type="text" class="form-control" name ="searchsname">
						</div>
						<button type="submit" class="btn btn-primary">Search</button>
					</form>
				</div>
				<div class="col-4">&nbsp;</div>
			</div>
			<table class="table table-hover table-responsive viewtabl">
				<thead>
					<tr>
						<th scope="col"><strong>S.No</strong></th>
						<th scope="col"><strong>Fitst Name</strong></th>
						<th scope="col"><strong>Last Name</strong></th>
						<th scope="col"><strong>Phone</strong></th>
						<th scope="col"><strong>Email</strong></th>
						<th scope="col"><strong>Action</strong></th>
					</tr>
				</thead>
				<tbody>
					<?php
						require_once 'db.php';
						$count= 1;
						$query = "SELECT * FROM contactdetails ORDER BY contact_name";
						$result = $con -> query($query);
						while($row = @mysqli_fetch_assoc($result)){?>
							<tr>
								<th scope="row"> <?php echo $count;?></</th>
								<td class="ev"> <?php echo $row["contact_name"];?></td>
								<td class="od"><?php echo $row["contact_surname"];?></td>
								<td class="ev"><?php echo $row["phone"];?></td>
								<td class="od"><?php echo $row["email"];?></td>
								<td class="ev DeleteBtn">
									<a href="delete.php?deleteid=<?php echo $row["contact_id"]; ?> "id="del" Onclick="return ConfirmDelete()">Delete</a>
								</td>
							</tr>
					<?php $count++;}?>
				</tbody>
			</table>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>

