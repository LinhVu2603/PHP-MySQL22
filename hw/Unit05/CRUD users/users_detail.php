<?php 
$id = $_GET['id'];
// $id = isset($_GET['$id'])?$_GET['$id']:0;
// echo $id;
require("connect.php");

$query = "SELECT * from users WHERE id = ". $id;
$result = $conn->query($query);

$user = $result->fetch_assoc();
// print_r($category);
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
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <img src="<?php echo $user['avatar']; ?>" width = "100px" height = "100px">
                </td>
                <td>
                    <a href="users_edit.php?id=<?php echo $user['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="users_delete.php?id=<?php echo $user['id']; ?>" class="btn btn-danger">Delete</a>
                    <a href="users.php" class="btn btn-primary">Back to USERS</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>