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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 align="center">DevMind - Education And Technology Group</h3>
        <h3 align="center">Add New Post</h3>
        <?php 
            if (isset($_COOKIE['success'])) {
        ?>
        <span class="bg-success"><?=$_COOKIE['success']?></span>
        <?php } ?>
        <hr>
        <form action="index.php?mod=post&act=add-process" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="textarea" class="form-control" id="summernote"  name="content" placeholder="">
            </div>
        <div class="form-group" enctype="multipart/form-data">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">View Count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count">
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <select class = "form-control" name = "category_id">
                    <?php foreach ($categories as $category) {?>
                    <option value="<?php echo   $category['id'];?>"><?php echo $category['name'];?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">User</label>
                <select class = "form-control" name = "user_id">
                    <?php foreach ($users as $user) {?>
                    <option value="<?php echo   $user['id'];?>"><?php echo $user['name'];?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Create</button>
        </form>
    </div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#summernote').summernote();
    $('#summernote').summernote('editor.pasteHTML',$("#summernote").data("content"));
});
</script>
</html>