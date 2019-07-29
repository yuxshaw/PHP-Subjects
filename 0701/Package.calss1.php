<?php

    class Employee{
        private $name;
        private $age;
        private $sex;
        private $num;

        //构造函数
        public function __construct($name='',$age=20,$sex='male',$num=1234)
        {
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
            $this->num = $num;
        }


        private function set_name($name){
            if (!is_string($name)){
                return;
            }
            $this->name = $name;
        }

        private function set_age($age){
            if (!is_numeric($age) || ($age < 16 || $age > 65)){
                return '年龄不在合理范围内';
            }
            $this->age = $age;
        }

        public function say_name(){
            return $this->name;
        }

    }
    $p1 = new Employee('Alan',70,'male',111);
    $p1->say_name();

?>