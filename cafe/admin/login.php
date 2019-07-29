<?php 
    require_once('../init.php');


    // 判断是否已经登录
    if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == 1){
        echo '<script>alert("您已经登录！");location.href="index.php";</script>';
    }

    if (isset($_POST['commit'])){
        $name = $_POST['username'];
        $pwd = md5($_POST['password']);
        $imgcode = strtolower($_POST['imgcode']);
        if ($imgcode != $_SESSION['imgcode']){
            echo '<script>alert("验证码错误！");history.back(-1);</script>';
            return;
        }
        $sql = "SELECT * FROM c_admin WHERE admin_name = '$name' AND admin_pwd = '$pwd'";
        $res = $db->get_one($sql);
        if ($res){

            // 设置session
            $_SESSION['admin_id'] = $res['admin_id'];
            $_SESSION['admin_name'] = $res['admin_name'];
            $_SESSION['last_time'] = $res['last_time']; // 获取上一次登录时间
            // 设置登录状态
            $_SESSION['isLogin'] = 1;

            // 将本次登录时间存入数据库
            $data = array(
                'last_time' => time()
            );
            $condition = "admin_name = '$name'";
            $db->update('c_admin',$data,$condition);
            echo '<script>alert("登录成功！");location.href="index.php";</script>';
        }else{
            echo '<script>alert("登录失败，请检查账号密码是否正确！！");history.back(-1);</script>';
        }

    }


    $smarty->display('admin/login.tpl');