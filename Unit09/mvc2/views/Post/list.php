
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
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
        <?php 
        if (isset($_COOKIE['success'])) { ?>
        <span class="success"><?=$_COOKIE['success'];?></span>
        <?php } ?>
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