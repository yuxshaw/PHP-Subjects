<?php

    //打开文件  fopen()
    $fh = fopen("test.txt","r");
    var_dump($fh);
    echo '<br />';

    //读取文件
    //filesize() 获取文件长度，返回字节数
    $filesize = filesize("test.txt");   //参数为文件路径
    echo $filesize.'<br />';

//    $str = fread($fh,$filesize);
//    echo $str;

    //fgets()   从文件指针中读取一行
//    $str1 = fgets($fh);
//    echo $str1.'<br />';

    //从文件指针中读取字符，读取之后指针后移一位
    $str2 = fgetc($fh);
    echo $str2.'<br />';

//    while(false != ($char = fgetc($fh))){
//        echo $char;
//    }


    echo '<br/>';
    //关闭文件  fclose()    将handle指向的文件关闭
    fclose($fh);
//    var_dump($fh);
    echo '<br />';



?>