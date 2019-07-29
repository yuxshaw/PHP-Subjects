<?php


	$arr = array(
		'name1'=>'zhumi',
		'name2'=>'xuxing',
		'name3'=>'wenjie'
	);

	//将数组转为json格式字符串
	$json_data = json_encode($arr);
	echo $json_data;

	//将json格式字符串转为对象
	/*$arr1 = json_decode($json_data);
	var_dump($arr1);*/