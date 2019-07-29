<?php
	//写入文件
	/*
	    1. fwrite — 写入文件
		fwrite()  把 string 的内容写入文件指针 handle 处
	 */

	/*	$file = fopen("fw1.txt","w+");
		$names = "裕兴\n荣露\n";
		fwrite($file,$names);
		fclose($file);*/

	/*
		2.file_put_contents(filename,str,flags)将一个字符串写入文件
		和依次调用 fopen() ， fwrite()  以及 fclose()  功能一样

		flags:
		FILE_USE_INCLUDE_PATH
			在 include 目录里搜索 filename
		FILE_APPEND
			如果文件 filename 已经存在，追加数据而不是覆盖
	 */
	$name1 = "治强\n";
	$name2 = "倪强\n";
	file_put_contents("./fw1.txt",$name1,FILE_APPEND);

