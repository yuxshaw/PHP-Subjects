<?php

    // 声明多命名空间

    namespace jiangxi\jiujiang;

    class Panda{

        const NAME = '彭泽动物园国宝';

        public function fun(){
            echo self::NAME.'卖萌1 <br/>';
        }
    }
    class Qiang{
        const NAME = '九江强强公司';
    }


    namespace sichuang\chengdu;

    class Panda{

        const NAME = '成都动物园国宝';

        public function fun(){
            echo self::NAME.'卖萌2 <br/>';
        }
    }
    class Qiang{
        const NAME = '成都强强公司 <br/>';
    }

//    $obj1 = new Panda;
//    $obj1->fun();
//
//    $obj2 = new \jiangxi\jiujiang\Panda;
//    $obj2->fun();
//
//    echo \jiangxi\jiujiang\Qiang::NAME;

    use \jiangxi\jiujiang;
    $obj2 = new Panda;
