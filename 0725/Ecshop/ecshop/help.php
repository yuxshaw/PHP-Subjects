<?php
    define('IN_ECS', true);

    require(dirname(__FILE__) . '/includes/init.php');

    if ((DEBUG_MODE & 2) != 2)
    {
        $smarty->caching = true;
    }

    $smarty->assign('now_time',gmtime());   // 当前系统时间
    $smarty->display('help.dwt');