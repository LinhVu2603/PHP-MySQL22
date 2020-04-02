<?php 

require('connect.php');
require('helper.php');
$id = $_GET['id'];

// $category = getCategory($conn);
// $user = getUser($conn);

$categories = getCategories($conn);
$users = getUsers($conn);
$post = getPosts($conn,$id);
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Edit Post</h3>
    <hr>
        <form action="posts_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?php echo $post['title']; ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?php echo $post['description']; ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" value="<?php echo $post['content']; ?>">
            </div>
            <div class="form-group" enctype="multipart/form-data">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?php echo $post['thumbnail']; ?>">
            </div>
            <div class="form-group">
                <label for="">View Count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count" value="<?php echo $post['view_count']; ?>">
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <SELECT class = "form-control" name = "category_id">
                    <?php foreach ($categories as $category) {?>
                    <option value="<?php echo $category['id'];?>" <?php if ($category['id'] == $post['category_id'])   echo "selected"?>><?php echo $category['name'];?></option>
                    <?php } ?>
                </SELECT>
            </div>
            <div class="form-group">
                <label for="">User</label>
                <SELECT class = "form-control" name = "user_id" >
                    <?php foreach ($users as $user) {?>
                    <option value="<?php echo $user['id'];?>" <?php if ($user['id'] == $post['user_id'])   echo "selected"?>><?php echo $user['name'];?></option>
                    <?php } ?>
                </SELECT>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Create</button>
        </form>
    </div>
</body>
</html>