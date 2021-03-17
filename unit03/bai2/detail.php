<?php 
	session_start();
	$sv = $_SESSION['sv'][$_GET['m']];
		echo "Mã sinh viên: ".$sv['MaSV'];
		echo "<br> Họ tên: ".$sv['name'];
		echo "<br> Số điện thoại: ".$sv['phone'];
		echo "<br> Email: ".$sv['mail'];
		echo "<br> Giới tính: ".$sv['gender'];
 ?>