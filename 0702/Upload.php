<?php


    class Upload
    {
        /**
         * 文件上传
         * @param $name 文件名
         * @param string $path  路径
         * @param string $size  文件大小
         * @param array $type   文件类型
         * @return mixed
         */
        function upload($name,$path='./uploads',$size='1048576',$type=array('jpg','png','gif','jpeg')){
            $error = $_FILES[$name]['error'];
            if ($error > 0){
                switch ($error){
                    case 1:
                        $res['msg'] = '文件超过2M，请重新上传！';
                        break;
                    case 2:
                        $res['msg'] = '文件超过指定，请重新上传！';
                        break;
                    case 3:
                        $res['msg'] = '上传失败！';
                        break;
                    case 4:
                        $res['msg'] = '没有上传文件！';
                        break;
                    default:
                        $res['msg'] = '其他错误！';
                }
                $res['error'] = 1;  // 规定为错误代码为1
                return $res;
            }
            // 文件大小不能超过$size大小
            if ($_FILES[$name]['size']>$size){
                $res['msg'] = '文件超过规定大小，请重新上传！';
                $res['error'] = 1;
                return $res;
            }

            // 文件类型
            $path_arr = pathinfo($_FILES[$name]['name']);    //文件路径
            $ext = $path_arr['extension'];    //获取文件的后缀
            if (!in_array($ext,$type)){
                $res['msg'] = '文件类型错误，请重新上传！';
                $res['error'] = 1;
                return $res;
            }

            // 创建目录
            $tmpdir = date('Y-m-d',time());
            $dir = rtrim($path,'/').'/'.$tmpdir;   //拼接好的路径

            // 如果目录不存在，则创建
            if (!is_dir($dir)){
                mkdir($dir,0777,true);
            }

            // 文件名
            $file_name = time().mt_rand(0,99999);   // 时间戳拼接随机数作为文件名
            $file = $file_name.'.'.$ext;    // 文件名拼接后缀（完整文件名）

            // 保存文件到目录
            $upload = move_uploaded_file($_FILES[$name]['tmp_name'],$dir.'/'.$file);
            if ($upload){
                $res['msg'] = '上传成功！';
                $res['error'] = 2;  // 规定上传成功的代码为2
                $res['path'] = $dir.'/'.$file;
                $res['name'] = $file;
                return $res;
            }
        }


        /**
         * @param $src_addr
         * @param $des_w
         * @param $des_h
         * @param $path
         * @param $thumb_name
         * @return string
         */
        function img_thumb($src_addr, $des_w, $des_h, $path, $thumb_name){
            // 1. 获取大图片信息
            $src_info = getimagesize($src_addr);
            $src_w = $src_info[0]; //原图宽
            $src_h = $src_info[1]; //原图宽

            // 2. 创建一张新的图片，参数（图片路径）作为等下的缩略图
            if ($src_info[2] == 1){
                $des_img = imagecreatefromgif($src_addr);
            }elseif ($src_info[2] == 2){
                $des_img = imagecreatefromjpeg($src_addr);
            }elseif ($src_info[2] == 3){
                $des_img = imagecreatefrompng($src_addr);
            }

            // 3. 创建一个真彩色图像，参数（缩略图的宽、高）
            $img_new = imagecreatetruecolor($des_w,$des_h);

            // 4. 拷贝部分图像，并调整大小
            imagecopyresized($img_new,$des_img,0,0,0,0,$des_w,$des_h,$src_w,$src_h);

            // 5. 获取后缀
            // $ext = pathinfo($src_addr,PATHINFO_EXTENSION);

            // 6. 创建缩略图文件存放目录
            $tmpdir = date('Y-m-d',time());
            $dir = rtrim($path,'/').'/'.$tmpdir;   //拼接好的路径

            if (!is_dir($dir)){
                mkdir($dir,0777,true);
            }

            // 7. 保存图片
            $thumb_path = $dir.'/thumb_'.$thumb_name;
            imagejpeg($img_new,$thumb_path,100);

            // 6. 释放内存
            imagedestroy($img_new);

            return $thumb_path;
        }
    }