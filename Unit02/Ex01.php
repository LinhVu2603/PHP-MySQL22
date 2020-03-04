<?php 
	$arr_name = array();
	$arr_name1 = array('Zent','Be all you can be!');
	var_dump($arr_name1);
	echo "<br>";
	print_r($arr_name1);
	echo "<pre>";
		print_r($arr_name1);
	echo "</pre>";

	$arr_name2 = array(
		0 => 'Zent',
		1 => 'Be all you can be!'
	);
	echo "<pre>";
		print_r($arr_name2);
	echo "</pre>";

	$arr_name[] = 'Zent group';
	$arr_name[] = 'Be all you can be!';
	$arr_name[] = 3;

	echo "<pre>";
		print_r($arr_name);
	echo "</pre>";

	$arr_name3 = array('');
	$arr_name[0] = 'Zent group';
	$arr_name[1] = 'Be all you can be!';
	$arr_name[2] = 3;

	echo "<pre>";
		print_r($arr_name);
	echo "</pre>";

	$user = array();
	$user['name'] = 'Linh';
	$user['age'] = '21';
	$user['years'] = '1999';
	$user['school'] = 'Zent';
	$user['course'] = 'PHP22';

	echo "<pre>";
		print_r($user);
	echo "</pre>";

	echo "<br> Phần tử thứ 0: ".$arr_name[0];
	echo "<br> Phần tử thứ 1: ".$arr_name[1];
	echo "<br> Phần tử thứ 2: ".$arr_name[2];
	echo "<br>";
	foreach ($arr_name as $key => $value) {
		echo "<br> Phần tử thứ ".$key.": ".$value;
	}
	echo "<br>";
	for ($i=0; $i < count($arr_name); $i++) { 
		echo "<br> Phần tử thứ ".$i.": ".$arr_name[$i];
	}
	$arr_name4 = array();

	$arr_name4[0][0] = 'Zent';
	$arr_name4[0][1] = 'Group';
	$arr_name4[1][0] = 'Be all you can be!';
	$arr_name4[1][1] = '2 YEARS';

	echo "<pre>";
		print_r($arr_name4);
	echo "</pre>";

	echo "<br> Phần tử thứ 0,0: ".$arr_name4[0][0] ;
	echo "<br> Phần tử thứ 0,1: ".$arr_name4[0][1] ;
	echo "<br> Phần tử thứ 1,0: ".$arr_name4[1][0] ;
	echo "<br> Phần tử thứ 1,1: ".$arr_name4[1][1] ;
	echo "<br>";
	//In mảng theo định dạng
	foreach ($arr_name4 as $key1 => $value1) {
		echo "---------------"."<br>";
		foreach ($value1 as $key2 => $value2) {
			echo $value2."<br>";
		}
	}

	//MẢng 2 chiều nâng cao
	$info = array();
	$info[] = array(
		'ID' => '20170798',
		'NAME' => 'Vu Linh',
		'PHONE' => '0971524178'
	);
	$info[] = array(
		'ID' => '20170492',
		'NAME' => 'Dinh Hoang',
		'PHONE' => '0912384291'
	);
	foreach ($info as $key => $student) {
		echo "<br>Thông tin sinh viên thứ: ".($key+1);
		echo "<br> Mã sinh viên: ".$student['ID'];
		echo "<br> Họ và tên: ".$student['NAME'];
		echo "<br> Só điện thoại: ".$student['PHONE'];
		echo "<br>";
	}
 ?>
