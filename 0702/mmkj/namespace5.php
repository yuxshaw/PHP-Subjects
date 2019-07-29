<?php

    namespace heilongjiang\harbin\mudanjiang;

    function fun(){
        echo '牡丹江 <br/>';
    }

    namespace jiangxi\gaznhzou\ganxian;
    function fun(){
        echo '赣县 <br/>';
    }
    function fun1(){
        echo '脐橙 <br/>';
    }

    namespace jiangxi\ganzhou;
    function fun(){
        echo '赣州 <br/>';
    }

    fun();

    \jiangxi\ganzhou\fun();

    ganxian\fun1();
