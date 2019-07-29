<?php
    $sql = "SELECT * FROM jl_config";
    $conf_arr = $db->get_all($sql);
    $smarty->assign('conf',$conf_arr);