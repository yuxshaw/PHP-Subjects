<?php

    // 图片地址
    $img_addr = '../upload/2019-06-26/156152987833680.jpg';
    // 1. 获取大图片信息
    $res_arr = getimagesize($img_addr);
    // 原图宽高
    $origin_w = $res_arr[0];
    $origin_h = $res_arr[1];

    // 2. 创建一张新的图片，参数（图片路径）作为等下的缩略图
    $img = imagecreatefromjpeg($img_addr);

    // 3. 创建一个真彩色图像，参数（缩略图的宽、高）
    $img_new_w = 120;
    $img_new_h = 90;
    $img_new = imagecreatetruecolor($img_new_w,$img_new_w);

    // 4. 拷贝部分图像，并调整大小
    $a = imagecopyresized($img_new,$img,0,0,0,0,$img_new_w,$img_new_h,$origin_w,$origin_h);

    // 5. 保存图片
    imagejpeg($img_new,'thumb/aaa.gif',100);

    // 6. 释放内存
    imagedestroy($img_new);