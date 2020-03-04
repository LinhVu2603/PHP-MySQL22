<?php 
	// $number = 15;
	// kiem_tra($number);
	// function kiem_tra($number){
	// 	if ($number%2 == 0) {
	// 		echo "Số chẵn!";
	// 	} else{
	// 		echo "Số lẻ!";
	// 	}
	// }
	include 'Ex01.php';
	// require 'Ex01.php';

	$a = 10; 
	$b = 15;
	$c = 12;
	// echo tinhTong($a,$b,$c);
	echo tinhTong1($a,$b,4);	
	function tinhTong($a,$b,$c){
		$tong = $a +$b +$c;
		return $tong;
	}
	function tinhTong1($a,$b,$c = false){
		$tong = $a+$b;
		if ($c!= false) {
			$tong = $tong + $c;
			return $tong;
		} else{
			return $tong;
		}
	}
	echo "<br>";
	$bien_toan_cuc = 12;
	kiem_tra();
	function kiem_tra(){
		$bien_cuc_bo = 13;
		global $bien_toan_cuc;
		if ($bien_cuc_bo%$bien_toan_cuc == 0) {
			echo "Số dư = 0";
		} else{
			echo "Số dư khác 0";
		}
	}
	echo "<br>";
	function kiemTra(){
		static $a = 0;
		$a++;
		echo $a;
	} 
	kiemTra();
	echo "<br>";
	kiemTra();
	$arr = array(1,2,3,4,5); 
	var_dump(in_array(1, $arr));
	echo array_search(4,$arr);
	echo "<pre>";
		print_r(array_count_values($arr));
	echo "</pre>";
?>