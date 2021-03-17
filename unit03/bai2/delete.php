<?php 
session_start();
	unset($_SESSION['sv'][$_GET['m']]);
	header('Location: bai3.2.php')
?>