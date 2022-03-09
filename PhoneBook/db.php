<?php
	$host = 'localhost';
	$username ='root';
	$password = '';
	$database = 'phonebook';
	$con = @mysqli_connect($host, $username, $password);
	if(!$con){
		die('could not connect'. mysqli_error());
	}
	$dbcon= @mysqli_select_db($con, $database);
	if(!$dbcon){
		die('could not find database'. mysqli_error());
	}


?>