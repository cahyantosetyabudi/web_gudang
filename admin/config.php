<?php
	$conn = mysqli_connect('localhost', 'root', '', 'search');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>