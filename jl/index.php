<?php
    require_once ('init.php');
    require_once ('header.php');
    require_once ('footer.php');

    // 公司简介
    $com = $db->get_one("SELECT * FROM jl_page WHERE page_id = 1");
    $smarty->assign('com',$com);

    // 产品展示
    $pro_arr = $db->select_all('jl_product','1 LIMIT 3');
    $smarty->assign('pro',$pro_arr);

    // 最新公告
    $news_arr = $db->select_all('jl_product','artcate_id = 1 LIMIT 5');
    $smarty->assign('news',$news_arr);


    $smarty->display('home/index.tpl');


