<?php 
require_once('Views/backend/includes/header.php'); ?>
<div class="container">
<h3 align="center">DevMind - Education And Technology Group</h3>
<h3 align="center">Edit user</h3>
<hr>
    <form action="/hw/Unit10/mvc/index.php?mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
    	<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $user['name']; ?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="" name="email" value="<?php echo $user['email']; ?>">
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="text" class="form-control" id="" placeholder="" name="avatar" value="<?php echo $user['avatar']; ?>">
        </div>  
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<?php 
require_once('Views/backend/includes/footer.php'); ?>