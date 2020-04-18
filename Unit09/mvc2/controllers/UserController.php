<?php
require_once('models/User.php');

class UserController{
	public $model;
	function __construct(){
		$this->model = new User();
		// echo "Category Controller.";
	}

	public function listUser(){
		$users = $this->model->getAll();
		// var_dump($categories);
		// echo "list";
		require_once('views/User/list.php');
	}
	public function detailUser(){
		$id = $_GET['id'];
		$user = $this->model->getID($id);
		require_once('views/User/detail.php');
	}
	
	public function addUser(){
		require_once('views/User/add.php');
	}
	public function addUserProcess(){
		$data = $_POST;
		$user_model = new User();
		$data['content'] = htmlspecialchars($data['content']);
		$result = $user_model->create($data);
		// die($result);
		if ($result) {
			setcookie("success","Create Successful!",time()+3);
			header("Location: index.php?mod=user&act=list");
		}else{
			setcookie("unsuccess","Create Unseccessful!",time()+3);
			header("Location: index.php?mod=user&act=add");
		}
		// die("in addPostProcess function");

	}
	public function editUser(){
		$id = $_GET['id'];
		$user = $this->model->getID($id);
		require_once('views/User/edit.php');
	}
	public function updateUser(){
		$id = $_POST['id'];
		$data = $_POST;

		$this->model->update($data,$id);
		header("Location: index.php?mod=user&act=list");
	}
	public function deleteUser(){
		$id = $_GET['id'];
		$this->user_model->delete($id);
		header("location: index.php?mod=post&act=list");
	}

}
?>