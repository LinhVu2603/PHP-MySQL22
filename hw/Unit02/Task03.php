<?php 
	$arr = array(1,4,2,6,9,100,4);
	$temp = 0;
	for ($i=0; $i < count($arr)-1; $i++) {
		for ($j=0; $j < count($arr)-1-$i; $j++) { 
			if ($arr[($j+1)]<$arr[$j]) {
				$temp = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $temp;
			}
		}
	}
	echo "<pre>";
		print_r($arr);
	echo "</pre>";
 ?>