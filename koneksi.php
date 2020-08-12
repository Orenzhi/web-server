<?php 

error_reporting(0);
	$dbhost = 'localhost';
	$username = 'root';
	$password = 'Rezhi13251';
	$dbname = 'projectso';

	$connection = mysqli_connect($dbhost, $username, $password, $dbname);
	/*if (!$connection) {
		die ("connection failed: " . mysqli_connecct_error()); 
	} else {
		echo "Connected";
	} */

?>