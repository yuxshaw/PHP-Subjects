<?php


    class MagicMethod
    {

        /**
         * 属性重载
         *    __get()
         *      读取不可访问的属性值时， __get()会被调用
         *    __set()
         *
         */

        private $name;
        private $sex;
        private $age;

        public function __construct($name,$sex,$age)
        {
            $this->name = $name.'<br/>';
            $this->sex = $sex.'<br/>';
            $this->age = $age.'<br/>';
        }

        function __get($name)   // $name 属性名
        {
            if ($name == 'age' && $this->sex == 'male'){
                return '年龄保密！';
            }
            return $this->$name;
        }

        function __set($name, $value)
        {
            echo $name.":".$value;
        }

        function __isset($name)
        {
            return isset($this->$name);
        }

        function __unset($name)     // 没有返回值
        {
            unset($this->$name);
        }

        function __toString()
        {
            return 'hiahiahiahiahiahiahiahiahia';
        }


    }

    $m1 = new MagicMethod('Alan','male','18');
    echo $m1->name.'<br/>';
    echo $m1->sex.'<br/>';
    echo $m1->age.'<br/>';

    $m2 = new MagicMethod('Rose','female','18');
    echo $m2->name.'<br/>';
    echo $m2->sex.'<br/>';
    echo $m2->age.'<br/>';

    // 赋值
    $m3 = new MagicMethod('Mac','male','22');
    $m3->name = 'Jack';
    $m3->sex = 'male';
    $m3->age = '18';


    $res = isset($m3->name);
    if ($res){
        echo '$m3的属性存在！';
    }else{
        echo '属性不存在！';
    }

    unset($m3->name);
    echo $m3->name;

    $m4 = new MagicMethod('PPAP','male','28');
//    unset($m4->age);
//    echo $m4->age;

    echo $m4;






    class Foo{
        var $test;

        public function __clone()
        {
            return $this->test = clone $this->test;
        }

    }

    $obj1 = new test;
    $obj2 = new test;

    $obj1->test = $obj2;
    $obj2->test = $obj1;




