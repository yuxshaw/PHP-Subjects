<?php
	header('Content-Type:text/html;charset=utf-8');
	// 1. copy(source,des)  复制
	// copy('rename1.txt','reanme2.txt');
	// copy('rename1.txt','./files/reanme1.txt');

	//2. rename(oldname,newname) 重命名
	// rename('reanme2.txt','laowang.txt');

	// 3. unlink(filename) 删除
	// 4. file_exists(filename); 判断文件是否存在
	if(file_exists('laowang.txt')){
		$res = unlink('laowang.txt');
		if($res){
			echo "<script>alert('删除成功!')</script>";
		}
	}