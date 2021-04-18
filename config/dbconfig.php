<?php

 
//Port number: 3306

$servername = "remotemysql.com";
$username = "odyRad1WFa";
$password = "LQFjOeTaEH";
$database = "odyRad1WFa"; 
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "spark_foundation";

$conn = mysqli_connect($servername, $username, $password, $database); 
	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
