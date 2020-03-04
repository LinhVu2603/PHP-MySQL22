<?php 
	$input = " vU  hoAnG   nhAt MiNh ";
 	$data = explode(" ", $input);
 	$data = array_filter($data);
 	foreach ($data as $key => $value) {
 		$data[$key] = strtolower($value);
 		$data[$key] = ucfirst($data[$key]);
 	}
 	$output = implode(" ",$data);
 	echo $output;
 ?>