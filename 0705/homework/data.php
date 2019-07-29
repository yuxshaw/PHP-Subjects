<?php
    require_once ('./includes/DB.class.php');
    $db = new DB('localhost','root','123456','wd');

    // 查询所有的用户名
//    echo '<pre>';
    $name = $db->select_all('wd_user','1','user_name');
    foreach ($name as $k => $item){
        $user_name[] = $item['user_name'];
    }
//    var_dump($user_name);
    if (isset($_POST['user'])) {
        $user = $_POST['user'];
        if (in_array($user, $user_name)) {
            $info = 1;
            echo json_encode($info);
            return;
        } else {
            $info = 2;
            echo json_encode($info);
        }
    }

    // 查询所有的邮箱
    $user_email = $db->select_all('wd_user','1','user_email');
//    var_dump($email);
    foreach ($user_email as $k => $item){
        $email_arr[] = $item['user_email'];
    }
//    var_dump($email);
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (in_array($email, $email_arr)) {
            $info = 1;
            echo json_encode($info);
            return;
        } else {
            $info = 2;
            echo json_encode($info);
        }
    }

