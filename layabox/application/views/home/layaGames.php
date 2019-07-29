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
                        </ol>

                        <!-- banner图-->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img  style="width: 100%;" class="img-hover" src="<?php echo base_url('static/home/images/'); ?>game-slider-01.jpg" alt="...">
                            </div>
                            <div class="item">
                                <img  style="width: 100%;" class="img-hover" src="<?php echo base_url('static/home/images/'); ?>game-slider-02.jpg" alt="...">
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

    <!-- 游戏展示模块 -->
    <section id="game-show">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="show-img col-lg-4 col-md-4 wow slideInLeft">
                        <img src="<?php echo base_url('static/home/images/'); ?>game_bg_02.png" alt="">
                    </div>
                    <div class="col-lg-8 col-md-8 wow slideInRight">
                        <div class="text-right show-title">
                            <h2>猎刃2</h2>
                            <p class="pull-right">
                                2015年Q版魔幻手游诚心之作，超魔幻ARPG之作！！！无可挑剔的简单操作，无与伦比的爽快打击感，无处不在的惊
                                喜！无穷无尽的回忆！全部技能100%还原，高清华丽特效，体验视觉盛宴；超写实画风，完美重现经典副本；让我们一
                                起来，挑战恶魔，乱斗魔兽！
                            </p>
                        </div>
                        <div class="show-icon text-right">
                            <div class="col-md-6 col-sm-6 col-xs-6 img-responsive"><img src="<?php echo base_url('static/home/images/'); ?>game01.png" alt=""></div>
                            <div class="col-md-6 col-sm-6 col-xs-6 img-responsive"><img src="<?php echo base_url('static/home/images/'); ?>game02.png" alt=""></div>
                            <div class="col-md-6 col-sm-6 col-xs-6 img-responsive"><img src="<?php echo base_url('static/home/images/'); ?>game03.png" alt=""></div>
                            <div class="col-md-6 col-sm-6 col-xs-6 img-responsive"><img src="<?php echo base_url('static/home/images/'); ?>game04.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-8 col-md-8 wow slideInLeft">
                            <div class=" show-title">
                                <h2>猎刃2</h2>
                                <p">
                                    《上吧主公》是一款以三国为背景Q版卡牌游戏，游戏与普通三国题材不同，它以萌萌哒猫咪为三国众名将构筑出别具一
                                    格的游戏世界观。画面Q萌，技能华丽炫酷，集养成 、 收集 、策略 、卡牌于一体。三国初始群雄争霸，奇妙的名将会帮
                                    你掌握胜算左右战况
                                </p>
                            </div>
                            <div class="show-icon">
                                <div class="col-md-6 col-sm-6 col-xs-6 img-responsive"><img src="<?php echo base_url('static/home/images/'); ?>game05.png" alt=""></div>
                                <div class="col-md-6 col-sm-6 col-xs-6 img-responsive"><img src="<?php echo base_url('static/home/images/'); ?>game06.png" alt=""></div>
                                <div class="col-md-6 col-sm-6 col-xs-6 img-responsive"><img src="<?php echo base_url('static/home/images/'); ?>game07.png" alt=""></div>
                                <div class="col-md-6 col-sm-6 col-xs-6 img-responsive"><img src="<?php echo base_url('static/home/images/'); ?>game08.png" alt=""></div>
                            </div>
                        </div>
                        <div class="show-img col-lg-4 col-md-4 wow slideInRight">
                            <img src="<?php echo base_url('static/home/images/'); ?>game_bg_01.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 更多游戏列表 -->
    <section id="game-list">
        <div class="container">
            <div class="row">
                <div class=" col-xs-12 list-title ">
                    <h2>更多游戏</h2>
                </div>
                <div class="list-box col-xs-12">
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game09.png" alt="">
                        <p>醉西游</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game10.png" alt="">
                        <p>摩卡幻想</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game11.png" alt="">
                        <p>超能战队</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game12.png" alt="">
                        <p>轰三国</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game13.png" alt="">
                        <p>刀塔大菠萝</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game14.png" alt="">
                        <p>迷你猎人</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game15.png" alt="">
                        <p>萌挂三国</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game16.png" alt="">
                        <p>战争之门</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game17.png" alt="">
                        <p>英雄争霸</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game18.png" alt="">
                        <p>二战传奇</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game19.png" alt="">
                        <p>龙吟三国</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game20.png" alt="">
                        <p>哟狐狸精</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game21.png" alt="">
                        <p>熊来啦</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game22.png" alt="">
                        <p>我爱我家</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game23.png" alt="">
                        <p>夺塔三国</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game24.png" alt="">
                        <p>西游快跑</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game25.png" alt="">
                        <p>德州扑克</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game26.png" alt="">
                        <p>神魔快打</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game27.png" alt="">
                        <p>鬼吹灯</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game28.png" alt="">
                        <p>挂机三国</p>
                    </div>
                    <div class="text-center  wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="<?php echo base_url('static/home/images/'); ?>game29.png" alt="">
                        <p>三国仙侠传</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('home/footer'); ?>