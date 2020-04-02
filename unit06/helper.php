<?php 
function add($table, $data){
    $query = " INSERT INTO $table (";
    end($data);
    $last_key = key($data);
    foreach ($data as $key => $value) {
        $query .= $key . ",";
    }
    $query = substr_replace($query,")",-1);
    $query .= " VALUE (";
    end($data);
    $last_key = key($data);
    foreach ($data as $key => $value) {
        $query .= "'".$value."'" . ",";
    }
    $query = substr_replace($query,")",-1);
    return $query;
}
// $query = "UPDATE '' SET key = value WHERE "
function update($table,$data,$id){
    $query = "UPDATE $table SET ";
    foreach ($data as $key => $value) {
        $query .= $key ." = '".$value."',";
    }
    $query = substr_replace($query,"", -1);
    $query .= " WHERE id = ".$id;
    return $query;
}

function getCategories($conn){
	$categories_query = "SELECT * FROM categories";
$categories_result  =$conn->query($categories_query);

$categories = array();
while ($row = $categories_result->fetch_assoc()) {
	$categories[] = $row;
}
// $category = $categories_result -> fetch_assoc();
return $categories;
}

function getUsers($conn){
	$users_query = "SELECT * FROM users";
$users_result  =$conn->query($users_query);

$users = array();
while ($row = $users_result->fetch_assoc()) {
	$users[] = $row;
}
return $users;
}

function getPosts($conn,$id){
	$post_query = "SELECT * from posts WHERE id = ". $id;
$post_result = $conn->query($post_query);

$post = $post_result->fetch_assoc();
// print_r($category);

if ($post['user_id']) {
    $user_query  = "SELECT * FROM users WHERE id = ".$post['user_id'];
    $user_result = $conn->query($user_query);
    $user  = $user_result->fetch_assoc();
    $post['user'] = $user;
} else{
    echo "no";
}
if ($post['category_id']) {
    $category_id  = "SELECT * FROM categories WHERE id = ".$post['category_id'];
    $category_result = $conn->query($category_id);
    $catgory  = $category_result->fetch_assoc();
    $post['category'] = $catgory;
} else{
    echo "no";
}
return $post;
}

//Ham xu ly
function file_upload($target_dir,$input_name,$max_size,$formats_allowed_array){
    $target_file = $target_dir."".basename($_FILES[$input_name]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $error_arr = array();

    //Check nếu file đã tồn tại
    if (file_exists($target_file)) {
        $error_arr[] = "Sorry,file already exists.";
        $uploadOk = 0;
    }

    //Check file size
    if ($_FILES[$input_name]['size']>$max_size) {
        $error_arr = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Check format file
    if (!in_array($imageFileType, $formats_allowed_array)) {
        $error_arr[] = "Sorry, only ".implode(array_values($formats_allowed_array), ',')."files are allowed." ;
        $uploadOk = 0;
    }
    //Check nếu $uploadOk bằng 0 nếu xảy ra lỗi gì đó
    if ($uploadOk == 0) {
        $error_arr[] = "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
            return $_FILES[$input_name]["name"];
        } else {
            $error_arr[] = "Sorry, there was an error uploading your file.";
        }
    }
    return $error_arr;
}


 ?>

