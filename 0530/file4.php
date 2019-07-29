<?php
	//设置时区
	date_default_timezone_set('PRC');

	//1. filesize(filename) 取得文件的大小，以字节为单位
	$size = filesize("msg.txt");
	echo $size.'<br />';

	/* 2. filectime(filename)
		取得文件的创建时间，以unix时间戳方式返回
	*/
	$time = filectime("msg.txt");
	echo date("Y-m-d H:i:s",$time);
	echo '<br />';

	// 3. fileatime() 文件最后改变时间
	$atime = fileatime("msg.txt");
	echo date("Y年m月d日 H:i:s",$atime);
	echo '<br />';

	// 4. filemtime() 文件最后修改时间
	$mtime = filemtime("msg.txt");
	echo date("Y年m月d日 H:i:s",$mtime);
	echo '<br />';
	// fileatime 和 filemtime在 Linux 或 Unix 下可以看出区别

	// 5. file_exists(filename)判断文件是否存在，返回true或false
	var_dump(file_exists('msg.txt')); // true

	//6. is_readable(filename) 判断文件是否可读，如果文件存在并且可读，则返回true;
	var_dump(is_readable('msg.txt')); // true

	//7. is_writable(filename) 判断文件是否可写，如果文件存在并且可写，则返回true;
	var_dump(is_writable('msg.txt'));