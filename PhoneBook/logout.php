<?php
	session_start();
	if(isset($_SESSION['username1'])){
		session_destroy();
		header('Location:index.php');
	}
	exit();
?>