<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="1px" cellpadding="3" cellspacing="0">
		<tr>
			<?php
				for($i = 2; $i < 10; $i ++) {
				    echo "<td>";
				    for($j = 1; $j <= 10; $j ++) {
				        echo "$i x $j = " . ($i * $j);
				        echo "<br>";
				    }
				    echo "</td>";
				}
			?>
		</tr>
	</table>
</body>
</html>