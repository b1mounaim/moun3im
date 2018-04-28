<?php

$servername = "localhost";
$username = "root";
$password = "AB27c2000";
$dbname = "mounaimdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if(!$conn) {
	die("Connection failed ".mysqli_connect_error());
}

?>