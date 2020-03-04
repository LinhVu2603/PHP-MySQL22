<?php
echo "<h1><b>Chương trinh in ra tổng của 10 số chẵn đầu tiên:</b></h1>";
echo "<br>";
$sum = 0;
for ($i=0; $i <20 ; $i=$i+2) { 
	$sum = $sum+$i;
}
echo "Tổng 10 số chẵn đầu tiên là ".$sum;
?>
