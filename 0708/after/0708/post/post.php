<?php

	$conn = mysqli_connect('localhost','root','','student');
	mysqli_query($conn,'SET NAMES UTF8');

	$sql = "SELECT name FROM student";
	$res = mysqli_query($conn,$sql);

	while ($row = mysqli_fetch_row($res)){
		if(mysqli_affected_rows($conn)>0){
			$stu[] = $row;
		}
	}

	foreach ($stu as $item){
		$stu_names[] = $item[0];
	}

	$user = isset($_POST['name']) ? $_POST['name'] : '';
	if(in_array($user,$stu_names)){
		echo 0;
		exit;
	}else{
		echo 1;
		exit;
	}

