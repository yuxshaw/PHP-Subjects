<?php
    //上传图片函数
    /**
     * @param $filename string 文件名
     * @param $path     string  存储目录
     * @param $sto_file string  存储图片地址的文件
     */

    function img_upload($name,$path='./uploads/',$sto_file = 'info.txt'){
//        var_dump($_FILES[$name]['name']);

        //循环遍历
        for ($i=0; $i<count($_FILES[$name]['name']); $i++){

        //验证文件大小
        $filesize = $_FILES[$name]['size'][$i];
        if ($filesize > 1024000){
            echo '<script>alert("上传的图片不能超过1M，请重新选择！"); //location.replace("function_test.php");</script>';
            continue;
        }

        $error = $_FILES[$name]['error'][$i];
        if ($error > 0){
            switch ($error){
                case 1:
                case 2:
                    echo '文件太大了！';
                    break;
                case 3:
                    echo '网络错误，请检查你的网络！';
                    break;
                case 4:
                    echo '没有上传文件！';
                    break;
                case 6:
                    echo '找不到临时文件！';
                    break;
                default:
                    echo '其他错误！';
                    break;
            }
            die;
        }

        if (is_uploaded_file($_FILES[$name]['tmp_name'][$i])) {


            //验证文件类型
            $type_arr = array("image/jpg", "image/jpeg", "image/gif", "image/png");
            if (!in_array($_FILES[$name]['type'][$i], $type_arr)) {
                echo '只能上传' . implode(',', $type_arr) . '类型的文件！';
                die;
            }

//            echo '上传成功！';
            $filename = $_FILES['photo']['name'][$i];   //获取文件名
            $ext = strstr($filename, '.');   //获取文件扩展名

            //$sto_file = 'info.txt'; //存储信息的文件名

            // $path = 'uploads/';     //存储图片的目录名

            //创建以日期为为名称的目录
            $date = date("Y-m-d");
            $path_info = $path . $date;
            if (!is_dir($path_info)) {       //如果不存在当前日期的目录，则创建目录
                mkdir($path_info);
            }

            $new_name = $path_info . '/' . time() . mt_rand() . $ext;


            file_put_contents($sto_file, $new_name . "\n", FILE_APPEND);
            //copy($_FILES['photo']['tmp_name'],$path.$new_name);    // 将上传的文件存储到指定目录
            $res = move_uploaded_file($_FILES[$name]['tmp_name'][$i], $new_name);
            }

        }
        if ($res){
            return 1;   //上传成功
        }else{
            return 2;   //上传失败
        }
    }

    function img_upload1($name,$path='./uploads/',$sto_file = 'info.txt'){
//        var_dump($_FILES[$name]['name']);

    //循环遍历

        //验证文件大小
        $filesize = $_FILES[$name]['size'];
        if ($filesize > 1024000){
            echo '<script>alert("上传的图片不能超过1M，请重新选择！"); //location.replace("function_test.php");</script>';
            die;
        }

        $error = $_FILES[$name]['error'];
        if ($error > 0){
            switch ($error){
                case 1:
                case 2:
                    echo '文件太大了！';
                    break;
                case 3:
                    echo '网络错误，请检查你的网络！';
                    break;
                case 4:
                    echo '没有上传文件！';
                    break;
                case 6:
                    echo '找不到临时文件！';
                    break;
                default:
                    echo '其他错误！';
                    break;
            }
            die;
        }

        if (is_uploaded_file($_FILES[$name]['tmp_name'])) {


            //验证文件类型
            $type_arr = array("image/jpg", "image/jpeg", "image/gif", "image/png");
            if (!in_array($_FILES[$name]['type'], $type_arr)) {
                echo '只能上传' . implode(',', $type_arr) . '类型的文件！';
                die;
            }

//            echo '上传成功！';
            $filename = $_FILES['photo']['name'];   //获取文件名
            $ext = strstr($filename, '.');   //获取文件扩展名

            //$sto_file = 'info.txt'; //存储信息的文件名

            // $path = 'uploads/';     //存储图片的目录名

            //创建以日期为为名称的目录
            $date = date("Y-m-d");
            $path_info = $path . $date;
            if (!is_dir($path_info)) {       //如果不存在当前日期的目录，则创建目录
                mkdir($path_info);
            }

            $new_name = $path_info . '/' . time() . mt_rand() . $ext;


            file_put_contents($sto_file, $new_name . "\n", FILE_APPEND);
            //copy($_FILES['photo']['tmp_name'],$path.$new_name);    // 将上传的文件存储到指定目录
            $res = move_uploaded_file($_FILES[$name]['tmp_name'], $new_name);
        }

    if ($res){
        return 1;   //上传成功
    }else{
        return 2;   //上传失败
    }
}


?>

