<?php 

	// connect to database
	$conn = mysqli_connect('localhost', 'KaidenSky', 'bastes1011', 'crypto investment');

	// check connection
	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}

 ?>