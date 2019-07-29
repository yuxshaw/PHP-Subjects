<?php

    require_once ('cookie.php');

    if (isset($_COOKIE['isLogin'])){
        $username = $_COOKIE['username'];

        setcookie('user_id','',time()-1,'/');
        setcookie('username','',time()-1,'/');
        setcookie('email','',time()-1,'/');
        setcookie('isLogin','',time()-1,'/');

        echo "{$_COOKIE['username']} 再见了您嘞！";
    }
    ?>
<script>
    setTimeout("location.href='login.php'",2000);
</script>
