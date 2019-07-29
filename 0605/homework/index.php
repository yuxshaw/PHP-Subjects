<?php


    function geturl($url1){
        // 1.初始化
        $ch = curl_init();
        // 2.设置选项
        curl_setopt($ch,CURLOPT_URL,$url1);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);      // 抓取结果直接返回（如果为0，则直接输出内容到页面）
        curl_setopt($ch,CURLOPT_HEADER,0);              // 不需要页面的HTTP头
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
//        curl_setopt($ch,CURLOPT_DNS_CACHE_TIMEOUT);
        // 3.执行并获取HTML文档内容，可用echo输出内容
        $output = curl_exec($ch);
        // 4.关闭
        curl_close($ch);
        // 5.返回结果
        return $output;
    }



    function geturl1($type,$page){

        $url1 = 'https://www.leiphone.com';
        geturl($url1);

        $url = 'https://www.leiphone.com/category/'.$type.'/page/'.$page;
        $html = geturl($url);

        // 第一次匹配
        $reg = '/<div class="lph-pageList list-pageList">.*?<div class="lph-page">/is';
        preg_match_all($reg,$html,$arr);

        // 获取字符串
        $str = $arr[0][0];

        // 第二次匹配
        $reg1 = '/<img class=\'lazy\' data-original="(.*)" src=".*" title="(.*)" alt="" \/>.*<a href="(.*)" target=".*" title=".*" class="headTit">.*<div class="des">(.*)<\/div>.*<a href="(.*)" target=".*" class="aut" rel="nofollow">.*alt=""\/>(.*)				<\/a>/isU';
        preg_match_all($reg1,$str,$arr1);

        $pics = $arr1[1];       //图片
        $titles = $arr1[2];     //标题
        $links = $arr1[3];      //超链接
        $aulinks = $arr1[5];    //作者主页链接
        $authors = $arr1[6];    //作者


        foreach ($pics as $key => $item){
            // 保存图片
            $pic = preg_replace('/\?.*/','',$item);
            $pic_name = pathinfo($pic,PATHINFO_BASENAME);
            copy($pic,$type.'/img/'.$pic_name);
             echo '图片保存成功！<hr/>';

            // 保存标题
            $title = '<a href="'.$links[$key].'"><h3>'.$titles[$key].'</h3></a>';
            file_put_contents($type.'/title/Tit_'.$key.'.html',$title);
             echo '标题保存成功！<hr/>';

            // 保存内容
            $art = file_get_contents($links[$key]);
            file_put_contents($type.'/html/art_'.$key.'.html',$art);
            //file_put_contents('pages/html/'.iconv('utf-8','gbk',$titles[$key]).'.html',$art);
             echo '内容链接保存成功！<hr/>';

            // 作者主页
            $author = file_get_contents($aulinks[$key]);
            file_put_contents($type.'/author/'.iconv('utf-8','gbk',$authors[$key]).'.html',$author);
             echo '作者主页保存成功！<hr/>';
        }

    }
    if (isset($_POST) && !empty($_POST)){
        $type = $_POST['type'];
        $page = $_POST['page'];
        if (!is_dir($type)){
            mkdir($type);
            mkdir($type.'/img');
            mkdir($type.'/title');
            mkdir($type.'/html');
            mkdir($type.'/author');
        }
        geturl1($type,$page);
    }



?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        section{
            margin: 100px auto;
        }
    </style>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <form action="" method="post" class="form-inline">
                        <div class="form-group">
                            <label for="exampleInputName2">选择分类：</label>
                            <select name="type" class="form-control">
                                <option value="sponsor">业界</option>
                                <option value="ai">人工智能</option>
                                <option value="transportation">智能驾驶</option>
                                <option value="aijuejinzhi">AI+</option>
                                <option value="robot">机器人</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">选择页码：</label>
                            <input type="text" class="form-control" id="exampleInputEmail2" name="page">
                        </div>
                        <input type="submit" class="btn btn-success" value="提交采集"></input>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>