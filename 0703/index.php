<?php
    require_once ('init.php');

    // 分配变量
    $smarty->assign('a','halo');
    $smarty->assign('b','我是要成为海贼王的男人');
    $smarty->assign('time',time());
    $smarty->assign('age','10');


    $arr1 = array('Alan','18','male');
    $smarty->assign('stu',$arr1);

    $arr2 = array(

    );

    // 在模板显示
    $smarty->display('home/index.tpl');