<?php 
	session_start();
		$MaSV = $_POST['MaSV'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$mail = $_POST['mail'];
		$gender = $_POST['gender'];
		$sv['MaSV']=$MaSV;
		$sv['name']=$name;
		$sv['phone']=$phone;
		$sv['mail']=$mail;
		$sv['gender']=$gender;
	$_SESSION['sv'][$MaSV]=$sv;
	header('Location: bai3.2.php')
 ?>
 