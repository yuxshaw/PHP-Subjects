<?php
// header();
    // 变量
    // $_a = 1;
    // $a = 2;
    // $a1 = 3;

    // echo $_a, $a, $a1;
    // echo $_a;
    // echo $a;
    // echo $a1;

    // $a = 'hello';
    // $b = &$a;   //将a与b绑定

    // $b = 'world';
    // echo $a;    //输出 world
    // echo $b;    //输出 world

    // unset($b);  //释放变量
    // // echo $b;    //报错 b未定义
    // echo $a;    //输出 hello

    // $b = 'world';
    // unset($a);
    // // echo $a;    //报错  a未定义
    // echo $b;    //输出 world


    // 1.变量的变量
     $a = 'hello';
     $$a = 'world';

     echo $a;    //hello
     echo $$a;   //world
     echo $hello;    //world
     echo ${$a};     //world   这里的{花括号}是变量的边界符


    // 2.php的超全局变量
    //获取服务器信息
    echo '<pre>';
    print_r($_SERVER);
    echo '</pre>';

    // 在页面上输出的方式：
//         1. echo 只能输出单一类型的数据
//         2. print_r 专门输出数组类型的数据
//         3. var_dump 打印数据的详细信息

    //键值对    所有的数据都是键值对的概念  键=值

    //所有全局变量数组
    

    //常量  不可以改变的量  常量名 一般大写
    //定义常量 define('名称'，复制);
    define('NAME',122);      //自定义常量
    echo NAME;

    // 内置常量
    echo PHP_OS;    //获取服务器的系统
    echo PHP_VERSION;   //获取PHP的版本

    //魔术常量
    echo __LINE__;  //获取代码的行号
    echo __FILE__;  //获取文件的完整路径
    echo __DIR__;   //获取文件的上一级目录


    function demo(){
        return '函数的名称是：'. __FUNCTION__;    //获取函数名称
    }
    echo demo();

    class test{
        public function a(){
            echo __CLASS__;     //获取class类名
            echo '<br />';
            echo __METHOD__;
        }
    }
    $t = new test;
    $t->a();


    // php的数据类型     有8种
    // 常用类型    基本类型
    //     字符型      
    //         如何定义字符串"双引号"  '单引号'    <<<定界符
        $str = 'a$bc';       //单引号不解析php语法
        $str1 = "d{$str}d";      //双引号会解析php语法
        $str1 = "d\$strd";      //PHP转义符   \     
                                    //把php里面有意义的通过转义符变成没有意义的     ''   ""  $  \  .
                                    //把php里面没有意义的通过转义符变成有意义的
        //单引号的例子
        $str = 'ab\'c';
    //定界符定义字符串  <<<A  A
        $str = <<<A
            fsdfghjk{}""''hghjkjhghj
A;
        $str = "123";
        var_dump($str);
        // echo $str;
    

    //     布尔型
    //     整型
    //     浮点型

    // 符合类型
    //     数组
    //     对象

    // 特殊类型
    //     null
    //     资源
    




    // $num = 6 + false + null + "24linux" + true;  //6+ + +24+1
	// echo $num;


?>