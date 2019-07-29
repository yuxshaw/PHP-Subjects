<?php

function geturl($url1)
{
    // 1.初始化
    $ch = curl_init();

    //设置选项
    curl_setopt($ch, CURLOPT_URL, $url1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    //3.执行并获取html文档内容，可用echo 输出
    $output = curl_exec($ch);

    //4.关闭
    curl_close($ch);

    //5.返回结果
    return $output;

}
if(isset($_POST) && !empty($_POST)) {
    $article = $_POST['article'];
    $pag = $_POST['pag'];
//    caiji($article,$pag);
    if(!is_dir($article)){
        mkdir($article);
        mkdir($article.'/img3');
        mkdir($article.'/title3');
        mkdir($article.'/html3');
        mkdir($article.'/autor3');
    }
    caiji($article,$pag);

}
function caiji($article,$pag){
    $url1 = 'https://www.leiphone.com';
    geturl($url1);

    $url = 'https://www.leiphone.com/category/'.$article.'/page/'.$pag;
    $html = geturl($url);
//第一次匹配
    $reg = '/<div class="lph-pageList list-pageList">.*?<div class="lph-page">/is';
    preg_match_all($reg, $html, $arr);
//获取字符串
    $str = $arr[0][0];
//第二次匹配
    $reg1 = '/<img class=\'lazy\' data-original="(.*)" src=".*" title="(.*)" alt="" \/>.*<a href="(.*)" target=".*" title=".*" class="headTit">.*<div class="des">(.*)<\/div>.*<a href="(.*)" target="_blank" class="aut" rel="nofollow">.*alt=""\/>(.*)				<\/a>/isU';
    preg_match_all($reg1, $str, $arr1);
//echo '<pre>';
//var_dump($arr1);
    $pics = $arr1[1];
    $titles = $arr1[2];
    $links = $arr1[3];
    $autors = $arr1[5];
    foreach ($pics as $key => $item) {
        //保存图片
        $pic = preg_replace('/\?.*/', '', $item);
        $pic_name = pathinfo($pic, PATHINFO_BASENAME);
        copy($pic, $article."/img3/" . $pic_name);
        //文章标题
        $title = '<a href="' . $links[$key] . '"><h3>' . $titles[$key] . '</h3></a>';
        file_put_contents($article."/title3/title_" . $key . '.html', $title);

        $html = file_get_contents($links[$key]);
//    file_put_contents('html1/'.iconv('utf-8','gbk',$titles[$key]).'.html',$html);
        file_put_contents($article."/html3/art_" . $key . '.html', $html);

        $autor = file_get_contents($autors[$key]);
//    var_dump($autor);
//    file_put_contents('autor/'.iconv('utf-8','gbk',$autors[$key]).'.html',$autor);
        file_put_contents($article."/autor3/autor_" . $key . '.html', $autor);
    }
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
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

<form action="" method="post">
    文章分类：
    <select name="article" id="" class="form-control">
        <option value="sponsor">业界</option>
        <option value="aijuejinzhi">AI</option>
        <option value="fintech">金融科技</option>
    </select>
    <br /> <br />
    文章页码：
    <input type="text" class="form-control" name="pag"><br />
    <input type="submit" class="btn btn-primary">
</form>





<script>
</script>
</body>
</html>
