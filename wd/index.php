    <?php
        require_once ('./include/config.php');
        // 轮播图
        $sql = "SELECT * FROM wd_banner";
        $ban_data = get_all($sql);

        // 文章分类
        $sql = "SELECT * FROM wd_article_cate LIMIT 2";
        $art_cate = get_all($sql);

        // 查询新闻
        $sql = "SELECT art_title, art_time FROM wd_article WHERE artcate_id = 1 ORDER BY art_time DESC LIMIT 4";
        $news = get_all($sql);

        // 查询通知
        $sql = "SELECT art_title, art_time FROM wd_article WHERE artcate_id = 2 ORDER BY art_time DESC LIMIT 4";
        $notice = get_all($sql);


    ?>

    <link rel="stylesheet" href="./css/index.css" />
    <?php require_once ('header.php');?>
    <!-- 内容部分 -->
    <div class="content">
        <!-- 轮播图 -->
        <div class="banner swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($ban_data as $item){ ?>
                <div class="swiper-slide">
                    <img class="banner-img" src="<?php echo $item['ban_addr']; ?>" />
                </div>
                <?php } ?>
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
                    <?php foreach ($art_cate as $item){ ?>
                        <div class="news fl link" id=""><?php echo $item['artcate_name'];?></div>
                    <?php } ?>
<!--                    <div class="news fl link" id="info-active">公司新闻</div>-->
<!--                    <div class="notice fl link">通知公告</div>-->
                    <a class="more fr" href="news_list.php"> >>more</a>
                    <p class="clearfix"></p>
                </div>
                <div class="info-box">
                    <ul class="news-box" id="box" style="display:block;">
                        <?php foreach ($news as $item){ ?>
                            <li>
                                <a class="fl" href="">· <?php echo $item['art_title']?></a>
                                <span class="fr">[<?php echo date("Y-m-d H:i:s",$item['art_time']);?>]</span>
                            </li>
                        <?php } ?>

                    </ul>
                    <ul class="notice-box news-box" id="box">
                        <?php foreach ($notice as $item){ ?>
                            <li>
                                <a class="fl" href="">· <?php echo $item['art_title']?></a>
                                <span class="fr">[<?php echo date("Y-m-d H:i:s",$item['art_time']);?>]</span>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <ul class="service">
                <li>
                    <img src="./images/shirt.png" alt="">
                    <div class="text">
                        <h3>人才招聘</h3>
                        <h2>Job</h2>
                    </div>
                </li>
                <li>
                    <img src="./images/file.png" alt="">
                    <div class="text">
                        <h3>人才招聘</h3>
                        <h2>Job</h2>
                    </div>
                </li>
                <li>
                    <img src="./images/email.png" alt="">
                    <div class="text">
                        <h3>人才招聘</h3>
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

    <?php require_once ('footer.php');?>

<script type="text/javascript" src="./js/swiper.min.js"></script>
<script type="text/javascript">

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
    links[0].setAttribute('id','info-active');
    links[links.length-1].setAttribute('class','notice fl link');
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