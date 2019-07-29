<?php
	// 读取
	$fh = fopen("test.txt","r");

	/*
	    1. fread()  读取 fread(文件流,读取的字节数);
		string fread ( int handle, int length )
	*/
	//$str = fread($fh,filesize('./test.txt'));
	//echo $str.'<br />';

	// 2. fgets() 从文件指针中读取一行
	/*
		$str1 = fgets($fh);
		echo $str1.'<br />'; // test
	*/
	/*
		$arr = array();
		while (false !=($char = fgets($fh))){
			$arr[] =$char;
		}
		var_dump($arr);
	*/

	//	feof — 测试文件指针是否到了文件结束的位置
	/*$new_str = '';
	while(!feof($fh)){
		$str = fgets($fh);
		// $str = iconv('gbk','utf-8',$str); //转码
		echo $str.'<br />';
		//$new_str .= $str;
	}*/


	// 3. fgetc()  从文件指针中读取字符 读取之后指针后移一位
	/*
	    $str2 = fgetc($fh);
		echo $str2.'<br />'; // t
	*/
	/*while(false != ($char = fgetc($fh))){
		echo $char;
	}
	echo '<br />---------------<br />';*/


	/*  4. file(filename,flag)  把整个文件读入一个数组中
		filename : 文件名称

		flags:
		FILE_USE_INCLUDE_PATH  在 include_path 中查找文件。
		FILE_IGNORE_NEW_LINES  在数组每个元素的末尾不要添加换行符
		FILE_SKIP_EMPTY_LINES  跳过空行
	*/
	$arr = file("./test.txt",FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
	var_dump($arr);


	// 5. file_get_contents()函数将文件内容读到字符串中;
	$str2 = file_get_contents('./test.txt');
	echo $str2.'<br />';