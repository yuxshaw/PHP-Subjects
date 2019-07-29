<?php
$data=array (
    0 => array (
        'id' => '1',
        'name' => '关于我们',
        'son' =>array (
            0 =>array (
                'id' => '6',
                'name' => 'ceo致词',
            ),
            1 => array (
                'id' => '7',
                'name' => '公司历史',
            ),
        ),
    ),
    1 => array (
        'id' => '2',
        'name' => '产品展示',
        'son'=>array (
            0 =>  array (
                'id' => '9',
                'name' => '产品3',
            ),
            1 => array (
                'id' => '8',
                'name' => '产品',
            ),
        ),
    ),
    2 => array (
        'id' => '5',
        'name' => '客户留言',
    ),
    3 => array (
        'id' => '3',
        'name' => '新闻中心',
        'son' => array (
            0 => array (
                'id' => '11',
                'name' => '新闻问下',
            ),
            1 =>  array (
                'id' => '10',
                'name' => '新闻'
            ),
        ),
    ),
    4 =>  array (
        'id' => '4',
        'name' => '人才招聘'
    ),
);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>文豆电子网</title>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/index.css" />
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
            <a href="index.html">
                <img src="./images/logo.png" />
            </a>
        </div>
        <!-- 导航部分 -->
        <div class="nav-box fr">
            <div class="login fr">
                <div class="box">
                    <a href="login.html">登录</a>
                    <a href="register.html">注册</a>
                    <a href="">帮助</a>
                </div>
            </div>
            <div class="clearfix"></div>
            <ul class="nav">
                <?php foreach ($data as $c1){?>
                    <li class="li-title">
                        <a class="btn-active" href=""><?php echo $c1['name'] ?></a>
                        <ul class="nav-sub">
                            <?php if (isset($c1['son'])){ ?>
                                <?php foreach ($c1['son'] as $c2){?>
                                    <li><a href=""><?php echo $c2['name']?></a></li>
                                <?php }?>
                            <?php }?>
                        </ul>
                    </li>
                <?php } ?>
                <div class="clearfix"></div>
            </ul>
        </div>
        <!-- 清除浮动 -->
        <div class="clearfix"></div>
    </div>
    <!-- 内容部分 -->
    <div class="content">
        <!-- 轮播图 -->
        <div class="banner swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="banner-img" src="./images/banner-01.jpg" />
                </div>
                <div class="swiper-slide">
                    <img class="banner-img" src="./images/banner-02.jpg" />
                </div>
            </div>

            <!-- 分页器 -->
            <ul class="pag">
                <!-- <li></li>
                    <li></li>
                    <li></li> -->
            </ul>
            <!-- 箭头按钮 -->
            <div class="button-prev">&lt;</div>
            <div class="button-next">&gt;</div>
        </div>
        <!-- 信息 -->
        <div class="info">
            <!-- 选项卡 -->
            <div class="tab">
                <div class="btn-box">
                    <div class="news fl link" id="info-active">公司新闻</div>
                    <div class="notice fl link">通知公告</div>
                    <a class="more fr" href=""> >>more</a>
                    <p class="clearfix"></p>
                </div>
                <div class="info-box">
                    <ul class="news-box" id="box" style="display:block;">
                        <li>
                            <a class="fl" href="">· web上半年人才录用向导 web上半年人才录用向导</a>
                            <span class="fr">[2019-01-01]</span>
                        </li>
                        <li>
                            <a class="fl" href="">· web上半年人才录用向导...</a>
                            <span class="fr">[2019-01-01]</span>
                        </li>
                        <li>
                            <a class="fl" href="">· web上半年人才录用向导...</a>
                            <span class="fr">[2019-01-01]</span>
                        </li>
                        <li>
                            <a class="fl" href="">· web上半年人才录用向导...</a>
                            <span class="fr">[2019-01-01]</span>
                        </li>
                    </ul>
                    <ul class="notice-box" id="box">
                        <li>
                            <a class="fl" href="">· web上半年人才录用向导...</a>
                            <span class="fr">[2019-01-01]</span>
                        </li>
                        <li>
                            <a class="fl" href="">· web上半年人才录用向导...</a>
                            <span class="fr">[2019-01-01]</span>
                        </li>
                        <li>
                            <a class="fl" href="">· web上半年人才录用向导...</a>
                            <span class="fr">[2019-01-01]</span>
                        </li>
                        <li>
                            <a class="fl" href="">· web上半年人才录用向导...</a>
                            <span class="fr">[2019-01-01]</span>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="service">
                <li>
                    <img src="./images/shirt.png" alt="">
                    <div class="text">
                        <h1>人才招聘</h1>
                        <h2>Job</h2>
                    </div>
                </li>
                <li>
                    <img src="./images/file.png" alt="">
                    <div class="text">
                        <h1>人才招聘</h1>
                        <h2>Job</h2>
                    </div>
                </li>
                <li>
                    <img src="./images/email.png" alt="">
                    <div class="text">
                        <h1>人才招聘</h1>
                        <h2>Job</h2>
                    </div>
                </li>
            </ul>
        </div>
        <!-- 产品 -->
        <div class="products">
            <div class="pro-box">
                <div>
                    <div class="pro-img fl">
                        <img src="./images/camera.png" alt="">
                    </div>
                    <div class="pro-info fl">
                        <h1 class="title"><span>New</span> product</h1>
                        <h2 class="type">ASA SG 1209</h2>
                        <p class="desc-1">最好的产品,坚持ASA</p>
                        <p class="desc-2">web开发的产品的特别系列系列系列</p>
                        <a class="more" href=""> >> more </a>
                    </div>
                </div>
                <div class="pro-prev">&lt;</div>
                <div class="pro-next">&gt;</div>
            </div>
            <div class="about-pro">
                <div class="left">
                    <img src="./images/earth.png" alt="">
                    <div class="text">
                        <h1>人才招聘</h1>
                        <h2>白日依山尽头，黄河入海流</h2>
                        <a href=""> >> more </a>
                    </div>
                </div>
                <span class="mid-bar"></span>
                <div class="right">
                    <img src="./images/diary.png" alt="">
                    <div class="text">
                        <h1>人才招聘</h1>
                        <h2>白日依山尽</h2>
                        <a href=""> >> more </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 关于 -->
        <div class="about">
            <ul class="info-list">
                <li>
                    <a class="btn sfq" id="btn-active" href="javascript:void(0);">01 公司历史 <span></span></a>
                    <ul class="about-info" style="display:block;">
                        <li class="about-txt">
                            <h1>BUSINESS INFO</h1>
                            <p>持续的企业延伸持续的企业延伸持续的企业延伸</p>
                            <a href=""> >> more </a>
                        </li>
                        <li class="about-img">
                            <img src="./images/building.png" alt="">
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="btn sfq" href="javascript:void(0);">02 企业文化 <span></span></a>
                    <ul class="about-info">
                        <li class="about-txt">
                            <h1>BUSINESS INFO</h1>
                            <p>持续的企业延伸持续的企业延伸持续的企业延伸</p>
                            <a href=""> >> more </a>
                        </li>
                        <li class="about-img">
                            <img src="./images/building.png" alt="">
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="btn sfq" href="javascript:void(0);">
                        03 服务指南 <span></span>
                    </a>
                    <ul class="about-info">
                        <li class="about-txt">
                            <h1>BUSINESS INFO</h1>
                            <p>持续的企业延伸持续的企业延伸持续的企业延伸</p>
                            <a href=""> >> more </a>
                        </li>
                        <li class="about-img">
                            <img src="./images/building.png" alt="">
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- 页脚 -->
    <div class="footer">
        <div class="left fl">
            <p>地址：广东省广州市海珠区新港西路231号3栋4层&emsp;联系人：乐乐&emsp;移动电话：13588888888&emsp;固定电话：020-1234567</p>
            <p> COPYRIGHT ⓒ WENGDO company. All rights reserved. </p>
        </div>
        <div class="right fr">
            <select name="href" id="">
                <option value="">友情链接</option>
                <option value=""><a href="http://www.baidu.com">百度</a></option>
                <option value=""><a href="http://www.qq.com">腾讯</a></option>
                <option value=""><a href="http://www.163.com">网易</a></option>
            </select>
        </div>
    </div>
</body>

</html>
<script type="text/javascript" src="./js/swiper.min.js"></script>
<script src="js/jquery-3.1.1.js"></script>
<script src="js/common.js"></script>
<script type="text/javascript">
    $(function () {
        $(".nav > li > ul:first").css('display','block');
        console.log($(".nav > li > ul:first"));
    });

    var swiper = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
            nextEl: '.button-next',
            prevEl: '.button-prev'
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false, /*介入之后的效果*/
        },
        pagination: {
            el: '.pag',
        },
    });




    //选项卡
    var links = document.querySelectorAll('.link');
    var boxes = document.querySelectorAll('#box');
    for (var i = 0; i < links.length; i++) {
        links[i].index = i;
        links[i].onclick = function () {
            for (var j = 0; j < links.length; j++) {
                links[j].setAttribute('id', '');
                boxes[j].style.display = 'none';
                this.setAttribute('id', 'info-active');
                boxes[this.index].style.display = 'block';
            }
        }
    }


    //手风琴
    var sfq = document.querySelectorAll('.sfq');
    console.log(sfq);
    var infos = document.querySelectorAll('.about-info');
    console.log(infos);
    for (var m = 0; m < sfq.length; m++) {
        sfq[m].index = m;
        sfq[m].onclick = function () {
            for (var n = 0; n < sfq.length; n++) {
                sfq[n].setAttribute('id', '');
                // infos[n].style.display = 'none';
                this.setAttribute('id', 'btn-active')
                infos[this.index].style.transition = 'height .2s linear';
            }
        }

    }


</script>