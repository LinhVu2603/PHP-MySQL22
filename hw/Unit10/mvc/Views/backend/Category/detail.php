<?php 
require_once('Views/backend/includes/header.php'); ?>
<div class="container">
    <h3 class="text-center">--- CATEGORIES BY LINH---</h3>
    <a href="/hw/Unit10/mvc/index.php?mod=category&act=add" class="btn btn-primary">Add New Category</a>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Thumbnail</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        <tr>
            <td><?php echo $category['id']; ?></td>
            <td><?php echo $category['name']; ?></td>
            <td>
                <img src="<?php echo $category['thumbnail']; ?>" width = "100px" height = "100px">
            </td>
            <td><?php echo $category['description']; ?></td>
            <td>
                <a href="/hw/Unit10/mvc/index.php?mod=category&act=detail&id=<?php echo $category['id']; ?>" class="btn btn-success">Edit</a>
                <a href="/hw/Unit10/mvc/index.php?mod=category&act=delete&id=<?php echo $category['id']; ?>" class="btn btn-danger">Delete</a>
                <a href="/hw/Unit10/mvc/index.php?mod=category&act=list" class="btn btn-primary">Back to categories</a>
            </td>
        </tr>
    </table>
</div>
<?php 
require_once('Views/backend/includes/footer.php'); ?>
