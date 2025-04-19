<?php
	require_once 'conn.php';

	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($conn, "INSERT INTO `user`( `username`, `password`) VALUES ('$username','$password')");
	
		
		if($query){
			
			echo "<script>window.location='index.php'</script>";
		}
		
	}
	

?>