<?php
//    for ($i=1; $i<=100; $i++){
//        if ($i%3 ==0 && $i%5==0){
//            echo 'threefive <br />';
//        }elseif ($i%5 == 0){
//            echo 'five <br />';
//        }elseif ($i%3 ==0){
//            echo 'three <br />';
//        }else{
//            echo $i.'<br />';
//        }
//    }

    $num = 5;
    $str = 'a15';
    echo $num + $str;

    $str = '100 hello';
	 $num = 200;
//	 echo $num + $str;

$i = 5;
$a = $i++;
echo 'i = '.$i;
echo '<br>';
//echo 'a = '.$a;
echo "a = $a";
ECHO 'aaa';


if (null === false) {
    echo 'true';
} else {
    echo 'false';
}

$var = '0';
if ($var) {
    echo 'true';
} else {
    echo 'false';
}

$var = 1 / 2;
echo $var;

$a = 1;
function Test()
{
    global $a;
    echo "a = $a";
}
Test();

$var = true ? 1 : false ? 2 : 3;
echo $var;

$a = array(
    null => 'a',
    true => 'b',
    false => 'c',
    0 => 'd',
    1 => 'e',
    '' => 'f'
);
echo '<pre>';
foreach ($a as $key => $value){
    echo $key.'=>'.$value.'<br>';
}