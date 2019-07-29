<?php
//    require_once ('init.php');

    $sql = "SELECT * FROM jl_nav LIMIT 6";
    $nav_arr = $db->get_all($sql);
    $smarty->assign('nav',$nav_arr);

//    $smarty->display('home/header.tpl');
