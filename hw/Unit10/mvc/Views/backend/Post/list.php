<?php 
require_once('Views/backend/includes/header.php'); ?>
<div class="container">
    <h3 class="text-center">--- POSTS BY LINH---</h3>
    <a href="/hw/Unit10/mvc/index.php?mod=post&act=add" class="btn btn-primary">Add New Post</a>
     <?php
        if (isset($_COOKIE["msg"])) {
    ?>
    <div class="alert alert-success" role="alert">
        <strong>Success !!!</strong>
        <?php
        echo $_COOKIE["msg"];
        ?>
    </div>
    <?php 
        }
    ?>
    <?php
        if (isset($_COOKIE["error"])) {
    ?>
    <div class="alert alert-danger" role="alert">
        <strong>Thất Bại !!!</strong>
        <?php
        echo $_COOKIE["error"];
        ?>
    </div>
    <?php 
        }
    ?>
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
                <a href="/hw/Unit10/mvc/index.php?mod=post&act=detail&id=<?php echo $post['id']; ?>" class="btn btn-primary">Detail</a>
                <a href="/hw/Unit10/mvc/index.php?mod=post&act=edit&id=<?php echo $post['id']; ?>" class="btn btn-success">Edit</a>
                <a href="/hw/Unit10/mvc/index.php?mod=post&act=delete&id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php  }?>
    </table>
</div>
<?php 
require_once('Views/backend/includes/footer.php'); ?>