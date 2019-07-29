<?php
	/**
		算术运算符，用于完成各种算术运算

		+	加法运算			    $a + $b
	    -	减法运算			    $a - $b
	    * 	乘法运算			    $a * $b
		/	除法运算			    $a / $b
		%	取模运算（求余数)		$a % $b
	 */
	$a = 10;
	$b = 3;
	echo $a + $b.'<br />';
	echo $a - $b.'<br />';
	echo $a * $b.'<br />';
	echo $a / $b.'<br />';
	echo $a % $b.'<br />';



	/*
		2.赋值运算符

		赋值运算符，将一个数据值赋给一个变量;
		组合赋值运算符，在赋值之前会完成某个运算;

		$a = 5	赋值
		$a += 5		加法赋值  		$a = $a + 5
		$a -= 5		减法赋值		$a = $a – 5
		$a *= 5		乘法赋值		$a = $a * 5
		$a /= 5		除法赋值		$a = $a / 5
		$a %= 5     求余赋值        $a = $a % 5
		$a .= 5		拼接赋值		$a = $a.5

	 */
	$a = 21;
	$b = 5;
	$a %= 5; //求余赋值  $a = $a % 5;
	echo $a.'<br />';
	//echo $a."\n";

	$c = 23;
	$c .= 5; // 拼接赋值 $c = $c . 5
	echo $c.'<br />';


	/*
	    递增(++)和递减(--)运算符

		递增和递减运算符将变量的当前值加1或减1，可以使代码更简洁;
		++$i		先加	$i的值加1，然后再返回$i的值;
		$i++		后加	先返回$i的值，然后再将$i的值加1;
		--$i		先减	$i的值减1，然后再返回$i的值;
		$i--		后减	先返回$i的值，然后再将$i的值减1;
	 */
	$d = 12;
	echo $d++.'<br />';  // 12
	echo $d.'<br />';    // 13

	$e = 14;
	echo ++$e.'<br />'; // 15
	echo $e.'<br />';   // 15

	/*
	 * 逻辑运算符

		利用逻辑运算符可以根据多个变量的值进行判断，
		这使得控制程序的流程成为可能，逻辑操作符常用于控制结构中，
		如if条件和while及for循环;

		&&，AND	    逻辑与
		||，OR		逻辑或
		!,  NOT		逻辑非
	 */

	$a = 1;
	echo $a + (1||0).'<br />'; // 2 bool值强制转化为number，并相加
	echo $a + (0 && 1).'<br />'; //1

	/*
	    比较运算符
		比较运算符，返回一个布尔值 TRUE 或 FALSE

		>	    大于
		<	    小于
		>=	    大于或等于
		<=	    小于或等于

		!=	    不等于
		<>	    不等于

		==	    等于
		===	    全等于  （两个比较的内容里，类型也要一样）
		!== 	全不等
	 */


	/*
	    三元运算符
		语法：
		expression1 ? expression2 : expression3
		表达式1 ? 表达式2 : 表达式3

		说明：如果表达式1为真，执行表达式2，否则执行表达式3

	 */
	$a = 29;
	$b = 38;
	echo $a > $b ? '$a > $b' : '$b > $a'.'<br />';


	$sex = 1;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<input type="radio" value="<?php echo $sex; ?>" name="sex" id="male">
<label for="male"><?php if($sex == 1){ echo '男'; }else{ echo '女';} ?></label>

<input type="radio" value="<?php echo $sex; ?>" name="sex" id="female">
<label for="female"><?php echo $sex == 1? '男':'女';?></label>
</body>
</html>
