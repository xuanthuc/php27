<?php
//1 
	$name = array('Thực', 10, 1.2);
	var_dump($name);
	echo "<pre>";
	print_r($name);
	echo "<pre>";

//2
	$infos_Thuc = array();
	$infos_Thuc['name'] = 'Thực';
	$infos_Thuc['phone'] = '0346805762';
	$infos_Thuc['age'] = '21';
	$infos_Thuc['hometown'] = 'Hà Nội';

	echo "<br> Tên: ".$infos_Thuc['name'];
	echo "<br> SDT: ".$infos_Thuc['phone'];
	echo "<br> Tuổi: ".$infos_Thuc['age'];
	echo "<br> Quê quán: ".$infos_Thuc['hometown'];
	echo "<pre>";
	print_r($infos_Thuc);
	echo "</pre>";

//3
	foreach ($infos_Thuc as $key => $value) {
		echo "<br>Key: ".$key."-value: ".$value;
	}
	foreach ($infos_Thuc as $giatri) {
		echo "<br>giá trị: ".$giatri;
	}


//4
	$infos = array();
	$infos[0] = 'Thực';
	$infos[1] = 'Nam';
	$infos[2] = '21 tuổi';
	$infos[4] = array();
	$infos[4][0] = array('ZENT');
	echo "<pre>";
		print_r($infos);
	echo "<pre>";
	echo "<br> Mảng 3 chiều: ".$infos[4][0][0];

	echo "<br>";
//5

	$numb1 =10;
	kt($numb1);
	$numb2 =9;
	kt($numb2);
	function kt($number){
		if ($number % 2 == 0) {
			echo "<br> Số chẵn";
		} else{
			echo "<br> số lẻ";
		}
	}
	echo "<br>";

//6
	function tinhtong($input){
		$sum =0;
		foreach ($input as $val) {
			$sum += $val;		
		}
		return $sum;
	}

	$arr = array(1,2,3);
	echo "<br> Tổng: ".tinhtong($arr);

 ?>
