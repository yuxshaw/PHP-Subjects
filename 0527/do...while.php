<?php
	//	do...while  先执行do语句，再判断
	$sum = 0;
	$i = 0;
	do{
		$sum += $i;
		$i++;
	}while($i < 20);
	echo $sum;