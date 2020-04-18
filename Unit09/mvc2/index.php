<?php 
$mod = $_GET['mod'];
$act = $_GET['act'];

switch ($mod) {
	case 'category':
		require_once('controllers/CategoryController.php');
		$CategoryCtr_obj  = new CategoryController(); 
		switch ($act) {
			case 'list':
				$CategoryCtr_obj->list();
				break;
			case 'detail':
				$CategoryCtr_obj->detail();
				break;
			case 'add':
				$CategoryCtr_obj->add();
				break;
			case 'add-process':
				$CategoryCtr_obj->addProcess();
				break;
			case 'edit':
				$CategoryCtr_obj->edit();
				break;
			case 'update':
				$CategoryCtr_obj->update();
				break;
			case 'delete':
				$CategoryCtr_obj->delete();
				break;
			default:
				echo "Khong ton tai act ".$act;
				break;
		}
		break;	
	case 'post':
		require_once('controllers/PostController.php');
		$PostCtr_obj  = new PostController(); 
		switch ($act) {
			case 'list':
				$PostCtr_obj->listPost();
				break;
			case 'add':
				$PostCtr_obj->addPost();
				break;
			case 'add-process':
				$PostCtr_obj->addPostProcess();
				break;
			case 'detail':
				$PostCtr_obj->detailPost();
				break;
			case 'edit':
				$PostCtr_obj->editPost();
				break;
			case 'update':
				$PostCtr_obj->updatePost();
				break;
			case 'delete':
				$PostCtr_obj->deletePost();
				break;
			default:
				die("Action Post not found.");
				break;
		}
		break;
	case 'user':
		require_once('controllers/UserController.php');
		$UserCtr_obj  = new UserController(); 
		switch ($act) {
			case 'list':
				$UserCtr_obj->listUser();
				break;
			case 'detail':
				$UserCtr_obj->detailUser();
				break;
			case 'add':
				$UserCtr_obj->addUser();
				break;
			case 'add-process':
				$UserCtr_obj->addUserProcess();
				break;
			case 'edit':
				$UserCtr_obj->editUser();
				break;
			case 'update':
				$UserCtr_obj->updateUser();
				break;
			case 'delete':
				$UserCtr_obj->deleteUser();
				break;
			default:
				echo "Khong ton tai act ".$act;
				break;
		}
		break;
	default:
		echo "Khong ton tai ".$mod;
		break;
}
?>