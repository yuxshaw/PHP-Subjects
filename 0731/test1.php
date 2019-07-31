<?php
    require_once('functions.php');
    
    $fun = new Fun();

    echo $fun->data_dir(500) . '<br />';
    
    //获取域名
    echo $fun->get_domain() . '<br />';


    $str1 = '百日依山尽，黄河入海流。欲穷千里目，更上一层楼。';

    echo $fun->sub_str($str1,8) . '<br />';
    

    //strtr — 转换指定字符
    $str = 'Hilla warld';
    echo strtr($str,'ia','eo') . '<br />';

    $arr = ['Hello'=>'Hi','World'=>'Earth'];
    $str = 'Hello World, Hello1 World1';
    echo strtr($str,$arr) . '<br />';


    //real_ip
    echo $fun->real_ip() . '<br />';

    //计算字符串长度
    echo $fun->str_len($str1) . '<br />';

    //获取操作系统换行符
    echo $fun->get_crlf() . '<br />';

    // 获取IP所在地
    $ip = '14.215.177.38';
    echo '当前IP所在地：'.$fun;













