<?php 
require("connect.php");

$query = "SELECT * FROM users";
$result  =$conn->query($query);

$users = array();
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USERS</title>
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
            <?php foreach ($users as $user) {
            ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <img src="<?php echo $user['avatar']; ?>" width = "100px" height = "100px">
                </td>
                <td>
                    <a href="users_detail.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="users_edit.php?id=<?php echo $user['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="users_delete.php?id=<?php echo $user['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php  }?>
        </table>
    </div>
</body>
</html>