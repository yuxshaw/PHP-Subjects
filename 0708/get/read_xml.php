<?php
    header('Content-Type:text/html;charset=utf-8');

    echo '<pre>';

    // 用XMLReader 解析 xml
    $xml = new XMLReader();
    $xml->open('get_xml.xml');

    $i = 0;
    $arr = array();
    while ($xml->read()){
        if ($xml->name == 'name'){
            $xml->read();
            $arr[$i]['name'] = $xml->value;
            $xml->read();
        }
        if ($xml->name == 'author'){
            $xml->read();
            $arr[$i]['author'] = $xml->value;
            $xml->read();
        }
        if ($xml->name == 'data'){
            $xml->read();
            $arr[$i]['data'] = $xml->value;
            $xml->read();
        }
        $i ++;
    }
    var_dump($arr);
    echo '<hr/>';

    $xml = simplexml_load_file('get_xml.xml');
    $j = 0;
    $arr1 = array();
    foreach ($xml->book as $item){
        $arr1[$j]['name'] = (string)$item->name;
        $arr1[$j]['author'] = (string)$item->author;
        $arr1[$j]['data'] = (string)$item->data;
        $j ++;
    }
    var_dump($arr1);
