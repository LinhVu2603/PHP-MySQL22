<?php 
// echo "add";
require("connect.php");

$data = $_POST;
$query = "INSERT INTO categories (name, thumbnail, description) VALUES ('".$data['name']."','".$data['thumbnail']."','".$data['description']."')";
// echo $query;
 $status = $conn->query($query);
 if ($status) {
 	echo "Thành công!";
 } else{
 	echo "Lỗi!";
 }

 header("Location: categories.php");
 ?>