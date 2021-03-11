<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$tong = 0;
		$n = 7;
		for ($i=1; $i < $n; $i++) { 
			$tong += $i / gt($i);
		}
		echo "Tổng giai thừa là: ".$tong;



		function gt($x){
			$gt = 1;
			for ($i= 1; $i <= $x; $i++) {
				$gt = $i*$gt;
			}
			return $gt;
		}
	 ?>
</body>
</html>