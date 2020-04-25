<?php
	require_once "Models/Category.php";
	require_once "Models/User.php";
	require_once('Controllers/BaseController.php');
	class CategoryController extends BaseController{
		public $model;
		function __construct(){
			$this->model = new Category();
		}
		function list(){
			$categories = $this->model->getAll();
			// require_once "views/category/list.php";
			$this->view('Category/list.php',[
			'categories'=>$categories
			]);
			/*
			$this->view('Category/list.php',compact('categories'));
			*/
		}
		public function add(){
			$this->view('Catgory/add.php',compact('categories'));
		}
		function detail(){
			$id = $_GET['id'];
			$category = $this->model->getById($id);
			// require_once "views/category/detail.php";
			$this->view('Category/detail.php',[
			'category'=>$category
			]);
		}
		function edit(){
			$id = $_GET['id'];
			$category = $this->model->getById($id);
			// require_once "views/category/edit.php";
			$this->view('Category/edit.php',[
			'category'=>$category
			]);
		}
		function update(){
			$data = $_POST;
			$id = $_POST['id'];
			$result = $this->model->update($data, $id);
			if ($result) {
				setcookie("msg","Update successful!",time() + 3);
				$this->redirect('Category/list.php');
			}else{
				setcookie("msg","Update unsuccessful!",time() + 3);
				$this->redirect('Category/edit.php');
			}
			$this->redirect('Category/list.php');
			// header("location: /hw/Unit10/mvc/index.php?mod=category&act=list");
		}
		function store(){
			$data = $_POST;
			$data['content'] = htmlspecialchars($data['content']);
			$result = $this->model->store($data);
			if ($result) {
				setcookie("msg","Tạo Mới Thành công",time() + 3);
				// header("location: /Homework/php22.com/ex/index.php?mod=category&act=list");
				$this->redirect('Category/list.php');
			}else{
				setcookie("msg","Tạo Mới Thất Bại",time() + 3);
				// header("location: /Homework/php22.com/ex/index.php?mod=category&act=add");
				$this->redirect('Category/add.php');
			}
		}
		function destroy(){
			$id = $_GET['id'];
			$query = $this->model->destroy($id);
			setcookie("msg","Xóa Thành Công",time() + 3);
			// header("location: /Homework/php22.com/ex/index.php?mod=category&act=list");
			$this->redirect('Category/list.php');
		}
	}
?> 