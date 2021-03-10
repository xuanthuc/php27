<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<<?php 
		$a ="1";
		$b ="5";
		$kq = "-$b/$a";
		echo "Phương trình: ".$a."x + ".$b." = 0"."<br/>";
		if($a!=0){
			echo "x= ".$kq;
		}else {
			echo "Nhập lại a(a!=0)";
		}
	 ?>
</body>
</html>