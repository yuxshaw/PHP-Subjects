<?php

//    $a = 1;
//    $b = 2;
//    echo $a,$b;
//    print $a;

//    $week = array('Monday', 'Tuesday', 'c'=>'Wednesday');
//    var_dump($week);
//echo strstr("Hello world!","w");
//$first = "This course is very easy!";
//$second = explode(" ", $first);
//$first = implode(",", $second);
//echo $first;
//
//$str = "hello world";
//echo strrev($str);
//$str = "test@163.com";
//$email = str_replace(" ", "(at)", $str);
//echo $email;

    $email = "abc@test.com.cn";
    $str = strstr($email,'@');
//    echo $str;
    $info = explode('.',$str);
    print_r($info);

?>