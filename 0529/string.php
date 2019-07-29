<?php
	// 一、输出
	/*
	 *  echo 是一个语法 ，不是函数
		echo 没有返回值;
		echo 可以输出多个值，使用逗号分隔;
	 */
	$a = 1;
	$b = 2;
	echo $a,$b;


	//print ( string arg )  实际上不是一个函数（它是一个语言结构）
	print $a;

	echo '<br />------------<br />';
	/*  printf
	    %b二进制输出				  // brianry
		%d整数输出				      // decimal
		%f浮点数输出				  // float
		%s字符串输出  				  // string
	 */
	printf("%b ,",2);     // 10 二进制         binary
	printf("%d ,",12.5);  // 12 十进制整数     decimal
	printf("%.2f ,",12.5);  // 12.50   浮点数  float
	printf("%s ",12.5);  // 字符串类型        string

	//	sprintf() 返回格式化后的字符串
	$age = 18;
	$name = '小李';
	$str = "My name is %s , I'm $age years old.";
	echo sprintf($str,$name,$age);

	echo '<br />-------------<br />';
	// 二、查找与替换
	// 1. strpos 查找字符串首次出现的位置 找到返回位置，找不到返回 false
	$sayhi = 'Hello world!';
	$res = strpos($sayhi,'o');
	echo $res.'<br />'; //4

	// 2.stripos()
	// stripos()与strpos()功能相同，只是查找时不区别大小写;
	$str = 'hello Tom!';
	$res1 = stripos($str,'t');
	echo $res1.'<br />'; // 6

	// 3. str_replace() 子字符串替换
	// str_ireplace()
	// str_ireplace()与str_replace()功能相同，只是不区分大小写;
	$str1 = "Hello Jack , welcome to Shenzhen";
	$str2 = str_replace('Jack','Ergo',$str1);
	echo $str2.'<br />';
	$str3 = str_replace('o','O',$str1,$count);
	echo $str3.'<br />';
	echo $count.'<br />';

	/*  4.截取字符串 substr()
		第一个参数   字符串
		第二个参数   开始截取的位置
		第三个参数   截取的长度(可选参数)
	 */
	echo substr('Hello world,welcome!',2);
	echo '<br />';
	echo substr('Hello world,welcome!',2,5);
	echo '<br />';

	/*5. strstr() 函数搜索一个字符串在另一个字符串中的第一次出现
		返回 haystack 字符串从 needle 第一次出现的位置开始到 haystack 结尾的字符串
		第一个参数   字符串
		第二个参数   匹配的字符串
		第三个参数   可选，如果为true，返回匹配到字符串的前面部分
	*/
	echo strstr('cw@foxmail.com','@'); //@foxmail.com
	echo strstr('cw@foxmail.com','@',true);// cw
	echo '<br />';

	// 6. stristr()
	// stristr()与strstr()功能相同，只是不区分大小写
	echo stristr('Hello World','w'); //World
	echo '<br />';

	//  三、删除字符串
	/* 	1.ltrim()
		string ltrim ( string str [, string charlist] )
		ltrim 函数删除字符串左侧空格或其他预定义字符;

		如果未设置charlist参数，则删除以下字符：
		"\0"	 NULL
		"\t"     制表符
		"\n"     换行
		"\x0B"   垂直制表符
		"\r"     回车
		" "      空格
	*/
	$str = "    hello world!    ";
	echo $str;
	echo ltrim($str);
	//	echo rtrim($str);
	// 2. rtrim() 删除字符串右侧空格或其他预定义字符;
	echo rtrim($str,'!    ');
	echo 123;

	// 3.strip_tags() 删除字符串中HTML XML PHP 标签
	//string strip_tags ( string str [, string allowable_tags] )
	//可选参数 allowable_tags 指定要保留的标签;
	$addr = "网址: <a href=''>百度</a><span>www.baidu.com</span>";
	echo strip_tags($addr,'<span>');

	echo '<br >';
	$str = "<p> 这是一个段落 </p>";
	//echo $str;
	echo htmlspecialchars($str);
	$str = "&amp;";
	//	echo $str;
	echo htmlspecialchars($str);
