<?php

    // 命名空间 namespace
    namespace test1;
    const NAME = 'Alan';
    function fun1(){
        echo __FUNCTION__.' said halo <br/>';
    }
    fun1();

    namespace test2;
    const NAME = 'Alan';
    function fun1(){
        echo NAME.' said hiahia <br/>';
    }
    fun1();

