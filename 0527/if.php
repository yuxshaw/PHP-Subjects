<?php
	header('Content-Type:text/html;charset=utf-8'); // 设置编码
	//	if判断
	/*if(exp1){
		//语句1
	}elseif(exp2){
		//语句2
	}*/
	$score = 85;

	if($score >= 90){
		echo '优秀<br />';
	}elseif ($score>=80){
		echo '良好<br />';
	}elseif ($score >= 60){
		echo '合格<br />';
	}else{
		echo '不及格<br />';
	}

	$a = 1;
	$b = 2;
	if($a>$b):
		echo 'a > b <br />';
	else:
		echo 'b > a <br />';
	endif;