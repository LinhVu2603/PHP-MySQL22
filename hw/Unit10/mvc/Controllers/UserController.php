<?php
	require_once "Models/Category.php";
	require_once "Models/User.php";
	require_once('Controllers/BaseController.php');
	class UserController extends BaseController{
		public $model;
		function __construct(){
			$this->model = new User();
		}
		function list(){
			$users = $this->model->getAll();
			// require_once "views/category/list.php";
			$this->view('User/list.php',[
			'users'=>$users
			]);
			/*
			$this->view('User/list.php',compact('users'));
			*/
		}
		public function add(){
			$this->view('User/add.php',compact('users'));
		}
		function detail(){
			$id = $_GET['id'];
			$user = $this->model->getById($id);
			// require_once "views/user/detail.php";	
			$this->view('User/detail.php',[
			'user'=>$user
			]);
		}
		function edit(){
			$id = $_GET['id'];
			$user = $this->model->getById($id);
			// require_once "views/user/edit.php";
			$this->view('User/edit.php',[
			'user'=>$user
			]);
		}
		function update(){
			$data = $_POST;
			$id = $_POST['id'];
			$result = $this->model->update($data, $id);
			if ($result) {
				setcookie("msg","Update successful!",time() + 3);
				$this->redirect('User/list.php');
			}else{
				setcookie("msg","Update unsuccessful!",time() + 3);
				$this->redirect('User/edit.php');
			}
			$this->redirect('User/list.php');
			// header("location: /hw/Unit10/mvc/index.php?mod=user&act=list");
		}
		function store(){
			$data = $_POST;
			$data['content'] = htmlspecialchars($data['content']);
			$result = $this->model->store($data);
			if ($result) {
				setcookie("msg","Tạo Mới Thành công",time() + 3);
				$this->redirect('User/list.php');
			}else{
				setcookie("msg","Tạo Mới Thất Bại",time() + 3);
				$this->redirect('User/add.php');
			}
		}
		function destroy(){
			$id = $_GET['id'];
			$query = $this->model->destroy($id);
			setcookie("msg","Xóa Thành Công",time() + 3);
			$this->redirect('User/list.php');
		}
	}
?> 