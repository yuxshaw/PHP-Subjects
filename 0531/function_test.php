<?php

    require_once ('functions.php');
    if (isset($_POST) && $_FILES){
        $name = 'photo';
    //        echo $name;
        $path = './test/';
        $info = 'test.txt';
        $res = img_upload($name,$path,$info);
        if ($res ==1){
            echo '<script>alert("上传成功！");location.replace("function_test.php");</script>';
        }
    }

    require_once ('functions.php');
    if (isset($_POST) && $_FILES){
        $name = 'photo';
        //        echo $name;
        $path = './test/';
        $info = 'test.txt';
        $res = img_upload1($name,$path,$info);
        if ($res ==1){
            echo '<script>alert("上传成功！");location.replace("function_test.php");</script>';
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
    <script src="jquery-3.1.1.js"></script>
</head>
<body>
<form action="function_test.php" method="post" enctype="multipart/form-data">
    上传文件：<br>
            <input id="inp" type="file" name="photo[]" /><br>
            <span id="sp"></span>
    <!--     MAX_FILE_SIZE隐藏域限制文件大小  通过value值限制文件大小，单位为字节       -->
    <!--    <input type="hidden" name="MAX_FILE_SIZE" value="20480000">-->
            <input type="submit" />
</form>
<button id="btn">上传多张图片</button>
<br>
<!--<form action="function_test.php" method="post" enctype="multipart/form-data">-->
<!--    上传文件：<br>-->
<!--    <input type="file" name="photo" /><br>-->
<!--         MAX_FILE_SIZE隐藏域限制文件大小  通过value值限制文件大小，单位为字节       -->
<!--        <input type="hidden" name="MAX_FILE_SIZE" value="20480000">-->
<!--    <input type="submit" />-->
<!--</form>-->
</body>
</html>
<script>
    $(function () {
        // var inp = $('.inp')[0];
        // console.log(inp);
        $('#btn').click(function () {
            $('#inp').clone().appendTo($('#sp'))+'<br/>';
        });
        // console.log($('.inp')[0]);
    });
</script>
