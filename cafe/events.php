<?php

    require_once ('init.php');
    require_once ('header.php');
    require_once ('footer.php');

    require_once ('./includes/Pages.class.php');

    $current = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 2;
    $n = ($current - 1) * $limit;
    $size = 5;
    $count = $db->get_one("SELECT COUNT(news_id) AS c FROM c_news");


    // 查询新闻简介
    $brief = $db->select_all('c_brief','briefcate_id = 2','b_content');
    $smarty->assign('brief',$brief);

    // 查询前3条服务
    $ser_arr = $db->select_all('c_services','1 LIMIT 3','ser_content');
    $smarty->assign('ser',$ser_arr);

    // 查询所有的新闻
    $news_arr = $db->select_all('c_news',"1 LIMIT {$n},{$limit}");
    $smarty->assign('news_arr',$news_arr);
    
    // 查询3条最新日期的新闻
    $news = $db->select_all('c_news','1 ORDER BY news_time DESC LIMIT 3');
    $smarty->assign('news',$news);

    //实例化分页对象
    $page = new Pages($current,$count['c'],$limit,$size);
    $smarty->assign('page',$page->pg());

    $smarty->display('home/events.tpl');