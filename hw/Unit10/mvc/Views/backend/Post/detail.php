<?php 
require_once('Views/backend/includes/header.php'); ?>
<div class="container">
    <h3 class="text-center">--- POSTS BY LINH---</h3>
    <a href="hw/Unit10/mvc/index.php?mod=post&act=add" class="btn btn-primary">Add New Post</a>
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
                <a href="/hw/Unit10/mvc/index.php?mod=post&act=edit&id=<?php echo $post['id']; ?>" class="btn btn-success">Edit</a>
                <a href="/hw/Unit10/mvc/index.php?mod=post&act=delete&id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
                <a href="/hw/Unit10/mvc/index.php?mod=category&act=list" class="btn btn-primary">Back to Posts</a>
            </td>
        </tr>
    </table>
</div>
<?php 
require_once('Views/backend/includes/footer.php'); ?>