<?php
    header('Content-Type:text/html;charset=utf-8');     //设置编码
    /*
        1.php中一共有7中运算符，分别是
            算术运算符、赋值运算符、字符串运算符、
            递增（++）和递减（--）运算符、逻辑运算符、比较运算符、三元运算符

        2.B

        3.  $a < $c ==> 3<4 ;
            $d == true;

     */


    // 3.
    function chengfabiao($a){
        echo '<table border="1" cellspacing="0">';
        for ($i=1;$i<=$a;$i++){
            echo '<tr>';
            for ($j=1; $j<=$a; $j++){
                echo '<td>';
                if ($j<=$i){
                    echo $j.'X'.$i.'='.$i*$j;
                }
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    chengfabiao(9);




    // 4.
        function sxhs($min,$max){
            echo $min.'-'.$max.'里面的水仙花数：';
            for ($n = $min; $n <= $max; $n++) {
//        $n = 537;
                $a = floor($n / 100);     //百位数字
                $b = floor(($n / 10) % 10); //十位数字
                $c = floor($n % 10);      //个位数字
//        echo $a,$b,$c;
                if ($n == (pow($a, 3) + pow($b, 3) + pow($c, 3))) {
                    echo $n . '&nbsp;';
                }
            }
        }
        sxhs(1,999);
        echo '<br/>';



    // 5.
//    for ($i=1; $i<=6; $i++){
//        for ($j=1; $j<=$i; $j++){
//            echo '*';
//        }
//        echo '<br/>';
//    }
//    for ($m=5; $m>=1; $m--){
//        for ($k=5; $k>=$m; $k--){
//            echo '&nbsp;';
//        }
//        for ($n=$m; $n>=1; $n--){
//            echo '*';
//        }
//        echo '<br/>';
//    }


    function lx($e){
        for($i=1;$i<=$e;$i++){
            for($k=$e-1;$k>(2*$i-1)/2;$k--){
                echo '&nbsp;';
            }
            for($j=1;$j<=2*$i-1;$j++){
                echo '*';
            }
            echo '<br />';
        }
        for($i=$e-1;$i>=1;$i--){
            for($k=$e-1;$k>(2*$i-1)/2;$k--){
                echo '&nbsp;';
            }
            for($j=2*$i-1;$j>=1;$j--){
                echo '*';
            }
            echo '<br />';
        }
    }
    lx(9);




    // 6.
    function paixu($arr){
//    asort($arr);
        foreach ($arr as $key => $value) {
            echo $key . ' ---> ' . $value . '<br />';
        }
        //排序
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = $i + 1; $j < count($arr); $j++) {
                if ($arr[$i] > $arr[$j]) {
                    $k = $arr[$i]; // 这里临时变量，存贮$i的值
                    $arr[$i] = $arr[$j]; // 第一次更换位置
                    $arr[$j] = $k; // 完成位置互换
                }
            }
        }
        echo '<br/>排序结果：<br/>';
        foreach ($arr as $key => $value) {
            echo $key . ' ---> ' . $value . '<br />';
        }
    }
    $arr1 = array(48,3,12,5,31,34,5,62,56,4,25,23,64);
    paixu($arr1);
?>