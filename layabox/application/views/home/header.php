<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <link rel="shortcut icon" href="<?php echo base_url('static/home/images/'); ?>favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('static/home/css/') ?>bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url('static/home/css/') ?>normalize.css">
    <link rel="stylesheet" href="<?php echo base_url('static/home/css/') ?>animate.css">
    <link rel="stylesheet" href="<?php echo base_url('static/home/css/') ?>video-js.css">
    <link rel="stylesheet" href="<?php echo base_url('static/home/css/') ?>style.css">
</head>

<body>
    <!-- navd导航栏 -->
    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
            <!-- 汉堡菜单 -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url('static/home/images/'); ?>logo.png" alt="">
                </a>
            </div>

            <!-- 导航链接 -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php foreach($nav as $item){ ?>
                        <li><a href="<?php echo $item['nav_url']; ?>"><?php echo $item['nav_name']; ?></a></li>
                    <?php }?>
                    <!-- <li class="active"><a href="index.html">首页<span class="sr-only">(current)</span></a></li>
                    <li><a href="layaFamily.html">Laya家族</a></li>
                    <li><a href="layaGames.html">游戏</a></li>
                    <li><a href="layaNews.html">新闻动态</a></li>
                    <li><a href="#">开发者中心</a></li>
                    <li><a href="#">开发者社区</a></li>
                    <li><a href="#">开放平台</a></li>
                    <li><a href="aboutUs.html">关于我们</a></li> -->
                </ul>
                <!-- 语言选择 -->
                <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Language <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Engilsh</a></li>
                            <li><a href="#">简体中文</a></li>
                            <li><a href="#">繁体中文</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>