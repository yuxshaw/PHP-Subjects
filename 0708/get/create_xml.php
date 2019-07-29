<?php
    // php字符串拼接生成字符串
    header('Content-Type:text/xml;charset=utf-8');

    $arr = array(
        array('name'=>'Alan','age'=>18),
        array('name'=>'Rose','age'=>17),
        array('name'=>'Jack','age'=>19)
    );

    echo '<?xml version="1.0" encoding="utf-8"?>'."\n";
    echo "<student>\n";
        foreach ($arr as $item){
            echo "<stu>";
            foreach ($item as $k => $value){
                echo "<".$k.">".$value."</".$k.">";
            }
            echo "</stu>";
        }
    echo "</student>\n";


