<?php

    class Math{
        // const  常量
        const PI = 3.141592653;
        const WAN = 10000;

        function pi(){
            return self::PI;
        }
        function wan(){
            return self::WAN;
        }

        /**
         * 静态属性和静态方法
         * static  关键字声明
         */

        static $million = 1000000;  // 静态属性

        // 静态方法
        static function square($num){
            return $num * $num;
        }

        // 类内部访问静态属性
        function square_mill(){
            return self::square(self::$million);
        }

    }

    // 类外部访问const常量  用 ::
    echo Math::PI.'<br/>';
    echo Math::WAN.'<br/>';

    $m1 = new Math;
    echo $m1->pi(),'<br/>';

    // 访问静态属性   用 ::
    echo '一百万：',Math::$million,'<br/>';

    // 访问静态方法   用 ::
    echo '6的平方是：',Math::square(6),'<br/>';

    echo '百万的平方是：',$m1->square_mill(),'<br/>';





?>