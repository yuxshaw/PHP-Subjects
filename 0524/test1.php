<?php
    $str = "world";
    // echo "hello $str"; 

    $a = "hello";
    // echo "{$a}world";
    
    $a = "hello";
    $b = &$a;
    // echo $b;
    unset($b);
    // echo $a;

//     $str = <<<A
// 	“在PHP定界符中的任何特殊字符 都不需要转义
//     PHP定界符中的PHP变量会被正常的用其值来替换
//     使用定界符要注意：
//     结束标识符所在的行不能包含任何其它字符，这意味着该标识符不能被缩进，在分号之前
//     之后都不能有任何空格或制表符;”
// A;
//     echo $str;

    // echo gettype(1 > 2);
    // echo gettype(array(1, 2, 3));

    // var_dump( is_string("I am what data type?") );
    // var_dump( is_int(123456) );
    // var_dump( is_float(3.1454556) );
    // var_dump( is_bool(1 > 2) );
    // var_dump( is_array(array(1, 2, 3) ) );
    // echo gettype(3.1454556);

    // $a = "hello";
    // $$a = "world";
    // $hello="world";
    // echo $a,$hello;

    $str1 = 'hello \n world';
    $str2 = "hello \n world";
    echo $str2;

?>