<?php

    require_once ('init.php');
    require_once ('header.php');
    require_once ('footer.php');

    // 查询公司简介
    $brief = $db->select_all('c_brief','briefcate_id = 1','b_content');
    $smarty->assign('brief',$brief);

    // 查询前7条服务
    $ser_arr1 = $db->select_all('c_services','1 LIMIT 5','ser_content');
    $ser_arr2 = $db->select_all('c_services','1 LIMIT 5,2','ser_content');
    $smarty->assign('ser1',$ser_arr1);
    $smarty->assign('ser2',$ser_arr2);

    // 查询最新日期的新闻
    $news = $db->select_all('c_news','1 ORDER BY news_time DESC LIMIT 1');
    $smarty->assign('news',$news);


    $smarty->display('home/index.tpl');