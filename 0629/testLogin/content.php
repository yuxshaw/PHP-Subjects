<?php
    require_once ('config.php');
    if (!isset($_SESSION['isLogin'])){
        return;
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
</head>
<body>
<h1>这是内容页，halo，<?php echo $_SESSION['username'];?></h1>
<a href="logout.php">退出登录</a>
<a href="index.php">首页页</a>
</body>
</html>
