<?php 
class BaseController{
	public function view($path,$data = []){
		if (!empty($data)) {
			extract($data);
		}
		require_once('Views/'.$path);
	}
	public function redirect($path){
		header("Location: ".$path);
	}
}
?>