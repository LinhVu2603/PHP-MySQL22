<?php
echo "<h1><b> Tính tổng S = 1/1!+2/2!+....+n/n!</b></h1>";
echo "<br>";
$sum = 0;
$factorial = 1;
$n = 3;
echo "Cho n = ".$n;
echo "<br>";
for ($i=1; $i <= $n; $i++) { 
	$factorial = $factorial*$i;
	$sum = $sum + $i/$factorial;
}
echo "Tổng S = ".$sum;
?>