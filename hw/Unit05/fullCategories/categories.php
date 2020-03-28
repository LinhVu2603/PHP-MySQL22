<?php 
require("connect.php");

$query = "SELECT * FROM categories";
$result  =$conn->query($query);

$categories = array();
while ($row = $result->fetch_assoc()) {
	$categories[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style type="text/css">
    	h3{
    		color: red;
    	}
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES BY LINH---</h3>
        <a href="categories_add.php" class="btn btn-primary">Add New Category</a>
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
                    <img src="<?php echo $category['thumbnail']; ?>" width = "100px" height = "100px">
                </td>
                <td><?php echo $category['description']; ?></td>
                <td>
                    <a href="categories_detail.php?id=<?php echo $category['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="categories_edit.php?id=<?php echo $category['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="categories_delete.php?id=<?php echo $category['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php  }?>
        </table>
    </div>
</body>
</html>