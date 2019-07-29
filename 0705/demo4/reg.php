<?php
	$emial_arr = array(
		'abcd@qq.com',
		'zhumi@gmail.com',
		'yuxing@hotmail.com',
		'wenjie@foxmial.com'
	);
	$user_name = array(
		'Tom',
		'Bob',
		'Cat',
		'Dog',
		'Jack'
	);
	var_dump($user_name);



	if(isset($_POST['user'])){
		$user = $_POST['user'];
		if(in_array($user,$user_name)){
			$info = array(
				'user'=>1,
				'msg'=>'已注册'
			);
			echo json_encode($info);
			return;
		}else{
			$info = array(
				'user'=>2,
				'msg'=>'可注册'
			);
			echo json_encode($info);
		}
	}

	if(isset($_POST['email'])){
		$email = $_POST['email'];
		if(in_array($email,$emial_arr)){
			$info = array(
				'email'=>1,
				'msg'=>'已注册'
			);
			echo json_encode($info);
			return;
		}else{
			$info = array(
				'email'=>2,
				'msg'=>'可注册'
			);
			echo json_encode($info);
		}
	}


