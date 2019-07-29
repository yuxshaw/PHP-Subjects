<?php

    /**
     * 定义类
     * 关键字  Class classname{}
     * 格式：
        class classname  [extends parent class] {
            var  property = value;		//属性(成员属性)
            function functionname ( args ){ 	//方法（成员方法/函数）
            //代码
            }
        }

     */

    class Person{
        /**
         * 属性(成员属性)
         * var关键字   不确定属性类型时，用var
         */
        var $name = '佚名';
        var $age = 18;
        var $sex;

        /**
         * 方法(成员函数)
         */
        function walk(){
            echo "I'm walking!";
            $this->left();
            $this->right();
            $this->left();
            $this->jump();
            $this->jump();
            $this->jump();
        }

        function left(){
            echo '迈左腿<br/>';
        }

        function right(){
            echo '迈右腿<br/>';
        }

        function jump(){
            echo '跳两步<br/>';
        }

        // this 在该类中访问自己的成员
        function say_name(){
            echo $this->name;
        }


    }

    // 实例化 Person 对象
    $p1 = new Person();

    // 读取属性
    echo $p1->name.'<br/>';

    // 修改属性
    $p1->name = 'Alan';
    echo $p1->name.'<br/>';

    echo $p1->name,' said: ',$p1->walk();

    $p2 = new Person();
    $p2->name = 'Jack';
    $p2->say_name();

    $p2->walk();


?>
