<?php
    // 查询所有的导航信息
    $nav = $db->select_all('c_nav');
    $smarty->assign('nav',$nav);
