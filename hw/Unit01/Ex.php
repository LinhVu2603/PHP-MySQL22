<?php 
$n = 8;
for($i=1;$i<=$n;$i++){
for($j=$n;$j>=1;$j--){
if(($j+$i)<=($n+1)){
echo "<b>#</b>&ensp;";
}else{
echo "&emsp;";
}
}
echo "<br><br>";
}
?>