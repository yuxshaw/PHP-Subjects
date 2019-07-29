<?php
        header('Content-Type:text/html;charset=utf-8');     //设置编码

    /*
        函数概念：

        函数是用来完成某种特定任务的可重用代码块;
	    函数可以使程序更具模块化,拥有良好的结构;
	    函数定义后在程序中可以重复调用;
	    函数分为内置函数和自定义函数;
     */

        //自定义函数
        function sayHi(){
            echo 'hello world! <br/>';
        }
        sayHi();
        sayhi();    //PHP函数不区分大小写

         function add($a,$b=0){  //$a $b形式参数     $b=0给默认参数
             echo $a + $b.'<br/>';
         }
         add(3,4);   //3,4 称为实参
         add(4);
         add(2,4,6); //第三个参数没用



        function change(&$a,&$b){   //& 取地址符
            $a = $a - 1;
            $b = $b - 1;
            echo $a.','.$b.'<br/>';
        }
        $c = 10;
        $d = 12;
        change($c,$d);
        echo $c.','.$d.'<br/>';     //9,11


        function test($a,$b,$c=''){     //$c为可选参数
            echo $a+$b+$c.'<br/>';
        }
        test(3,6);  //9
        test(2,4,5);    //11

        $fn1 = function ($str){
            echo $str.'<br />';
        };  //匿名函数结尾必须有 ; 分号
        // var_dump($fn1);
        /*
            闭包
             object(Closure)#1 (1) {
                ["parameter"]=> array(1) {
                    ["$str"]=> string(10) ""
                }
             }
         * */
        //调用
        $fn1('hello world!');


        //判断函数是否存在
        var_dump(function_exists('sayHi'));     //true
        echo '<br/>';

        if(function_exists('add')){
            add(1,4);
        }else{
            function add($a,$b){
                echo $a + $b.'<br/>';
            }
            add(3,5);
        }


        // 创建匿名函数
//        $lan = 'en';
//        if ($lan == 'en'){
//            $fn = create_function('$name','echo "hello".$name');
//        }elseif ($lan == 'ch'){
//            $fn = create_function('$name','echo "你好".$name');
//        }
//        $fn('小赵');

        function jianfa($a,$b){
            return $a-$b;
        }
        $c = jianfa(5,3);
        echo $c.'<br/>';

        //不确定参数函数
        function fun(){
            $a = func_num_args();   //返回参数的个数
            echo $a.'<br />';
            $arr = func_get_args();     //返回一个包含函数参数列表的数组
//            var_dump($arr);
            $sum = 0;
            foreach ($arr as $item){
                $sum += $item;
            }
            return $sum / $a;
        }
        fun(1,2,3,4,5,6,7,8);


        function repayment($banlance,$payment){
            static $count = 1;  //静态变量，计收账次数
            $new_ban = $banlance - $payment;    //剩余金额
            echo '剩余需还：'.$new_ban.'，已还'.$count.'次 <br/>';
            if ($new_ban > 0){
                $count++;
                repayment($new_ban,$payment);
            }else{
                echo '账单已还清！<br/>';
            }
        }
        $banlance = 200000;
        $payment = 10000;
        repayment($banlance,$payment);

        function test2(){
            global $str2;
            $str2 = 'Hello world! <br/>';
            echo $str2;
        }
        test2();
        echo $str2;


//        var_dump($GLOBALS);     //查看所有的全局变量

        function keep_val(){

        }


?>
