<?php 
require_once('models/Post.php');
require_once('models/Category.php');
require_once('models/User.php');

class PostController{
	public $post_model;
	function __construct(){
		$this->post_model = new Post();
		// echo "Category Controller.";
	}
	public function listPost(){
		$post_model = new Post();
		$posts = $post_model->getAll();

		require_once("views/Post/list.php");

	}

	public function addPost(){
		$user_model = new User();
		$category_model = new Category();

		$users = $user_model->getAll();
		$categories = $category_model->getAll();
		require_once('views/Post/add.php');
	}
	public function detailPost(){
		$id = $_GET['id'];
		$post = $this->post_model->getID($id);
		require_once('views/Post/detail.php');
	}
	public function addPostProcess(){
		$data = $_POST;
		$post_model = new Post();
		$data['content'] = htmlspecialchars($data['content']);
		$result = $post_model->create($data);
		die($result);
		if ($result) {
			setcookie("success","Create Successful!",time()+3);
			header("Location: index.php?mod=post&act=list");
		}else{
			setcookie("unsuccess","Create Unseccessful!",time()+3);
			header("Location: index.php?mod=post&act=add");
		}
		// die("in addPostProcess function");

	}
	public function editPost(){
		$id = $_GET['id'];
		$post = $this->post_model->getID($id);
		require_once('views/Post/edit.php');
	}
	public function updatePost(){
		die("hereeeee");
		$id = $_POST['id'];
		$data = $_POST;
		$this->post_model->update($data,$id);
		header("Location: /index.php?mod=post&act=list");
	}
	public function deletePost(){
		$id = $_GET['id'];
		$this->post_model->delete($id);
		header("location: Unit09/mvc2/index.php?mod=post&act=list");
	}
}


?>