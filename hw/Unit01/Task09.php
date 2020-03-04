<?php
echo "-------------";
echo "<br>";
for ($i=8; $i >=1 ; $i--) { 
	for ($j=1; $j <=8 ; $j++) { 
		if ($j>=$i) {
			echo " # ";
		} else{
			echo "&nbsp&nbsp";
		}
	}
	echo "<br>";
}
?>