<?php
	//目录操作
	//1. opendir()  打开目录句柄
	$url = './files/';
	$dir = opendir($url);
	// var_dump($dir); //resource(3, stream)

	// 2. is_dir(); 判断给定文件名是否是一个目录
	// 3. readdir(handle) 从目录句柄中读取条目
	// var_dump(readdir($dir));

	// 查询目录内容及其文件类型
	if(is_dir($url)){
		if($dh = opendir($url)){
			while (false != ($file = readdir($dh))){
				echo 'filename: '.$file.'<br />';
				echo 'filetype: '. filetype($url.$file).'<br />';
				echo 'filesize: '.filesize($url.$file).'<br />';
                $atime = fileatime($url.$file);
                echo date("Y-m-d- H:i:s",$atime).'<br />';
                $filename = $file;
                $filetime = date("Y-m-d- H:i:s",$atime);
                $filesize = filesize($url.$file);
                $filetype = filetype($url.$file);
                $arr = array(
                    'filename' => $filename,
                    'filetime' => $filetime,
                    'filesize' => $filesize,
                    'filetype' => $filetype
                );
                var_dump($arr);
			}
		}
	}

//	// 4. scandir(directory) 列出指定路径中的文件和目录
//	$dir_info = scandir('./files');
//	var_dump($dir_info);

	/*  5. mkdir(dir) 创建目录
		mkdir(目录名,权限,是否嵌套创建)
	*/
//	if(!is_dir('./files/test')){
//		mkdir('./files/test',0777);
//	}
//	if(!is_dir('./files/test1/test2')){
//		mkdir('./files/test1/test2',0777,true);
//	}

//	// 6. rmdir(dirname) 删除目录
//	if(!is_dir('hahaha')){
//		mkdir('hahaha');
//	}else{
//		rmdir('hahaha');
//	}


	// 7. basename()  返回路径中的文件名部分
	$url1 = './files/file1';
	$url2 = './files/test1/';
	echo '文件名是：'. basename($url1,'.txt').'<br />';
	echo '文件名是：'. basename($url1).PHP_EOL.'<br />';
	echo '目录是：'. basename($url2).PHP_EOL.'<br />';

	// 8. dirname() 返回路径中的目录部份;
	echo '目录是：'. dirname($url1).'<br />';  // . 当前目录

	// 9. pathinfo() 返回文件路径的信息
	$arr = pathinfo($url1);
	var_dump($arr);
