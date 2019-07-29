<?php

    class Employee{
        var $name;
        var $age;
        var $sex;
        var $num;

        //构造函数
        public function __construct($name='',$age=20,$sex='male',$num=1234)
        {
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
            $this->num = $num;
        }

        public function say_name(){
            echo 'My name is ',$this->name,'<br/>';
        }


        /**
         * 析构函数  一般写在类的最后
         * 函数允许再销毁一个类之前执行的一些操作或完成一些功能
         */

        function __destruct()
        {
            // TODO: Implement __destruct() method.
            echo '<br/>我觉得我还能再抢救一下！';
        }


    }

    $epm1 = new Employee;
    echo $epm1->name,'<br/>';
    echo $epm1->age,'<br/>';
    echo $epm1->sex,'<br/>';
    echo $epm1->num,'<br/>';


    $epm2 = new Employee('ALan','18','male','1');
    echo $epm2->name,'<br/>';
    echo $epm2->age,'<br/>';
    echo $epm2->sex,'<br/>';
    echo $epm2->num,'<br/>';












?>