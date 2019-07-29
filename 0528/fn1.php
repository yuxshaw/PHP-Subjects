<?php
	/*
	 *  函数概念：

		函数是用来完成某种特定任务的可重用代码块;
		函数可以使程序更具模块化,拥有良好的结构;
		函数定义后在程序中可以重复调用;
		函数分为内置函数和自定义函数
	 */
	/*	自定义函数
		1. 函数用function关键字来声明
		2. 函数名称是由字母或下划线开始,中间可以包含数字
		3. 函数名不区分大小写,不过在调用函数的时候，通常使用其在定义时相同的形式
		4. php不支持函数重载, 所以自定义函数不能和内置函数重名
		5. 不能在一个文件中自定义同名的函数
		6. 参数出现在括号中,如果有多个参数用逗号分隔
	*/
	function sayHi(){
		echo 'hello world!<br />';
	}
	// 调用函数
	sayHi();
	sayhi(); //php函数不区分大小写


	/*  值传递(传值)
		函数内对参数值的改变不会影响函数外部的值;
	*/

	function add($a=0,$b=0){
		// $a $b形式参数   $b=0给默认参数
		echo $a+$b.'<br />';
	}
	add(1,3); // 1,3 称为实参
	add(4);
	add(1,5,5); // 第三个参数没有用

	/*  引用传递(传址)
		有些情况下，可能希望在函数体内对参数的修改在函数体外也能反映;
		使用引用传递参数要在参数前加上&符号;
		变量本身传入，传入后的变量与原变量建立联系;
		函数体内变量的变化，会影响到原变量本身;
	*/
	function change(&$a,&$b){
		$a = $a-1;
		$b = $b-1;
		echo $a.'-----'.$b.'<br />';
	}
	$c = 10;
	$d = 12;
	change($c,$d);
	echo $c.'-----'.$d.'<br />';  // 9-----11


	/*
	    可选参数
		可以指定某个参数为可选参数，这些参数需要放在参数列表的末尾，需且要指定其默认值为空;
		如果指定了多个可选参数，可以选择性地传递某些参数;
	*/
	function test($a,$b,$c='',$d=null){//$c为可选参数
		echo $a+$b+$c.'<br />';
	}
	test(2,4); //6
	test(2,5,7); // 14

	//	匿名函数
	$fn1 = function($str){
		echo $str.'<br />';
	}; // 匿名函数结尾必须有分号

	// var_dump($fn1);
	/* 闭包
	  object(Closure)[1]
	  public 'parameter' =>
	    array (size=1)
	      '$str' => string '<required>' (length=10)
	*/
	//调用
	$fn1('hello！');


	// 判断函数是否存在  function_exists('fn_name'); 注意引号
	var_dump(function_exists('sayHi')); // true
	echo '<br />';

	if(function_exists('add')){
		add(1,4);
	}else{
		function add($a,$b){
			// statement
			echo $a+$b.'<br />';
		}
		add(3,5);
	}

	// 创建匿名函数 create_function()
	$lan = 'en';
	if($lan == 'en'){
		$fn = create_function('$name','echo "hello ".$name."<br/>";');
	}elseif($lan == 'ch'){
		$fn = create_function('$name','echo "你好 ".$name."<br/>";');
	}
	$fn('小赵');

	/*
	    从函数返回值
		通常情况下，只依靠函数做某些事情还不够; 需要将函数的执行结果返回给调用者，这时可以使用 return 语句返回结果;
		return 语句变执行后，将使得函数立即结束运行，并且将控制权返回被调用的行;
	*/
	function jianfa($a,$b){
		return $a-$b;
	}
	$c = jianfa(5,2);
	echo $c + 10 .'<br />';


	// 不确定参数函数
	function fun(){
		$a = func_num_args(); //返回参数的个数
		// echo $a;
		$arr = func_get_args(); //返回一个包含函数参数列表的数组
		// var_dump($arr);
		$sum = 0;
		foreach($arr as $item){
			$sum += $item;
		}
		// echo $sum;
		return $sum / $a; // 返回平均数
	}
	echo fun(1,3,5,6,7,2,11);
	echo '<br />-------------------------------------------<br />';


	/*
	    递归函数
		递归函数是一个可以重复调用自身的函数，直到满足某个条件为止;
		递归函数常用来解决一些重复的问题;
		递归应该特别注意条件，防止进入死循环中
	 */
	function repayment($banlance,$payment){
		static $count = 1; // 静态变量，计收账次数
		$new_ban = $banlance - $payment; // 剩余金额
		echo '剩余金额 ：'.$new_ban. ' 还款：'.$count. '次<br />';
		if($new_ban > 0){ //递归出口
			$count++;
			repayment($new_ban,$payment);  //递归
		}else{
			echo '账目已收清.<br />';
		}
	}

	$banlance = 20000; // 收账金额
	$payment = 1000;   // 收款金额
	repayment($banlance,$payment);


	/*
	    由于引入了函数，程序中变量的能见度发生了变化，即变量的作用范围发生了改变;
		变量分为:全局变量，局部变量，静态变量;
	 */

	/*
	    局部变量
		函数体内定义的变量为局部变量，只在函数体内可见;
		局部变量的作用域：从声明它的那条语句开始到函数结束;
	 */
	function test1(){
		$str = 'hello'; // 局部变量
		echo $str.'<br />';
	}
	test1();


	/*
	    全局变量
		函数体外定义的变量为全局变量，与局部变量相反，全局变量可以在函数体外的任何地方访问;
		如果在函数体中需要使用全局变量，使用 global 关键字访问;
		全局变量的作用域：从声明它的那条语句开始到文件末尾;

		PHP中全局变量不能直接在函数内使用
	*/

	$var1 = 123; //全局变量
	function test2(){
		global $str2;  // global 声明的全局变量   不能直接赋值
		$str2 = 'hello 俊浩!';
		echo $str2;
	}
	test2();
	echo $str2; //全局变量，函数结束后没有释放

	// var_dump($GLOBALS); //查看所有的全局变量
	function test3(){
		echo $var1; // undefined variable var1
	}
	// test3(); //PHP中全局变量不能直接在函数内使用

	echo '<br />---------------------------------------<br />';
	/*
	    静态变量
		局部变量在函数退出时会被撤消，与局部变量不同，静态变量在函数退出时不会丢失值，并且再次        调用函数时还能保留这个值;
		在变量名前面加上 static 关键字就可以声明一个静态变量;
	 */
	function keep_val(){
		static $i = 0; //static关键字定义静态变量
		echo $i .'<br />';
		$i++;
	}
	keep_val();
	keep_val();
	keep_val();


	/*
	 *  include() require()
	 *  1. include() 和 require() 都是包含并运行指定的文件
	 *  2. include() 如果出现错误会发出警告，继续执行后面的代码，
	 *     require() 会产生致命错误
	 *  3. include_once 语句在脚本执行期间包含并运行指定文件。
	 *     此行为和 include 语句类似，唯一区别是如果该文件中已经被包含过，则不会再次包含。
	 *  4. require_once 语句和 require  语句完全相同，
	 *     唯一区别是 PHP 会检查该文件是否已经被包含过，如果是则不会再次包含
	 */
	/*include('./functions.php');
	$res = chengfa(4,8);
	echo $res.'<br />';*/

	/*require('./functions.php');
	$res = chengfa(4,8);
	echo '-----'.$res.'-----<br />';*/


	/*include('./functions.php');
	include_once ('./functions.php');
	$res = chengfa(4,8);
	echo '-----'.$res.'-----<br />';*/

	require('./functions.php');
	require_once ('./functions.php');
	$res = chengfa(4,8);
	echo '1-----'.$res.'-----1<br />';