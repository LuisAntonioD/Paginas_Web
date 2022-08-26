<?php
	$conn=mysqli_connect("localhost", "root", "rootadmin01", "electrodomex");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>