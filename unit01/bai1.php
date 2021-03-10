<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$a ="3";
		$b ="5";
		$c ="2";

		$delta = ($b*$b) - (4*$a*$c);
		if ($delta < 0){
			echo "Phương trình vô nghiệm";
		}
		else if ($delta == 0){
			echo "Phương trình nghiệm kép x1 = x2 = " . (-$b/2*$a);
		}
		else {
			echo "Phương trình có hai nghiệm phân biệt: " . "<br>" . "x1 =" . ((-$b + sqrt($delta))/2*$a);
			echo "<br>"."x2 = ".((-$b - sqrt($delta))/2*$a);
		}
	
	?>
</body>
</html>

