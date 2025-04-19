<?php
	$conn = mysqli_connect("localhost", "root", "", "cryptouser_login");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>