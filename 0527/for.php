<?php
	//	for循环
	/*for(起始值;条件;步进值){
		//循环体语句
	}*/
//	for($i=5;$i>=1;$i--){
//		for($k=4;$k>(2*$i-1)/2;$k--){
//			echo '-';
//		}
//		for($j=2*$i-1;$j>=1;$j--){
//			echo '*';
//		}
//		echo '<br />';
//	}


//    $c = 1;
//    for ($i=1; $i<=4; $i++){
//        $c *= $i;
//    }
//    echo $c;

$test = 'aaaaaa';
$abc = &$test;
unset($test);
echo $abc;