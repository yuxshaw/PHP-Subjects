<?php
    $host = 'localhost';
    $user = 'root';
    $pwd = '123456';
    $db = 'student';

    try{
        $conn = new PDO("mysql:host = $host:$db",$user,$pwd);
        if ($conn){echo '数据库连接成功！';}
        // 设置编码
        $conn -> query('set names utf8');
    }catch (PDOException $e){
        echo $e -> getMessage();
    }

    $sql = 'SELECT * FROM student';
    $res = $conn -> exec($sql);
    var_dump($res);