<?php
	$emial_arr = array(
		'abcd@qq.com',
		'zhumi@gmail.com',
		'yuxing@hotmail.com',
		'wenjie@foxmial.com'
	);

	if(isset($_GET['email'])){
		$emial = $_GET['email'];
		if (in_array($emial,$emial_arr)){
			echo "<span style='color: red;'>该邮箱已被注册</span>";
		}else{
			echo "<span style='color: green;'>该邮箱可以注册</span>";
		}
	}