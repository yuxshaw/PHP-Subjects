<?php 
require_once('../init.php');
require_once ('./header.php');

    // 判断是否已经登录
    if (!(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == 1)){
        echo '<script>alert("您还未登录登录！");location.href="login.php";</script>';
    }

    $data = array(
        'last_time' => $_SESSION['last_time'],
        'IP' => $_SERVER['SERVER_ADDR']
    );
    $smarty->assign('data',$data);

$smarty->display('admin/index.tpl');