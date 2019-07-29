<?php
    require_once ('./include/config.php');
    $sql = "SELECT * FROM jl_nav";
    $nav = get_all($sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/common.css">
    <script src="./include/jquery-3.1.1.js"></script>
    <script>
        $(function () {
            $.get(
                'https://www.tianqiapi.com/api/?='+(new Date()),
                {version:"v1",city:"上海"},
                function (info) {
                    console.log(info);
                    var city = info.city;
                    var cityid = info.cityid;
                    var data = info.data[0];    //当日

                    var skin_src = "https://tianqiapi.com/api.php?style=tx&skin=cherry&cityid="+cityid+"&city="+city;
                    $('#frame').attr("src",skin_src);

                }
            )
        })
    </script>
</head>


<body>
<div class="wrapper">
    <div class="bg"></div>
    <!-- header -->
    <header>
        <!-- logo -->
        <div class="logo">
            <a href="index.php">
                <img class="fl" src="images/logo.png" alt="">
                <h1>金陵贸易有限公司</h1>
                <div class="clear"></div>
            </a>
            <ul class="fun fr">
                <li>
                    <a href=""><img src="images/house.png" alt=""> 设为首页</a>
                </li>
                <li>
                    <a href=""><img src="images/book.png" alt=""> 收藏本站</a>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
        <!-- nav -->
        <nav>
            <ul class="nav-bar fl">
                <?php foreach ($nav as $item){ ?>
                    <li>
                        <a href="<?php echo $item['nav_url']; ?>"><?php echo $item['nav_name']; ?></a>
                    </li>
                <?php } ?>
<!--                <li>-->
<!--                    <a href="index.php">首页</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="about_us.php">公司简介</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="product.php">产品展示</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="knowledge.php">行业知识</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="gbook.php">客户留言</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="contact.php">联系我们</a>-->
<!--                </li>-->
            </ul>
            <div class="time fr">
                <h3 id="time">
                    <!-- 2009-04-08 20:08 -->
                    <iframe id="frame" scrolling="no" src="" frameborder="0" width="90%" height="20" allowtransparency="true"></iframe>
                </h3>
            </div>
            <div class="clear"></div>
        </nav>
        <div class="banner">
            <img src="images/banner.jpg" alt="">
            <div class="bg"></div>
        </div>
    </header>
