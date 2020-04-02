<?php
$id = $_GET['id'];
require_once('connect.php');
$query = "DELETE FROM posts WHERE id = $id";
$status =  $conn->query($query);
header("Location: posts.php");
?>