<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "temp";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error) {
	die("Connection Error : ".$conn->connect_error);
}

?>