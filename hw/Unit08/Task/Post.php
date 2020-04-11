<?php 
class Post{
	protected $title;
	protected $slug;
	protected $description;
	protected $content;

	function __construct($title,$slug,$description,$content){
		$this->title = $title;
		$this->slug = $slug;
		$this->description = $description;
		$this->content = $content;
	}
	function getPost(){
		echo "Thông tin danh mục: ";
		echo "<br> - Tiêu đề: $this->title";
		echo "<br> - Đường dẫn: $this->slug";
		echo "<br> - Mô tả: $this->description";
		echo "<br> - Nội dung: $this->content";
	}
}
$post = new Post("Bài viết 1","bai-viet-1","Mô tả bài viết 1","Mô tả bài viết 1");
$post->getPost();
?>