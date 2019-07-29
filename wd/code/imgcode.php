<?php

    // 生成随机字符串
    function get_str($len = 4){
        // 准备一个字符串
        $chars = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $str = str_shuffle($chars); //将字符串打乱
        $str = substr($str,0,$len);
        return $str;
    }

    // 1.定义验证码的宽高
    function img_code($width = 60,$height = 25){

        // 2.创建一张指定宽高的图片，用来存放验证码 imagecreatetruecolor()
        $img = imagecreatetruecolor($width, $height);

        // 3.给验证码添加背景颜色和文字颜色 imagecolorallocate()
        $bgcolor = imagecolorallocate($img, 200, 200, 200);
        $textcolor = imagecolorallocate($img, 255, 0, 0);

        // 4.在指定图片上回一个矩形  imagefilledrectangle()
        imagefilledrectangle($img, 0, 0, $width, $height, $bgcolor);

        // 5.将随机字符串写入图片中    imagestring()
        $code = get_str();
        imagestring($img, 5, 13, 4, $code, $textcolor);

        // 6.给图片添加干扰项  画点 imagesetpixel()
        for ($i = 0; $i < 60; $i++) {
            $dotcolor = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
            imagesetpixel($img, mt_rand(0, $width), mt_rand(0, $height), $dotcolor);
        }

        // 7.给图片添加干扰项  画线 imageline()
        for ($i = 0; $i < 5; $i++) {
            $linecolor = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
            imageline($img, mt_rand(0, $width - 1), mt_rand(0, $height - 1), mt_rand(0, $width - 1), mt_rand(0, $height - 1), $linecolor);
        }

        // 将验证码存入session
//        session_start();
//        $_SESSION['imgcode'] = strtolower($code);

        //将验证码存入cookie
        setcookie('imgcode',strtolower($code),time()+60*30,'/');

        // 输出
        header('Content-Type:image/jpeg');

        imagejpeg($img);

        // 释放内存，销毁图像资源
        imagedestroy();

    }
    img_code();