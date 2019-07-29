<?php

    define('_TOKEN_','shaw');

    include ('wechat.class.php');

    $wx = new wechat();

    $echostr = $_GET['echostr'];        // 随机字符串
    if (!empty($echostr)) {
        $wx->valid();
        exit;
    }
    $wx->responseMsg();

//    $wx->get_url();

//    file_put_contents('log.txt',$echostr);       //打印错误日志

?>