<?php
	//php字符串拼接生成字符串
	header('Content-Type:text/xml;charset=utf-8');

	$arr = array(
		array('name'=>'祝蜜','age'=>19),
		array('name'=>'昌伟','age'=>20),
		array('name'=>'Jack','age'=>20),
	);


	echo '<?xml version="1.0" encoding="utf-8"?>'."\n";
	echo "<student>\n";
		foreach ($arr as $value){
			echo "<stu>";
			foreach($value as $key => $item){
				echo "<".$key.">".$item."</".$key.">";
			}
			echo "</stu>";
		}
	echo "</student>\n";