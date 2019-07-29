<?php

?>
<?php require_once ('common_data.php');?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>文豆电子网</title>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="css/common.css">
    <!-- 引入swiper的css文件 -->
    <link rel="stylesheet" href="./css/swiper.css" />
    <style>
        .swiper-pagination-bullet {
            width: 14px;
            height: 14px;
            border: thin solid rgba(255, 255, 255, .6);
            background-color: rgba(0, 0, 0, .4);
            z-index: 100;
        }

        .swiper-pagination-bullet-active {
            background-color: rgba(255, 255, 255, .7);
        }
    </style>

</head>

<body>
<!-- 头部 -->
<div class="header">
    <!-- logo部分 -->
    <div class="logo fl">
        <a href="index.php">
            <img src="./images/logo.png" />
        </a>
    </div>
    <!-- 导航部分 -->
    <div class="nav-box fr">
        <div class="login fr">
            <div class="box">
<!--                <a href="login.php">--><?php //echo (isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1)? $_COOKIE['username'] : '登录';?><!--</a>-->
                <?php echo (isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1)? '<a href="">'.$_COOKIE['username'].'</a>' : '<a href="login.php">登录</a>';?>
                <?php echo (isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1)? '<a href="logout.php">退出</a>' : '<a href="register.php">注册</a>';?>
<!--                <a href="register.php">注册</a>-->
                <a href="">帮助</a>
            </div>
        </div>
        <div class="clearfix"></div>
        <ul class="nav">
            <?php foreach ($nav_list as $item){ ?>
                <li>
                    <!-- 一级导航 -->
                    <a class="btn-active" href="<?php echo $item['nav_url'];?>"><?php echo $item['nav_name'];?></a>
                    <!-- 二级导航 -->
                    <ul class="nav-sub" style="display: none;">
                        <?php if (isset($item['son'])){ ?>
                            <?php foreach ($item['son'] as $v){ ?>
                        <li><a href="<?php echo $v['nav_url'];?>"><?php echo $v['nav_name'];?></a></li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </div>
    <!-- 清除浮动 -->
    <div class="clearfix"></div>
</div>

<script>
    var nav_sub = document.getElementsByClassName("nav-sub")[0];
    nav_sub.style.display = 'block'
</script>