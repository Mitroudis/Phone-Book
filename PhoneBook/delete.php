<?php
	require_once'db.php';
	$getid = $_GET['deleteid'];
	$query = "DELETE FROM contactdetails WHERE contact_id = '$getid'";
	$query_run = $con -> query($query);
	if($query_run){
		header('Location:view_user.php');
	}else{
		echo 'Error while deleting user record';
	}

?>