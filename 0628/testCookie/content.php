<?php

    require_once ('cookie.php');

    if (isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1){
        echo "halo, {$_COOKIE['username']}，<a href='logout.php'>退出登录</a>";
    }else{
        return;
    }

    echo '<br/>这是内容页<br/>';
    echo '<a href="index.php">首页</a><br/>';
    echo '<a href="content.php">内容页</a>';
