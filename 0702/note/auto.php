<?php

    function __autoload($classname)  {
        include($classname.'.class.php');
    }


    $p1 = new Person();
    $p1->say();

    $stu = new student();
    $stu->say();