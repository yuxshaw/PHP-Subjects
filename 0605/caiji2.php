<?php
    header("Content-type:text/html;charset=utf-8");
    echo '<pre>';
    // 1. 获取网页内容
    $data = file_get_contents('https://www.leiphone.com/category/sponsor/page/1');

    // 2. 第一个正则，获取‘业界’部分的页面
    $reg = '/<div class="lph-pageList list-pageList">.*?<div class="lph-page">/is';
    preg_match_all($reg,$data,$arr);

    // 3. 获取字符串
    $str = $arr[0][0];
//    echo $str;

    // 4. 第二个正则，获取 图片地址、标题、超链接、作者
    $reg1 = '/<img class=\'lazy\' data-original="(.*)" src=".*" title="(.*)" alt="" \/>.*<a href="(.*)" target=".*" title=".*" class="headTit">.*<div class="des">(.*)<\/div>.*<img src=".*" width="50" height="50" alt=""\/>(.*)				<\/a>/isU';
    preg_match_all($reg1,$str,$arr1);
//    print_r($arr1);

    $pics = $arr1[1];       //图片
    $titles = $arr1[2];     //标题
    $links = $arr1[3];      //超链接
    $authors = $arr1[5];    //作者

    foreach ($pics as $key => $item){
        //保存图片
        $pic = preg_replace('/\?.*/','',$item);
        $pic_name = pathinfo($pic,PATHINFO_BASENAME);
        copy($pic,'img/'.$pic_name);

        //保存标题
        $title = '<a href="'.$links[$key].'"><h3>'.$titles[$key].'</h3></a>';
//        echo $title;
        file_put_contents('title/art_'.$key.'.html',$title);

        $html = file_get_contents($links[$key]);
//        print_r($html);
        file_put_contents('html/art_'.$key.'.html',$html);

    }






