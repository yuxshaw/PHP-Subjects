<?php

    // 菜单管理
    include ('api.class.php');

    $api = new api('wx564aae92c16fb771','b036332bbdb6bb837b36481440c5d066');

//    echo $api->get_access_token();
    echo $api->get_joke();

    echo $api->create_menu();    // 创建菜单
