<?php

    if (!empty($_POST)){
        var_dump($_POST);
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
        姓名：<input type="text" name="user"><br>
        爱好：
        <label><input type="checkbox" name="hobby[]" value="chang">唱</label>
        <label><input type="checkbox" name="hobby[]" value="tiao">跳</label>
        <label><input type="checkbox" name="hobby[]" value="rap">rap</label>
        <label><input type="checkbox" name="hobby[]" value="basketball">篮球</label><br>
        <input type="submit">
    </form>

</body>
</html>
