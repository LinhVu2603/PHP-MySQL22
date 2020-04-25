<?php 
require_once('Models/Post.php');
require_once('Models/Category.php');
require_once('Models/User.php');
require_once('BaseController.php');

class PostController extends BaseController{
	public $model;
	public $user;
	public $category;
	function __construct(){
		$this->model = new Post();
		$this->user = new User();
		$this->category = new Category();
	}
	public function list(){
		// $post = $this->model->select(["id","title"])->where("")
		$posts = $this->model->getAll();
		$this->view('Post/list.php',compact('posts'));
	}

	public function add(){
		$users = $this->user->getAll();
		$categories = $this->category->getAll();
		$this->view('Post/add.php',compact('categories','users'));
	}
	public function edit(){
		$id = $_GET['id'];
		$post = $this->model->getID($id);
		$categories = $this->category->getAll();
		$users = $this->user->getAll();
		$this->view('Post/edit.php',compact('posts','categories','users'));
	}
	public function update(){
		$id = $_POST['id'];
		$data = $_POST;
		$this->model->update($data,$id);
		if ($result) {
			setcookie("msg", "Update successful!", time() + 3);
			$this->redirect('Post/add.php');
		}else{
			setcookie("msg", "Update unsuccessful!", time() + 3);
			$this->redirect('Post/edit.php');
		}
	}
	public function detail(){
		$id = $_GET['id'];
		$post = $this->model->getID($id);
		$this->view('Post/detail.php',compact('posts'));
	}
	public function store(){
		$data = $_POST;
		$post_model = new Post();
		$data['content'] = htmlspecialchars($data['content']);
		$result = $post_model->create($data);
		die($result);
		if ($result) {
			setcookie("success","Create Successful!",time()+3);
			// header("Location: index.php?mod=post&act=list");
			$this->redirect('Post/list.php');
		}else{
			setcookie("unsuccess","Create Unseccessful!",time()+3);
			// header("Location: index.php?mod=post&act=add");
			$this->redirect('Post/add.php');
		}
		// die("in addPostProcess function");

	}
	
	
	public function delete(){
		$id = $_GET['id'];
		$this->post_model->delete($id);
		$this->redirect('Post/list.php');
	}
}


?>