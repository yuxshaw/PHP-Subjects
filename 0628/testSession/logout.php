<?php

    //开启session
    session_start();
    if (!isset($_SESSION['isLogin'])){
        echo '未登录哦亲！';
        echo "<script>setTimeout('location.href=\'login.php\'',2000);</script>";
        return;
    }

    require_once ('config.php');

    $username = $_SESSION['username'];
    session_destroy();

    echo "{$username}，再见了您嘞！";
    echo '<script>setTimeout("location.href=\'login.php\'",2000);</script>';

?>


