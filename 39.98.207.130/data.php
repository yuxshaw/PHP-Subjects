<?php


    // print_r($_POST);

    class p{
        public function __construct($param){
            echo $param;
        }

    }

    class s extends p{
        public function __construct($param){
            parent::__construct($param);
            echo 'exec self';
        }
    }

    $s = new s('aaaaaaaaa');

    // $p = new p('abc');