<?php

    // 查询所有的配置信息
    $conf = $db->select_all('c_config','conf_id IN (2,4,5)');
    $smarty->assign('config',$conf);
