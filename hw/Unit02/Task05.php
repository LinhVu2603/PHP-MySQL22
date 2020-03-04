<?php 
	$input = "Vũ Hoàng Nhật Minh";
 	$data = explode(" ", $input);
 	$ho = $data[0];
 	$ten = $data[count($data)-1];
 	array_shift($data);
 	array_pop($data);
	$output = implode(" ",$data);
 	echo "<br>Họ: ".$ho;
 	echo "<br>Đệm: ".$output;
 	echo "<br>Tên: ".$ten;
 ?>