<?php 
	$arr = array(1,4,2,6,9,100,4);
	$revArr = array();
	for ($i=count($arr)-1; $i >=0 ;$i--) { 
		$revArr[count($arr)-$i-1] = $arr[$i];
	}
	echo "<pre>";
		print_r($revArr);
	echo "</pre>";

	//Cách 2
	$revArr1 = array_reverse($arr);
	echo "<pre>";
		print_r($revArr1);
	echo "</pre>";
?>