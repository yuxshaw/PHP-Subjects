<?php

    // 空间引入

    namespace guangdong\foshan\chanchang;
    class Person{
        const ADDR = '禅城';
        var $name = 'Jack';
        public function say(){
            echo "I'm ".$this->name.'<br />';
        }
    }

    namespace jiangxi\ganzhou;
    class Person{
        const ADDR = '赣州';
        var $name = 'Alan';
        public function say(){
            echo "I'm ".$this->name.'<br />';
        }
    }

    // 空间引入
    use \guangdong\foshan\chanchang;
    $p1 = new chancheng\Person();
    $p1->say();