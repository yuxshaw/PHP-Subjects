<?php
    // 开启session
    session_start();

    // 判断是否已经登录
    if (isset($_SESSION['isLogin'])){
        echo '已经登录了哦亲！';
        echo '<script>setTimeout("location.href=\'index.php\'",2000);</script>';
    }
    if (isset($_POST['commit'])){
        $conn = mysqli_connect('localhost','root','123456','wengdo');
        $username = $_POST['user'];
        $pwd = md5($_POST['pwd']);
        $imgcode = strtolower($_POST['imgcode']);
        if ($imgcode != $_SESSION['imgcode']){
            echo '<script>alert("验证码错误！");history.back();</script>';
            return;
        }
        $sql = "SELECT * FROM users WHERE user_name = '$username' AND user_pwd = '$pwd'";
        $res = mysqli_query($conn,$sql);
        if (mysqli_affected_rows($conn) > 0){
            $data = mysqli_fetch_assoc($res);
            // 设置session
            $_SESSION['user_id'] = $data['user_id'];
            $_SESSION['username'] = $data['user_name'];
            $_SESSION['email'] = $data['email'];
            // 设置登录状态
            $_SESSION['isLogin'] = 1;

            echo '<script>alert("登录成功！");location.href="index.php";</script>';
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
            <input type="text" name="user" />   <br/>
        密&emsp;码：
            <input type="password" name="pwd" />    <br/>
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