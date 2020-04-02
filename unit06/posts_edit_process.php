<?php 
$data = $_POST;	
require('connect.php');

$query = "UPDATE posts SET title='".$data['title']."' ,description='".$data['description']."' , content = '".$data['content']."' , thumbnail = '".$data['thumbnail']."' , view_count = '".$data['view_count']."', category_id = '".$data['category_id']."', user_id = '".$data['user_id']."' WHERE id = ".$data['id'];
echo $query;
$status = $conn->query($query);
	
if ($status) {
	echo "Thành công!";
} else{
	echo "Lỗi!";
}
header("Location: posts.php");
?>