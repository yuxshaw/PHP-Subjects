<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>金陵贸易有限公司</title>
    <link type="text/css" rel="stylesheet" href="static/style/style.css" />
    <link rel="stylesheet" href="includes/page/css.css">
</head>

<body>
<div class="header">
    <h1 class="logo" title="金陵贸易有限公司"><a href="index.php"><img src="static/images/logo.gif" alt="金陵贸易有限公司" /></a></h1>
    <p class="top_r"><a href="#" class="btn_i">设为主页</a><a href="#" class="btn_f">收藏本站</a></p>
</div>
<div class="nav">
    <div class="nav_left"></div>
    <ul>

        <{*li class="sel"><a href="index.php">首  页</a></li>
        <li><a href="about_us.php">公司简介</a></li>
        <li><a href="product_list.php">产品展示</a></li>
        <li><a href="info.php">行业资讯</a></li>
        <li><a href="guestbook.php">客户留言</a></li>
        <li><a href="contact_us.php" class="nobg">联系我们</a></li*}>

        <{foreach from=$nav item=val}>
            <li><a href="<{$val['nav_url']}>"><{$val['nav_name']}></a></li>
        <{/foreach}>


    </ul>
    <div class="time" id="showTime">&nbsp;</div>
    <div class="nav_right"></div>
</div>
<div class="banner">
    <a href="#"><img src="static/images/banner.jpg" align="banner" /></a>
</div>