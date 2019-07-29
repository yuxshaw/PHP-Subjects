<?php

    // 命名空间 namespace
    namespace test1;
    const NAME = 'Alan';
    function fun1(){
        echo NAME.' said halo <br/>';
    }

    namespace test2;
    const NAME = 'Jack';
    function fun1(){
        echo NAME.' said hiahia <br/>';
    }

    // 访问元素没有指明具体空间，默认访问【当前空间】（上面最近的空间）
    fun1();

    // 访问其他命名空间
    \test1\fun1();

    //  test1\fun1();   --> test2\test1\fun1()

