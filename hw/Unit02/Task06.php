<?php 
	$str = "ZecasneZ";
	$arr = array();
	$len = strlen($str);
	$flag = 0;
	for ($i=1; $i < $len ; $i++) { 
		$arr[0] = substr($str,7);
		$arr[$i] = substr($str,$len-1-$i,-$i);
	}
	for ($j=0; $j < count($arr); $j++) { 
		if ($arr[$j] == $arr[count($arr)- 1 - $j]) {
			$flag = 1;
		} else{
			$flag = 0;
			break;
		}
	}
	if ($flag == 1) {
		echo "Chuỗi là chuỗi Palindrome.";
	} else {
		echo "Chuỗi không là chuỗi Palindrome.";
	}
 ?>