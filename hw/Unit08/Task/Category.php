<?php 
class Category{
	protected $name;
	protected $slug;
	protected $parent_id;
	protected $thumbnail;
	protected $description;

	function __construct($name,$slug,$parent_id,$thumbnail,$description){
		$this->name = $name;
		$this->slug = $slug;
		$this->parent_id = $parent_id;
		$this->thumbnail = $thumbnail;
		$this->description = $description;
	}
	function getCategory(){
		echo "Thông tin danh mục: ";
		echo "<br> - Tên danh mục: $this->name";
		echo "<br> - Đường dẫn: $this->slug";
		echo "<br> - Danh mục cha: $this->parent_id";
		echo "<br> - Ảnh hiển thị: $this->thumbnail";
		echo "<br> - Mô tả: $this->description";
	}
}
$category = new Category("Danh mục 2","danh-muc-1","Danh mục 1","/anh12.png","Mô tả danh mục 2");
$category->getCategory();
?>