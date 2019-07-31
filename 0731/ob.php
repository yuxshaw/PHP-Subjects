<?php
    
    ob_start(); //开启缓冲区
    //echo 'hello world!';

    //获取缓冲区内容
    echo '<a href="article?id=102">文章详情</a>';

    $str = ob_get_contents(); //获取缓冲区中的内容
   
    //将获取的链接转为伪静态
    $str = preg_replace('/article\?id=([0-9]+)/i','article-$1.html',$str);
    
    file_put_contents('index.html',$str); //将内容存放为静态文件

    ob_clean(); //关闭缓冲区

    echo $str;

    //ob_start('ob_gzhandler'); //开启Gzip页面压缩













