<?php
    if (!isset($_COOKIE['isLogin'])){
        echo '您还未登录哦亲！';
        echo '<script>setTimeout("location.href=\'login.php\'",2000);</script>';
        return;
    }else{
        $username = $_COOKIE['username'];
        // 清除cookie
        setcookie('user_id','',time()-1,'/');
        setcookie('username','',time()-1,'/');
        setcookie('user_email','',time()-1,'/');
        setcookie('isLogin','',time()-1,'/');

        echo '<script>alert("您已成功退出！");location.href="index.php";</script>';

    }