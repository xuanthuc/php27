<?php 
	$arr = "ZenttneZ";
	$length = strlen($arr);
	$check=true;
	for ($i=0; $i <($length-1) ; $i++) { 
		if ($arr[$i] != $arr[$length-$i-1]) {
			$check=false;
		}
	}
	if ($check == true) {
		echo $arr." là chuỗi Palindrome";
	} else {
		echo $arr." không phải chuỗi Palindrome";
	}
 ?>