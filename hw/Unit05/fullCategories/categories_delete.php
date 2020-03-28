<?php 
$id = $_GET['id'];
// echo $id;
require('connect.php');
$query = "DELETE from categories where id=$id";
$status = $conn->query($query);
// if ($status) {
// 	echo "Thành công!";
// } else{
// 	echo "Lỗi!";
// }
header("Location: categories.php");

 ?>