<?php
    // 过程式操作数据库

    //连接数据库
    $conn = mysqli_connect("localhost", "root", "123456",'student');
    if (!$conn){
        die('数据库连接错误：'.mysqli_connect_errno().','.mysqli_connect_error());
    }

    //设置编码
    mysqli_query($conn,'SET NAMES "UTF8"');

    //s编写ql语句
    $sql = 'SELECT * FROM student';
    $res = mysqli_query($conn,$sql);

    // 关闭数据库
    mysqli_close($conn);


    // 面向对象方式操作数据库

    //连接数据库
    $conn = new mysqli("localhost", "root", "123456", "student");

    // 判断数据库是否连接成功
    if ($conn -> connect_error){
        die('数据库连接失败：'.$conn ->connect_errno.''.$conn -> connect_error);
    }
        echo '数据库连接成功！';

    //s编写ql语句
    $sql = 'SELECT * FROM student';
    $conn -> query($sql);

    // 关闭数据库
    $conn -> close();