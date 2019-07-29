<?php
    header('Content-Type:text/html;charset=utf-8');
    // 1.
    function sum($a){
        if($a>1){
            $count=sum($a-1)+$a;   //从大往小加
        }else{
            $count=1;
        }
        return $count;
    }
    echo '1-100的和为：'.sum(100);
    echo '<br />';


    // 2.
    function zdz($x,$y,$z){
        if($x>$y && $x>$z){
            echo '最大值为：'.$x;
        }elseif ($y>$x && $y>$z){
            echo '最大值为：'.$y;
        }else{
            echo '最大值为：'.$z;
        }
    }
    zdz(87,23,53);
    echo '<br />';


    // 3.
    function f($n){
        if ($n <= 0){
            return 1;
        }elseif ($n ==1){
            return 1;
        }else{
            return f($n-1) + f($n-2);   //当前数字
        }
    }
    for($i = 0; $i < 10; $i++){
        echo f($i).' ';
    }

?>