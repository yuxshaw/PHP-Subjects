<?php

    //连接数据库 + 选择数据库
    $conn = mysqli_connect("localhost", "root", "123456", "student");
//    echo '<pre>';

    //判断是否连接成功
//    var_dump($conn);
    if ($conn == false){
//        echo "数据库连接失败！";
//        exit();
        die('Mysqli Connect Error:'.mysqli_connect_errno().','.mysqli_connect_error());
    }else{
        echo "数据库连接成功！";
    }