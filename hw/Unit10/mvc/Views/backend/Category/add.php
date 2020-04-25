<?php 
require_once('Views/backend/includes/header.php'); ?>
<div class="container">
<h3 align="center">DevMind - Education And Technology Group</h3>
<h3 align="center">Add New Category</h3>
<hr>
    <form action="/hw/Unit10/mvc/index.php?mod=category&act=add-process" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name">
        </div>
        <div class="form-group">
            <label for="">Thumbnail</label>
            <input type="text" class="form-control" id="" placeholder="" name="thumbnail">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<?php 
require_once('Views/backend/includes/footer.php') ?>