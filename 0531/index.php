<?php

    /*
        文件上传
     */
//    if (isset($_POST) && !empty($_POST)){
////        var_dump($_POST);
//        var_dump($_FILES);
//
//
////        echo $filesize;
//
//    }


    date_default_timezone_set("PRC");
    if (isset($_POST)) {
        if ($_FILES) {

            //验证文件大小
            $filesize = $_FILES['photo']['size'];
            if ($filesize > 500000){
                echo '<script>alert("上传的图片不能超过500kb，请重新选择！"); location.replace("index.php");</script>';
                die;
            }

            if (is_uploaded_file($_FILES['photo']['tmp_name'])) {

//            echo '上传成功！';
                $filename = $_FILES['photo']['name'];   //获取文件名
                $ext = strstr($filename, '.');   //获取文件扩展名

                $sto_file = 'info.txt'; //存储信息的文件名

                $path = 'uploads/';     //存储图片的目录名

                //创建以日期为为名称的目录
                $date = date("Y-m-d");
                $path_info = $path . $date;
                if (!is_dir($path_info)) {       //如果不存在当前日期的目录，则创建目录
                    mkdir($path_info);
                }

                $new_name = $path_info . '/' . time() . mt_rand() . $ext;


                file_put_contents($sto_file, $new_name . "\n", FILE_APPEND);
                //copy($_FILES['photo']['tmp_name'],$path.$new_name);    // 将上传的文件存储到指定目录
                move_uploaded_file($_FILES['photo']['tmp_name'], $new_name);


            } else {
                echo '没有上传文件！';
            }
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
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        上传文件：<input type="file" name="photo" />
        <!--     MAX_FILE_SIZE隐藏域限制文件大小  通过value值限制文件大小，单位为字节       -->
        <input type="hidden" name="MAX_FILE_SIZE" value="20480000">
        <input type="submit" />
    </form>
</body>
</html>
