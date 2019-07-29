<?php

    /**
     * 开启session
     *      session_start()函数   不需要参数，返回值始终为true
     *      每个页面都需要开启session
     *      开启session前不能有任何的输出
     */
    session_start();

    $user1 = "叶言";
    $sex1 = "男";

    $user2 = "Alan";
    $sex2 = "男";

    // 注册session
    $_SESSION['user1'] = $user1;
    $_SESSION['user2'] = $user2;
    $_SESSION['sex1'] = $sex1;
    $_SESSION['sex2'] = $sex2;

    // 使用session
    echo $_SESSION['user1'].'<br />';
    echo $_SESSION['user2'].'<br />';

    // session名称 和session_id值
    echo $_COOKIE[session_name()].'    '.session_id();
