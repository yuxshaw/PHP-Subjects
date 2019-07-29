<?php
    require_once ('./include/config.php');
    // 开启session
    session_start();

    // 检查是否登录
    if (!(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == 1)){
        msg_jump('您还未登录哦！','login.php');
    }else{

        // 更新最后登出时间
        $admin_id = $_SESSION['admin_id'];
        $condition = "admin_id = $admin_id";
        $data = array(
            'admin_time' => time()
        );
        update('wd_admin',$data,$condition);


        // 清除登录数据
        session_destroy();
        msg_jump('您已成功退出！','login.php');
    }