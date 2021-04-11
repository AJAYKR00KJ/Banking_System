<?php

 
//Port number: 3306

$servername = "sql6.freesqldatabase.com";
$username = "sql6404877";
$password = "zWv8XzWmRq";
$database = "sql6404877"; 

$conn = mysqli_connect($servername, $username, $password, $database); 
	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>