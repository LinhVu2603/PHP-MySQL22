<?php 
// print_r($_POST);
$id = $_POST['id'];
$data = $_POST;
require('connect.php');
$query = "UPDATE users SET name='".$data['name']."' ,email='".$data['email']."' ,avatar='".$data['avatar']."' WHERE  id = ".$id;
// echo $query;
$status = $conn->query($query);

if ($status) {
	echo "Thành công!";
} else{
	echo "Lỗi!";
}
header("Location: users.php");
?>