<?php

    if (!isset($_COOKIE['isLogin'])){
        echo '未登录哦亲！';
        echo '<script>setTimeout("location.href=\'login.php\'",2000);</script>';
    }