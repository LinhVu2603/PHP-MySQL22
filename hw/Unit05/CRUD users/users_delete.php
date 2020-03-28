<?php 
$id = $_GET['id'];
// echo $id;
require('connect.php');
$query = "DELETE from users where id=$id";
$status = $conn->query($query);
// if ($status) {
// 	echo "Thành công!";
// } else{
// 	echo "Lỗi!";
// }
header("Location: users.php");

 ?>