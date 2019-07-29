<?php

    // 声明多命名空间

    namespace jiangxi\jiujiang;

    class Panda{

        const NAME = '九江动物园国宝';

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

    $obj1 = new Panda();  // 1.非限定名称 命名空间

    $obj2 = new \jiangxi\jiujiang\Panda();  // 2.完全限定名称 命名空间

    // $obj3 = new chengdu\Panda();  // 3.限定名称 命名空间
    /**
     *  sichuang\chengdu\Panda()
     */
