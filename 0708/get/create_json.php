<?php

    $arr = array(
        'name1'=>'Alan',
        'name2'=>'Grace',
        'name3'=>'Json'
    );

    // 将数组转换为json格式
    $json_data = json_encode($arr);
    echo $json_data;

    // 将json格式字符串转换为对象
    //$arr1 = json_decode($json_data);
    //var_dump($arr1);

