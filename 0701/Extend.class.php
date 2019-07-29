<?php

    /**
     * 类的继承
     * Class Extend
     */
    class Extend
    {
        protected $name = 'Grace';
        protected $age = '16';
        private $sex = 'female';

        protected function say_name(){
            echo $this->sex;
        }

        private function get_sex(){
            echo $this->sex;
        }

        static function get_Company(){
            echo '沙雕一号有限公司';
        }

    }


    // Son 继承Extend
    class Son extends Extend{
        public function sayNmae(){
            return $this->say_name();
        }

        public function company(){
            echo parent::get_Company(),'的子公司！';
        }

        /**
         *  父类私有的属性和方法都无法继承，不能调用
         */
        /*public function Sex(){
            return $this->get_sex();
        } */


    }

    $s1 = new Son;
//    echo $s1->sayName();
//    echo $s1->Sex();

    $s1->company();