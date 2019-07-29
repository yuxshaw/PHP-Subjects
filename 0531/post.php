<?php

    if (!empty($_POST)){
//        var_dump($_POST);
        $username = $_POST['user'];
        $pwd = $_POST['pwd'];
        echo '用户名是：'.$username.'，密码是：'.$pwd;
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

    <form action="" method="post">
        用户名：<input type="text" name="user" placeholder="用户名"> <br/>
        密&emsp;码：<input type="password" name="pwd" placeholder="密码"><br/>
        <input type="submit">
    </form>

</body>
</html>
