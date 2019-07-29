<?php

    require_once ('init.php');
    require_once ('header.php');
    require_once ('footer.php');

    // 查询服务简介
    $brief = $db->select_all('c_brief','briefcate_id = 3','b_content');
    $smarty->assign('brief',$brief);

    // 查询3条最新日期的新闻
    $news = $db->select_all('c_news','1 ORDER BY news_time DESC LIMIT 2');
    $smarty->assign('news',$news);

    // 查询前6条服务
    $ser_arr = $db->select_all('c_services','1 LIMIT 6','ser_content');
    $smarty->assign('ser',$ser_arr);

    $smarty->display('home/services.tpl');