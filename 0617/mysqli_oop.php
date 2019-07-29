<?php
    // mysqli 面向对象方式连接
    $conn = new mysqli("localhost", "root", "123456", "student");

    // 判断数据库是否连接成功
    if ($conn -> connect_error){
        die('数据库连接失败：'.$conn ->connect_errno.''.$conn -> connect_error);
    }
//    echo '数据库连接成功！';


    // 关闭数据库
    $conn -> close();