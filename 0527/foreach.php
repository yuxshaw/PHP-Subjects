<?php
	//foreach循环用来遍历数组，每次循环都将指针后移一位
	$arr = [1,2,4,5,6,7,8,22,32,43];
	//var_dump($arr);
	//print_r($arr);

	/*foreach(数组 as 键值 => 值){
		// 语句
	}*/
	foreach($arr as $key => $value){
		echo $key .' ---> '. $value.'<br />';
	}
	foreach ($arr as $item) {
		echo '-- '.$item.' --<br />';
	}


	$student = array(
		'name' => '小李',
		'age'  => 19,
		'sex'  => '女',
		'height' => '166cm'
	);
	//echo $student['name'];
	foreach ($student as $key => $item) {
		echo $key.' : '.$item.'<br />';
	}

	?>