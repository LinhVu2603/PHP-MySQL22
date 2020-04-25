<?php 
require_once('Views/backend/includes/header.php'); ?>
<div class="container">
    <h3 class="text-center">--- USERS BY LINH---</h3>
    <a href="users_add.php" class="btn btn-primary">Add New User</a>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Avatar</th>
            <th>Action</th>
        </thead>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td>
                <img src="<?php echo $user['avatar']; ?>" width = "100px" height = "100px">
            </td>
            <td>
                <a href="/hw/Unit10/mvc/index.php?mod=user&act=edit&id=<?php echo $user['id']; ?>" class="btn btn-success">Edit</a>
                <a href="/hw/Unit10/mvc/index.php?mod=user&act=delete&id=<?php echo $user['id']; ?>" class="btn btn-danger">Delete</a>
                <a href="/hw/Unit10/mvc/index.php?mod=user&act=list" class="btn btn-primary">Back to USERS</a>
            </td>
        </tr>
    </table>
</div>
<?php 
require_once('Views/backend/includes/footer.php'); ?>