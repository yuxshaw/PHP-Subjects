<?php

    /**
     * @param $host
     * @param $user
     * @param $pwd
     * @param $db
     * @return false|mysqli
     */
    function connect_db($host, $user, $pwd, $db){
        // 连接数据库
        $conn = @mysqli_connect($host, $user, $pwd, $db);       //  @ 符号，忽略错误和警告
        if(!$conn){
            die('数据库错误：'.mysqli_connect_errno().','.mysqli_connect_error());
        }
        // 设置编码
        mysqli_query($conn,"SET NAMES UTF8");


        return $conn;
    }