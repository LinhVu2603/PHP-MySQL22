<?php 
//Bước 1:
$servername = 'localhost';
$username = 'root';
$password = "";
$dbname = "php_blog1";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_errno) {
	echo "Failed to connect to MySQL:".$conn->connect_errno;
	exit();
} else{
	// echo "success.";
}

 ?>