<?php
	/*  1. fopen 打开文件或者 URL
		fopen()  将 filename 指定的名字资源绑定到一个流上
	*/
	$fh = fopen("test.txt","r");
	var_dump($fh); // resource(3) of type (stream)

	/*  2. 读取
		filesize() 获取文件长度，返回字节数 参数为文件路径
		读取 fread(文件流,读取的字节数);
	*/
	 $filesize = filesize('./test.txt');
	// echo $filesize;

	$str = fread($fh,$filesize);
	echo $str;

	// 3. fclose() 关闭一个已打开的文件指针     将 handle 指向的文件关闭。
	 fclose($fh);
	//var_dump($fh);