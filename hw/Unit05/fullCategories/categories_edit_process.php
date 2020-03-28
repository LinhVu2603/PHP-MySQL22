<?php 
// print_r($_POST);
$id = $_POST['id'];
$data = $_POST;
require('connect.php');
$query = "UPDATE categories SET name='".$data['name']."' ,thumbnail='".$data['thumbnail']."' ,description='".$data['description']."' WHERE  id = ".$id;
// echo $query;
$status = $conn->query($query);

if ($status) {
	echo "Thành công!";
} else{
	echo "Lỗi!";
}
header("Location: categories.php");
?>