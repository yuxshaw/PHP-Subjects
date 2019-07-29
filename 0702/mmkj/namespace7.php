<?php

    // 空间类元素引入

    namespace guangdong\shenzhen\futian;
    class student{
        public $name = "Alan";
        function say(){
            echo $this->name;
        }
    }

    namespace guangdong\shenzhen\luohu;
    class student{
        public $name = "Jack";
        function say(){
            echo $this->name;
        }
    }

    use guangdong\shenzhen\futian\student as stu;
    $s1 = new stu();
    $s1->say();

    $s2 = new student();
    $s2->say();
