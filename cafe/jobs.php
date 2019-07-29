<?php

    require_once ('init.php');
    require_once ('header.php');
    require_once ('footer.php');

    // 查询jobs简介
    $brief = $db->select_all('c_brief','briefcate_id = 4','b_content');
    $smarty->assign('brief',$brief);

    // 查询前4条服务
    $ser_arr = $db->select_all('c_services','1 LIMIT 4','ser_content');
    $smarty->assign('ser',$ser_arr);

    // 查询所有的工作
    $jobs = $db->select_all('c_jobs','1 LIMIT 2');
    $smarty->assign('jobs',$jobs);

    // 查询最新两条的工作
    $new_jobs = $db->select_all('c_jobs','1 ORDER BY job_time DESC LIMIT 2');
    $smarty->assign('new_jobs',$new_jobs);

    $smarty->display('home/jobs.tpl');