<?php

    $host = 'localhost';
    $user = 'root';
    $pwd = '123456';
    $db = 'wd';

    // 引用函数
    require_once ("functions.php");
    require_once ('database.php');

    //获取文件域名
    define('_HOST_',$_SERVER['REQUEST_SCHEME'].$_SERVER['HTTP_HOST'].'/');
    // 定义css文件路径
    define('_CSS_','./css');
    // 定义js文件路径
    define('_JS_','./js');
    // 定义静态图片路径
    define('_IMG_','./images');

    // 设置时区
    date_default_timezone_set('Asia/shanghai');


    // 连接数据库
    $conn = connect_db($host,$user,$pwd,$db);
