<?php $this->load->view('home/header'); ?>

    <section>
        <!-- 轮播图 -->
        <div class="banner">
            <div class="container-fluid">
                <div class="row">
                    <div id="laya-banner-1" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#laya-banner-1" data-slide-to="0" class="active"></li>
                            <li data-target="#laya-banner-1" data-slide-to="1"></li>
                            <li data-target="#laya-banner-1" data-slide-to="2"></li>
                        </ol>

                        <!-- banner图-->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img-hover" src="<?php echo base_url('static/home/images/'); ?>slide.jpg" alt="...">
                            </div>
                            <div class="item">
                                <img class="img-hover" src="<?php echo base_url('static/home/images/'); ?>slide.jpg" alt="...">
                            </div>
                            <div class="item">
                                <img class="img-hover" src="<?php echo base_url('static/home/images/'); ?>slide.jpg" alt="...">
                            </div>
                        </div>

                        <!-- 箭头 -->
                        <a class="left carousel-control" href="#laya-banner-1" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#laya-banner-1" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- laya引擎模块 -->
    <section id="laya-engine">
        <div class="container">
            <div class="row">
                <div class="title col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0 wow fadeInDown">
                    <h1>LayaFlash 引擎</h1>
                    <h2>让Flash技术变成开发HTML5产品的利器</h2>
                </div>
                <div class="row">
                    <div class="engine-feature wow slideInLeft" data-wow-delay="500ms">
                        <div
                            class="col-lg-4 col-md-5 col-sm-10 col-md-offset-0 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo base_url('static/home/images/'); ?>flash-001.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">快速Flash产品转换</h4>
                                    <p>Flash页游\手游仅需1个人7天即可转换为HTML5和APP游戏</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-10 col-md-offset-0 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo base_url('static/home/images/'); ?>flash-002.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">LayaFlash IDE</h4>
                                    <p>支持代码编译、调试、压缩与混淆加密、资源转换、在线文档等功能</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-5 col-sm-10 col-md-offset-0 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo base_url('static/home/images/'); ?>flash-003.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">HTML5零学习成本</h4>
                                    <p>AS3开发者可直接使用Flash开源框架和工具链进行开发HTML5</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-10 col-md-offset-0 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo base_url('static/home/images/'); ?>flash-004.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">性能媲美APP</h4>
                                    <p>LayaFlash引擎的重度游戏已运行于QQ空间等平台，性能媲美APP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LayaBox优势模块 -->
    <section id="laya-advantage">
        <div class="container">
            <div class="row">
                <!-- 图片 -->
                <div
                    class="adv-img col-lg-4 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1  wow slideInLeft">
                    <img class="img-hover img-responsive" src="<?php echo base_url('static/home/images/'); ?>air-bar.jpg" alt="">
                </div>
                <div
                    class="adv-detail col-lg-6 col-lg-offset-2 col-md-6 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 wow slideInRight">
                    <h1>LayaBox 优势</h1>
                    <div class="adv-box col-xs-12">
                        <div class="adv-icon col-xs-2">
                            <img src="<?php echo base_url('static/home/images/'); ?>ad01.png" alt="">
                        </div>
                        <div class="adv-content col-xs-10">
                            <p>快速上手，Flash程序员3小时掌握HTML5开发</p>
                        </div>
                    </div>
                    <div class="adv-box col-xs-12">
                        <div class="adv-icon col-xs-2">
                            <img src="<?php echo base_url('static/home/images/'); ?>ad02.png" alt="">
                        </div>
                        <div class="adv-content col-xs-10">
                            <p>4年优化打磨，LayaPlayer运行器性能媲美APP</p>
                        </div>
                    </div>
                    <div class="adv-box col-xs-12">
                        <div class="adv-icon col-xs-2">
                            <img src="<?php echo base_url('static/home/images/'); ?>ad03.png" alt="">
                        </div>
                        <div class="adv-content col-xs-10">
                            <p>超5亿的LayaPlayer移动设备安装量帮助CP发行</p>
                        </div>
                    </div>
                    <div class="adv-box col-xs-12">
                        <div class="adv-icon col-xs-2">
                            <img src="<?php echo base_url('static/home/images/'); ?>ad04.png" alt="">
                        </div>
                        <div class="adv-content col-xs-10">
                            <p>使用LayaFlash开发大型HTML5游戏的企业超100家</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- layabox产品家族 -->
    <section id="laya-family">
        <div class="container">
            <div class="row">
                <div class="family-title text-center wow fadeInDown">
                    <h1>LayaBox 产品家族</h1>
                </div>
                <div class="row pro-list  wow fadeIn" data-wow-delay="500ms">
                    <div class="col-lg-6 col-md-6 col-md-offset-0 col-sm-11 col-sm-offset-1 col-xs-11 col-xs-offset-1">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="<?php echo base_url('static/home/images/'); ?>pro001.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">LayaAir</h4>
                                <p>核心库仅100K左右的新一代HTML5引擎，支持AS3\TS\JS语言开发，支持2D\3D，非运行器模式下性能媲美APP。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-md-offset-0 col-sm-11 col-sm-offset-1 col-xs-11 col-xs-offset-1">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="<?php echo base_url('static/home/images/'); ?>pro002.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">LayaPublish</h4>
                                <p>Layabox发行业务，通过在H5产业链中的技术 桥梁优势，帮助CP获得流量支持。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-md-offset-0 col-sm-11 col-sm-offset-1 col-xs-11 col-xs-offset-1">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="<?php echo base_url('static/home/images/'); ?>pro003.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">LayaFlash</h4>
                                <p>使用Flash AS3语言开发H5的引擎框架，可在FB或FD中开发、调试、编译H5，也可快速将Flash页游\手游转换成H5游戏。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-md-offset-0 col-sm-11 col-sm-offset-1 col-xs-11 col-xs-offset-1">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="<?php echo base_url('static/home/images/'); ?>pro004.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">LayaStore</h4>
                                <p>嵌入式HTML5商城，APP只需嵌入20K的SDK 即可以获得托管式HTML5商店服务，进入流量 获利新时代。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-md-offset-0 col-sm-11 col-sm-offset-1 col-xs-11 col-xs-offset-1">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="<?php echo base_url('static/home/images/'); ?>pro005.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">LayaPlayer</h4>
                                <p>HTML5高速运行器，性能卓越、支持大型 HTML5游戏流畅运行，目前已植入QQ、百度 等20多家主流平台，安装量超5亿。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-md-offset-0 col-sm-11 col-sm-offset-1 col-xs-11 col-xs-offset-1">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="<?php echo base_url('static/home/images/'); ?>pro006.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">LayaOpen</h4>
                                <p>Layabox开放平台，整合了Laya提供的各项运 营，管理服务的服务，提供给游戏提供商和互 联网渠道的统一开放平台。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- laya游戏模块 -->
    <section id="laya-games">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="game-title pull-left">采用Layabox引擎的精彩游戏</h1>
                    <a href="#" class="more pull-right">更多</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="video col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <video id='my-video' class='video-js vjs-big-play-centered' controls preload='auto' width='370'
                        height='200' poster='<?php echo base_url('static/home/images/'); ?>video-post.png' data-setup='{}'>
                        <source src='<?php echo base_url("static/home/source/"); ?>layabox_product.mp4' type='video/mp4'>
                        <p class='vjs-no-js'>
                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                            <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                        </p>
                    </video>
                </div>
                <div class="game-list col-lg-7 col-md-7 col-md-offset-0 col-sm-12 col-xs-12 wow fadeInDown ">
                    <div class="text-center col-md-2 col-sm-3 col-xs-3">
                        <img class="img-responsive img-rounded" src="<?php echo base_url('static/home/images/'); ?>game_01.gif" alt="">
                        <p class="text-center">猎刃2</p>
                    </div>
                    <div class="text-center col-md-2 col-sm-3 col-xs-3">
                        <img class="img-responsive img-rounded" src="<?php echo base_url('static/home/images/'); ?>game_02.gif" alt="">
                        <p class="text-center">上吧主公</p>
                    </div>
                    <div class="text-center col-md-2 col-sm-3 col-xs-3">
                        <img class="img-responsive img-rounded" src="<?php echo base_url('static/home/images/'); ?>game_03.gif" alt="">
                        <p class="text-center">醉西游</p>
                    </div>
                    <div class="text-center col-md-2 col-sm-3 col-xs-3">
                        <img class="img-responsive img-rounded" src="<?php echo base_url('static/home/images/'); ?>game_04.gif" alt="">
                        <p class="text-center">魔卡幻想</p>
                    </div>
                    <div class="text-center col-md-2 col-sm-3 col-xs-3">
                        <img class="img-responsive img-rounded" src="<?php echo base_url('static/home/images/'); ?>game_05.gif" alt="">
                        <p class="text-center">超能战队</p>
                    </div>
                    <div class="text-center col-md-2 col-sm-3 col-xs-3">
                        <img class="img-responsive img-rounded" src="<?php echo base_url('static/home/images/'); ?>game_06.gif" alt="">
                        <p class="text-center">刀塔大菠萝</p>
                    </div>
                    <div class="text-center col-md-2 col-sm-3 col-xs-3">
                        <img class="img-responsive img-rounded" src="<?php echo base_url('static/home/images/'); ?>game_07.gif" alt="">
                        <p class="text-center">轰三国</p>
                    </div>
                    <div class="text-center col-md-2 col-sm-3 col-xs-3">
                        <img class="img-responsive img-rounded" src="<?php echo base_url('static/home/images/'); ?>game_08.gif" alt="">
                        <p class="text-center">迷你猎人</p>
                    </div>
                    <div class="text-center col-md-2 col-sm-3 col-xs-3">
                        <img class="img-responsive img-rounded" src="<?php echo base_url('static/home/images/'); ?>game_09.gif" alt="">
                        <p class="text-center">萌挂三国</p>
                    </div>
                    <div class="text-center col-md-2 col-sm-3 col-xs-3">
                        <img class="img-responsive img-rounded" src="<?php echo base_url('static/home/images/'); ?>game_10.gif" alt="">
                        <p class="text-center">夺塔三国</p>
                    </div>
                    <div class="text-center col-md-2 col-sm-3 col-xs-3">
                        <img class="img-responsive img-rounded" src="<?php echo base_url('static/home/images/'); ?>game_11.gif" alt="">
                        <p class="text-center">英雄争霸</p>
                    </div>
                    <div class="text-center col-md-2 col-sm-3 col-xs-3">
                        <img class="img-responsive img-rounded" src="<?php echo base_url('static/home/images/'); ?>game_12.gif" alt="">
                        <p class="text-center">战争之门</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 合作伙伴 -->
    <section id="partner">
        <div class="container">
            <div class="row">
                <div class="par-title col-md-12">
                    <h1>合作伙伴<span>（排序不分先后）</span></h1>
                </div>
                <div class="row par-list text-center wow zoomIn">
                    <div class="col-md-2 col-sm-4 col-xs-4"><a href=""><img class="img-responsive img-rounded"
                                src="<?php echo base_url('static/home/images/'); ?>partner_01.jpg" alt=""></a></div>
                    <div class="col-md-2 col-sm-4 col-xs-4"><a href=""><img class="img-responsive img-rounded"
                                src="<?php echo base_url('static/home/images/'); ?>partner_02.jpg" alt=""></a></div>
                    <div class="col-md-2 col-sm-4 col-xs-4"><a href=""><img class="img-responsive img-rounded"
                                src="<?php echo base_url('static/home/images/'); ?>partner_03.jpg" alt=""></a></div>
                    <div class="col-md-2 col-sm-4 col-xs-4"><a href=""><img class="img-responsive img-rounded"
                                src="<?php echo base_url('static/home/images/'); ?>partner_04.jpg" alt=""></a></div>
                    <div class="col-md-2 col-sm-4 col-xs-4"><a href=""><img class="img-responsive img-rounded"
                                src="<?php echo base_url('static/home/images/'); ?>partner_05.jpg" alt=""></a></div>
                    <div class="col-md-2 col-sm-4 col-xs-4"><a href=""><img class="img-responsive img-rounded"
                                src="<?php echo base_url('static/home/images/'); ?>partner_06.jpg" alt=""></a></div>
                    <div class="col-md-2 col-sm-4 col-xs-4"><a href=""><img class="img-responsive img-rounded"
                                src="<?php echo base_url('static/home/images/'); ?>partner_07.jpg" alt=""></a></div>
                    <div class="col-md-2 col-sm-4 col-xs-4"><a href=""><img class="img-responsive img-rounded"
                                src="<?php echo base_url('static/home/images/'); ?>partner_08.jpg" alt=""></a></div>
                    <div class="col-md-2 col-sm-4 col-xs-4"><a href=""><img class="img-responsive img-rounded"
                                src="<?php echo base_url('static/home/images/'); ?>partner_09.jpg" alt=""></a></div>
                    <div class="col-md-2 col-sm-4 col-xs-4"><a href=""><img class="img-responsive img-rounded"
                                src="<?php echo base_url('static/home/images/'); ?>partner_10.jpg" alt=""></a></div>
                    <div class="col-md-2 col-sm-4 col-xs-4"><a href=""><img class="img-responsive img-rounded"
                                src="<?php echo base_url('static/home/images/'); ?>partner_11.jpg" alt=""></a></div>
                    <div class="col-md-2 col-sm-4 col-xs-4"><a href=""><img class="img-responsive img-rounded"
                                src="<?php echo base_url('static/home/images/'); ?>partner_12.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </section>


<?php $this->load->view('home/footer'); ?>