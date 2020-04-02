<?php 
$id = $_GET['id'];
// $id = isset($_GET['$id'])?$_GET['$id']:0;
// echo $id;
require("connect.php");
require('helper.php');
$post = getPosts($conn,$id);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style type="text/css">
    	h3{
    		color: red;
    	}
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POSTS BY LINH---</h3>
        <a href="posts_add.php" class="btn btn-primary">Add New Post</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Content</th>
                <th>Thumbnail</th>
                <th>View Count</th>
                <th>Action</th>
            </thead>
            <tr>
                <td><?php echo $post['id']; ?></td>
                <td><?php echo $post['title']; ?></td>
                <td><?php echo $post['description']; ?></td>
                <td><?php echo $post['content']; ?></td>
                <td>
                    <img src="<?php echo $post['thumbnail']; ?>" width = "100px" height = "100px">
                </td>
                <td><?php echo $post['view_count'];?></td>
                <td>
                    <a href="posts_edit.php?id=<?php echo $post['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="posts_delete.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
                    <a href="posts.php" class="btn btn-primary">Back to Posts</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>