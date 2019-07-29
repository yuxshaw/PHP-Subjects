<?php
require_once('../init.php');

    // 检查是否登录
    if (!(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == 1)){
        echo '<script>alert("您还未登录登录！");location.href="login.php";</script>';
    }else{
        // 清除登录数据
        session_destroy();
        echo '<script>alert("您已成功退出！");location.href="login.php";</script>';
    }
