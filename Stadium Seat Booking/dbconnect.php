<?php
//devlopment
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "booking";

//evlopment
$servername = "remotemysql.com";
$username = "9m0cil2DV1";
$password = "UlxQ3aXL3G";
$dbname = "9m0cil2DV1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
