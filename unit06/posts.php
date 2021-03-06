<?php 
require("connect.php");

$query = "SELECT * FROM posts";
$result  =$conn->query($query);

$posts = array();
while ($row = $result->fetch_assoc()) {
	$posts[] = $row;
}
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
            <?php foreach ($posts as $post) {
            ?>
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
                    <a href="posts_detail.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="posts_edit.php?id=<?php echo $post['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="posts_delete.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php  }?>
        </table>
    </div>
</body>
</html>