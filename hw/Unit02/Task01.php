<?php 
	$arr = array(1,4,2,6,9,10,5,8,20,20);
	$numb = $arr[0];
	for ($i=0; $i < count($arr); $i++) { 
		if ($arr[$i]>=$numb) {
			$numb = $arr[$i];
		} 
	}
	echo "Phần tử lớn nhất của mảng là: ".$numb;
?>