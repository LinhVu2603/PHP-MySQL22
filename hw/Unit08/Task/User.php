<?php 
class User{
	protected $name;
	protected $email;
	protected $password;
	protected $thumbnail;

	function __construct($name,$email,$password,$thumbnail){
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
		$this->thumbnail = $thumbnail;
	}
	function getUser(){
		echo "Thông tin danh mục: ";
		echo "<br> - Tên người dùng: $this->name";
		echo "<br> - Email: $this->email";
		echo "<br> - Mật khẩu: $this->password";
		echo "<br> - Ảnh đại diện: $this->thumbnail";
	}
}
$user = new User("Người 1","nguoi-1","Mật khẩu người 1","nguoi1.png");
$user->getUser();
?>