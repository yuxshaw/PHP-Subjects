<?php

    // 1.开启session
    session_start();

    var_dump($_SESSION);

    // 2.获取session的某个值
    unset($_SESSION['sex1']);

    //
    $_SESSION = array();

    if (isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-1,'/');
    }

    session_destroy();