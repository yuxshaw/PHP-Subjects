<?php
	//变量
	$a = 12;
	$b = $a;
	$b = 13;
	echo 'a = '.$a.'<br />';
	echo 'b = '.$b.'<br />';

	//	取地址
	$c = &$a; // $a和$c取同一个地址
	$c = 18;
	echo 'a = '.$a.'<br />'; // 18
	echo 'c = '.$c.'<br />'; // 18

	unset($a);
	// echo 'a = '.$a.'<br />'; // undefined
	echo 'c = '.$c.'<br />'; // 18