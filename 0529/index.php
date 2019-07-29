<?php
	/*
	    一.数组的概念：
		数组可以理解为有序的（键-值)对组成的数据值的集合;
		如果我们把变量理解为单个值的容器，那么数组就是可以包含多个值的容器
		根据索引值的不同数组分为：索引数组和关联数组

		索引数组：索引为整数,如果没有指定索引值则默认为零，依次递增;
		关联数组：索引为字符串的数组;

		如果方括号中没有指定索引，则取当前最大整数索引值，新的键名将是该值 + 1。
		如果当前还没有整数索引，则键名将为0。如果指定的键名已经有值了，该值将被覆盖
	 */
	// 创建数组方式1 $arr = [1,3,3,5];
	$arr = [1,2,4,5,6]; //索引数组
	var_dump($arr);

	// 创建数组方式2 用 array() 函数
	$arr1 = array(
		'name' => '祝蜜',
		'age' => 19,
		'hair' => 'black'
	); // 关联数组
	var_dump($arr1);

	// 直接对数组变量赋值
	$arr[4] = 8; //修改
	print_r($arr);
	$arr[5] = 12; // 添加元素
	print_r($arr);
	$arr[] = 33; // 添加元素
	print_r($arr);
	$arr[9] = 33; // 添加元素
	print_r($arr);
	$arr[] = 23; // 添加元素
	print_r($arr);

	/*
	    使用函数创建数组
		range() 建立一个包含指定范围单元的数组
	*/
	$num_arr = range(1,50);
	print_r($num_arr);
	$str_arr = range('a','z');
	print_r($str_arr);

	/*
		删除 数组或数组元素
		unset 释放给定的变量
	*/
	$fruits = ['apple','banana','pear','peach','cheery','orange','watermelon','lemon'];
	unset($fruits[7]); //删除元素
	var_dump($fruits);

	//注意：删除数组元素不会重建索引
	unset($fruits[2]);
	var_dump($fruits);

	// unset($fruits);
	// var_dump($fruits);  undefined variable fruits

	// 常用数组函数
	// 1. 打印 print_r()   var_dump()
	$date = getdate();
	print_r($date);

	// 2.count() 取得数组大小
	// 例： count($week);
	echo count($date);

	// 3.in_array() 检查数组中是否包含某个值
	var_dump(in_array('lemon',$fruits)); // 第一个参数:元素名 第二个参数:数组名


	//	遍历数组
	// for循环只能遍历索引数组
	$arr2 = array(2,4,6,8,10);
	for($i=0;$i<count($arr2);$i++){
		echo $arr2[$i].'<br />';
	}
	// foreach 既可以遍历索引数组，又可以遍历关联数组
	$fruits1 = ['a'=>'apple','b'=>'banana','c'=>'peach'];
	foreach($fruits1 as $key => $value){
		echo $key.' -----> '.$value.'<br />';
	}
	// var_dump($fruits1);

	// 二维数组
	$members = array(
		array(
			'name' => '祝蜜',
			'age' => 19,
			'hair' => 'black'
		),
		array(
			'name' => '裕兴',
			'age' => 40,
			'hair' => 'black',
			'gender' => 'man',
			'height' => 180,
			/*'girlfiends'=>array( //三维数组
				'num1' => 'lili',
				'num2' => 'cuihua'
			)*/
		),
		array(
			'name' => '新鹏',
			'age' => 20,
			'hair' => 'brown',
			'gender' => 'man',
			'height' => 180
		),
	);
	// var_dump($members);
	// 遍历二维数组
	foreach ($members as $member) {
		// var_dump($member);
		foreach ($member as $key => $item) {
			echo $key .' --> '.$item.'<br />';
		}
	}
	echo '<br/>-------------------<br />';
	/**
		key()           返回数组当前指针元素的索引
		current()		返回数组当前指针元素的值
		next()		    将数组指针向前移动一位，并返回当前指针元素的值;
	                    如果超出了数组元素的末尾，则返回FALSE
		prev()		    将数组指针往回移动一位, 并返回当前指针元素的值;
						如果指针本来就位于数组的第一个位置则返回FALSE;
		reset() 		将指针指向第一个元素，并返回第一个元素的值
	    end()       	将数组指针指向最后一个元素, 并返回最后一个元素的值;
		each()      	返回数组当前指针元素的键和值,并将指针推进一个位置;
						如果内部指针越过了数组的末端，则 each() 返回 FALSE。
		list() 	        把数组中的值赋给一些变量
	 */
	$array  = array(
		'fruit1'  =>  'apple' ,
		'fruit2'  =>  'orange' ,
		'fruit3'  =>  'grape' ,
		'fruit4'  =>  'apple' ,
		'fruit5'  =>  'apple'
	);
	// echo current($array); // apple
	// echo current($array); // apple
	while ($fruit_name = current($array)){  //获取指针指向元素的值
		if('apple' == $fruit_name){
			echo key($array).'<br />'; // 输出指针指向元素的键
		}
		next($array); //指针向下移一位
	}
	echo end($array).' ----- '. key($array). '<br />'; //最后一个 apple fruit5
	echo reset($array).' ----- '. key($array). '<br />'; //第一个 apple fruit1

	// each()
	$array1  = array(
		'fruit1'  =>  'apple' ,
		'fruit2'  =>  'orange' ,
		'fruit3'  =>  'grape' ,
	);
	var_dump(each($array1));
	var_dump(each($array1));
	var_dump(each($array1));

	$array2  = array('apple' ,'orange' , 'grape' ,);
	list($a,$b,$c) = $array2;
	echo $a.'<br />';
	echo $b.'<br />';
	echo $c.'<br />';


	// each() list() 遍历数组
	$array3  = array(
		'fruit1'  =>  'apple' ,
		'fruit2'  =>  'orange' ,
		'fruit3'  =>  'grape' ,
	);
	reset($array3);
	while(list($key,$val) = each($array3)){
		echo $key.' ----> '.$val.'<br />';
	}

	$fruits = array("lemon", "orange", "banana", "apple","cheery");
	var_dump($fruits);
	sort($fruits); //值升序
	var_dump($fruits);
	rsort($fruits); //值降序
	var_dump($fruits);

	$fruits = array(1=>"lemon",3 => "orange",4=> "banana",0=> "apple",2 =>"cheery");
	ksort($fruits); //键值升序
	var_dump($fruits);
	krsort($fruits); //键值降序
	var_dump($fruits);

	//	asrot() 对数组进行排序并保持索引关系
	$fruits = array("lemon", "orange", "banana", "apple","cheery");
	asort($fruits); //保持索引关系的 升序
	var_dump($fruits);
	arsort($fruits); //保持索引关系的 降序
	var_dump($fruits);

	echo '<pre>';
	// 字符串与数组转换
	// 1. 将字符串转换为数组 explode()
	$str = "a b c d e f g";
	$str_arr1 = explode(' ',$str); //第一个参数：分隔符 第二个参数：字符串变量
	var_dump($str_arr1);
	// 2. 将数组元素连接成字符串 implode()  第一个参数：分隔符 第二个参数：字符串变量
	$hobby = ['唱','跳','rap','篮球','music','鸡你太美'];
	$arr_str1 = implode('🐔',$hobby);
	var_dump($arr_str1);