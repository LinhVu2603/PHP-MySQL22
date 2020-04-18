<?php
require_once('models/Category.php');
require_once('models/User.php');
class CategoryController{
	public $model;
	function __construct(){
		$this->model = new Category();
		// echo "Category Controller.";
	}

	public function list(){
		$categories = $this->model->getAll();
		// var_dump($categories);
		// echo "list";
		require_once('views/Category/list.php');
	}
	public function detail(){
		$id = $_GET['id'];
		$category = $this->model->getID($id);
		require_once('views/Category/detail.php');
	}
	
	public function add(){
		require_once('views/Category/add.php');
	}
	public function addPostProcess(){
		$data = $_POST;
		$cateogory_model = new Category();
		$data['content'] = htmlspecialchars($data['content']);
		$result = $cateogory_model->create($data);
		// die($result);
		if ($result) {
			setcookie("success","Create Successful!",time()+3);
			header("Location: index.php?mod=post&act=list");
		}else{
			setcookie("unsuccess","Create Unseccessful!",time()+3);
			header("Location: index.php?mod=post&act=add");
		}
		// die("in addPostProcess function");

	}
	public function edit(){
		$id = $_GET['id'];
		$category = $this->model->getID($id);
		require_once('views/Category/edit.php');
	}
	public function update(){
		$id = $_POST['id'];
		$data = $_POST;

		$this->model->update($data,$id);
		header("Location: /Unit09/mvc2/index.php?mod=category&act=list");
	}
	public function delete(){}

}
?>