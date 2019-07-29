<?php

    // 开启session
    session_start();

    // 检查是否登录
    if (!(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == 1)){
        echo '未登录哦亲！';
        echo "<script>setTimeout('location.href=\'login.php\'',2000);</script>";
        return;
    }


?>