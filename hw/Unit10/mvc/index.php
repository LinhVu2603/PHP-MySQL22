<?php 
	$mod = $_GET['mod'];
	$act = $_GET['act'];

	$class_name = ucfirst($mod)."Controller";
	$path = __DIR__."/controllers/".$class_name.".php";
	if (!file_exists($path)) {
		echo "File $path không tồn tại.";
		exit();
	}
	require_once($path);
	$controller_obj = new $class_name();
	if (!method_exists($controller_obj, $act)) {
		echo "Method $act không tồn tại.";
		exit();
	}
	$controller_obj->$act();
?>