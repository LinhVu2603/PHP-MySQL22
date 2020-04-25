<?php 
require_once('Views/backend/includes/header.php'); ?>
<div class="container">
    <h3 class="text-center">--- CATEGORIES ---</h3>
    <a href="/hw/Unit10/mvc/index.php?mod=category&act=add" class="btn btn-primary">Add New Category</a>
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
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Thumbnail</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        <?php foreach ($categories as $category) {
        ?>
        <tr>
            <td><?php echo $category['id']; ?></td>
            <td><?php echo $category['name']; ?></td>
            <td>
                <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
            </td>
            <td><?php echo $category['description']; ?></td>
            <td>
                <a href="/hw/Unit10/mvc/index.php?mod=category&act=detail&id=<?php echo $category['id']; ?>" class="btn btn-primary">Detail</a>
                <a href="/hw/Unit10/mvc/index.php?mod=category&act=edit&id=<?php echo $category['id']; ?>" class="btn btn-success">Edit</a>
                <a href="/hw/Unit10/mvc/index.php?mod=category&act=delete&id=<?php echo $category['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php  }?>
    </table>
</div>
<?php 
require_once('Views/backend/includes/footer.php'); ?>
