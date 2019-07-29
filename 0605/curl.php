<?php
    echo '<pre>';
    function geturl($url){
        // 1.初始化
        $ch = curl_init();

        // 2.设置选项
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);      // 抓取结果直接返回（如果为0，则直接输出内容到页面）
        curl_setopt($ch,CURLOPT_HEADER,0);              // 不需要页面的HTTP头
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

        // 3.执行并获取HTML文档内容，可用echo输出内容
        $output = curl_exec($ch);

        // 4.关闭
        curl_close($ch);

        // 5.返回结果
        return $output;
    }
    $url = 'https://www.leiphone.com';
    $res = geturl($url);
//    var_dump($res);

    $url = 'https://www.leiphone.com/category/aijuejinzhi/page/2';
    $html = geturl($url);

    // 第一次匹配
    $reg = '/<div class="lph-pageList list-pageList">.*?<div class="lph-page">/is';
    preg_match_all($reg,$html,$arr);
//    print_r($arr);

    // 获取字符串
    $str = $arr[0][0];
//    echo $str;

    // 第二次匹配
    $reg1 = '/<img class=\'lazy\' data-original="(.*)" src=".*" title="(.*)" alt="" \/>.*<a href="(.*)" target=".*" title=".*" class="headTit">.*<div class="des">(.*)<\/div>.*<a href="(.*)" target=".*" class="aut" rel="nofollow">.*alt=""\/>(.*)				<\/a>/isU';
    preg_match_all($reg1,$str,$arr1);
//    print_r($arr1);

    $pics = $arr1[1];       //图片
    $titles = $arr1[2];     //标题
    $links = $arr1[3];      //超链接
    $aulinks = $arr1[5];    //作者主页链接
    $authors = $arr1[6];    //作者

    foreach ($pics as $key => $item){
        // 保存图片
        $pic = preg_replace('/\?.*/','',$item);
        $pic_name = pathinfo($pic,PATHINFO_BASENAME);
        copy($pic,'pages/img/'.$pic_name);

        // 保存标题
        $title = '<a href="'.$links[$key].'"><h3>'.$titles[$key].'</h3></a>';
        file_put_contents('pages/title/Tit_'.$key.'.html',$title);

        // 保存内容
        $art = file_get_contents($links[$key]);
        file_put_contents('pages/html/art_'.$key.'.html',$art);
//        file_put_contents('pages/html/'.iconv('utf-8','gbk',$titles[$key]).'.html',$art);

        // 作者主页
        $author = file_get_contents($aulinks[$key]);
        file_put_contents('pages/author/'.iconv('utf-8','gbk',$authors[$key]).'.html',$author);

    }
















