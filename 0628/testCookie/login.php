<?php

    if (isset($_POST['commit'])){
        $db = new PDO("mysql:host = localhost;dbname=wengdo",'root','123456');
        $info = $db->prepare("SELECT user_id, user_name, user_pwd, email FROM users WHERE user_name = ? AND user_pwd = ?");

        $info->execute(array($_POST['user'],md5($_POST['pwd'])));

        if ($_POST['imgcode'] != strtolower($_COOKIE['imgcode'])){
            echo '<script>alert("验证码错误！");history.back();</script>';
            return;
        }

        if ($info->rowCount() > 0){
            list($user_id, $user_name, $email) = $info->fetch(PDO::FETCH_NUM);

            // 设置cookie
            setcookie('id',$id,time()+60*30,'/');
            setcookie('username',$user_name,time()+60*30,'/');
            setcookie('email',$email,time()+60*30,'/');

            // 设置登录标记
            setcookie('isLogin',1,time()+60*30,'/');

            header("Location: index.php");

//            echo '<script>alert("登录成功！");location.href="index.php";</script>';

        }else{
            echo '啧，账号或密码错误，登录失败哟！';
        }

    }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input[name='imgcode']{
            width: 100px;
        }
        #code{
            /*border: 2px solid #000;*/
        }
    </style>
</head>
<body>

    <form action="" method="post">
        用户名：
            <input type="text" name="user" />
        密&emsp;码：
            <input type="password" name="pwd" />
        验证码：
        <input type="text" name="imgcode">
        <img src="imgcode.php" id="code" alt="验证码">
        <br/>
            <input type="submit" name="commit" value="登录">
    </form>

</body>
</html>
<script>
    var imgcode = document.getElementById('code');
    imgcode.onclick = function () {
        this.src = "imgcode.php?q="+Math.random();
    }
</script>