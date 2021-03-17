<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bài 3.2</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2 align="content">DANH SÁCH NGƯỜI DÙNG</h2>
		<a href="add.php" class="btn btn-primary"> Làm mới</a>
		<div class="alert alert-success">
			<strong>Thông báo: </strong>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>STT</th>
					<th>Mã sinh viên</th>
					<th>Họ tên</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=1;
				if (isset($_SESSION['sv'])) {
					foreach ($_SESSION['sv'] as $key) {
						echo "<tr>";
						echo "<td>";
						echo $i;
						echo "</td>";
						echo "<td>";
						echo $key['MaSV'];
						echo "</td>";
						echo "<td>";
						echo $key['name'];
						echo "</td>";
						echo "<td>";
						echo '<a href="detail.php?m='.$key['MaSV'].'" class="btn btn-success">Detail</a><a href="delete.php?m='.$key['MaSV'].'" class="btn btn-danger">Delete</a>';
						echo "</td>";
						echo "</tr>";
						$i+=1;
					}
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>