<?php
	//break 跳出当前循环，后面都不执行
	$sum = 0;
	for($i=0;$i<=10;$i++){
		if($i == 6){
			break;
		}
		$sum += $i;
	}
	echo $sum.'<br />';

	//continue 跳出当次循环
	$sum1 = 0;
	for($i=0;$i<=10;$i++){
		if($i == 6){
			continue;
		}
		$sum1 += $i;
	}
	echo $sum1.'<br />';

	//	强制类型转换
	var_dump((bool)'0.0');		// true
	var_dump((bool)'0');		// false
	var_dump((bool)'00');		// true
	var_dump((bool)'false');	// true
	var_dump((bool)false);	    // false
	var_dump((bool)null);	    // false

	var_dump((int)'123');       //(int)123