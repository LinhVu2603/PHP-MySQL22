<?php 
require_once('Views/backend/includes/header.php'); ?>
<div class="container">
<h3 align="center">DevMind - Education And Technology Group</h3>
<h3 align="center">Add New Category</h3>
<hr>
    <form action="/hw/Unit10/mvc/index.php?mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
    	<input type="hidden" name="id" value="<?php echo $category['id']; ?>">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $category['name']; ?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description" value="<?php echo $category['description']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<?php 
require_once('Views/backend/includes/footer.php'); ?>