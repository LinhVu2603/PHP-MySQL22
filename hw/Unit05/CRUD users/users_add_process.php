<?php 
// echo "add";
require("connect.php");

$data = $_POST;
$query = "INSERT INTO users (name, email, avatar) VALUES ('".$data['name']."','".$data['email']."','".$data['avatar']."')";
// echo $query;
 $status = $conn->query($query);
 if ($status) {
 	echo "Thành công!";
 } else{
 	echo "Lỗi!";
 }

 header("Location: users.php");
 ?>