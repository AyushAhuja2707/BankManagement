<?php

	$conn = mysqli_connect("localhost:3308","root","","ayush_spark");

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>