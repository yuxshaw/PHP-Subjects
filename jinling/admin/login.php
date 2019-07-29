<?php
    require_once ('./include/config.php');

    // 开启session
    session_start();

    // 判断是否已经登录
    if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == 1){
        msg_jump('您已经登录了哦！','index.php');
    }
    if (isset($_POST['commit'])){
        $username = $_POST['username'];
        $pwd = md5($_POST['pwd']);
        $imgcode = strtolower($_POST['imgcode']);
        if ($imgcode != $_SESSION['imgcode']){
            msg_jump('验证码不正确！');
            return;
        }
        $sql = "SELECT * FROM jl_admin WHERE admin_name = '$username' AND admin_pwd = '$pwd'";
        $res = get_one($sql);
        if ($res){

            // 设置session
            $_SESSION['admin_id'] = $res['admin_id'];
            $_SESSION['admin_name'] = $res['admin_name'];
            $_SESSION['admin_time'] = $res['admin_time'];
            // 设置登录状态
            $_SESSION['isLogin'] = 1;

            msg_jump('登录成功！','index.php');

        }else{
            msg_jump('登录失败，请检查账号密码是否正确！');
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<title>登录</title>
<meta name="keywords" content="Admin">
<meta name="description" content="Admin">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Core CSS  -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<!-- Theme CSS -->
<link rel="stylesheet" type="text/css" href="css/theme.css">
<link rel="stylesheet" type="text/css" href="css/pages.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>
<body class="login-page">

<!-- Start: Main -->
<div id="main">
<div class="container">
<div class="row">
  <div id="page-logo"></div>
</div>
<div class="row">
  <div class="panel">
    <div class="panel-heading">
      <div class="panel-title">系统登录入口</div>
    </div>

    <form action="" class="cmxform" id="altForm" method="post">
      <div class="panel-body">
        <div class="form-group">
          <div class="input-group"> <span class="input-group-addon">用户名</span>
            <input type="text" name="username" class="form-control" autocomplete="off"  placeholder="请输入您的用户名">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group"> <span class="input-group-addon">密&emsp;码</span>
            <input type="password" name="pwd" class="form-control" autocomplete="off" placeholder="请输入您的密码">
          </div>
        </div>
        <div class="form-group">
            <div class="input-group"> <span class="input-group-addon">验证码</span>
                <input style="width: 150px;" type="text" name="imgcode" class="form-control" autocomplete="off" placeholder="请输入验证码">
                <img style="margin-top: 2px; margin-left: 10px;" id="code" src="code/imgcode.php" alt="验证码">
            </div>
        </div>
      </div>

      <div class="panel-footer"> <span class="panel-title-sm pull-left" style="padding-top: 7px;"></span>
      <div class="form-group margin-bottom-none">
        <input type="hidden" value="login" name="action-mark" />
        <input class="btn btn-primary pull-right" name="commit" type="submit" value="登 录" />
        <div class="clearfix"></div>
      </div>
      </div>

    </form>

  </div>
</div>
</div>
</div>
<!-- End: Main -->
<script>
    var imgcode = document.getElementById('code');
    imgcode.onclick = function () {
        this.src = './code/imgcode.php?p='+Math.random();
    }
</script>
</body>

</html>