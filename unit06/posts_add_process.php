<?php 
// echo "add";
require("connect.php");
require_once("helper.php");
// Code chay
if (isset($_POST['submit'])) {
    $uploads = file_upload("Uploads/","thumbnail",500000,array('JPG','png','jpg'));
    if (gettype($uploads)== "array") {
        print_r($uploads);
    } else{
        echo "FIle name is: ".$uploads;
    }
}

$data = $_POST;
$data['thumbnail'] = file_upload("Uploads/","thumbnail",500000,array('JPG','png','jpg'));
// $query = add("posts",$data);
$query = "INSERT INTO posts (title, description, content, thumbnail, view_count,  category_id, user_id) VALUES ('".$data['title']."','".$data['description']."','".$data['content']."','".$data['thumbnail']."','".$data['view_count']."','".$data['category_id']."','".$data['user_id']."')";
// echo $query;
 $status = $conn->query($query);
 if ($status) {
 	echo "Thành công!";
 } else{
 	echo "Lỗi!";
 }

 header("Location: posts.php");
 ?>