    <?php
        require_once ('./include/config.php');

        // 查询设备分类
        $sql = "SELECT * FROM wd_product_cate";
        $procate = get_all($sql);

        if (!empty($_GET) && isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM wd_product WHERE pro_id = $id";
            $article = get_one($sql);
        }else{
            die('404');
        }

    ?>
    <link rel="stylesheet" href="./css/product_detail.css" />
    <?php require_once ('header.php');?>


    <!-- 内容部分 -->
    <div class="content">
        <!-- 广告图 -->
        <div class="banner">
            <img src="images/banner05.png" alt="">
            <!-- <img class="rope" src="images/rope.png" alt=""> -->
        </div>
        <!-- 侧边栏 -->
        <aside class="fl">
            <p>PRODUCT</p>
            <h2>产品展示</h2>
            <ul>
                <?php foreach ($procate as $item){ ?>
                    <li><a class="<?php if ($item['procate_id'] == $article['procate_id']){echo 'active';} ?>" href="product_list.php?cate=<?php echo $item['procate_id'];?>"><?php echo $item['procate_name'];?></a></li>
                <?php }?>
<!--                <li><a href="product_list.php">手机设备</a></li>-->
<!--                <li><a href="">电脑设备</a></li>-->
<!--                <li><a href="">摄像设备</a></li>-->
<!--                <li><a href="">监控设备</a></li>-->
            </ul>
        </aside>
        <!-- 文字内容 -->
        <article class="fl">
            <div class="top">
                <h2 class="fl">产品介绍</h2>
                <span class="fr">首页 > 产品展示</span>
                <div class="clearfix"></div>
            </div>
            <div class="center">
                <div class="left fl" style="display: block;">
                    <h1>New</h1>
                    <h2>PRODUCT</h2>
                </div>
                <div class="left img fl">
                    <img src="images/key2.jpg" alt="">
                </div>
                <div class="left img fl">
                    <img src="images/key3.jpg" alt="">
                </div>
                <div class="right fr">
                    <ul class="list">
                        <li>
                            <span>产品&emsp;&emsp;&emsp;</span>
                            <p><?php echo $article['pro_name']; ?></p>
                        </li>
                        <li>
                            <span>大小&emsp;&emsp;&emsp;</span>
                            <p><?php echo $article['pro_size']; ?></p>
                        </li>
                        <li>
                            <span>出厂日期&emsp;</span>
                            <p><?php echo date("Y-m-d H:i:s",$article['pro_time']); ?></p>
                        </li>
                        <li>
                            <span>配件&emsp;&emsp;&emsp;</span>
                            <p>
                                <?php echo $article['pro_desc']; ?>
                            </p>
                        </li>
                    </ul>
                    <ul class="list2">
                        <li><img src="images/key1.jpg" alt=""></li>
                        <li><img src="images/key2.jpg" alt=""></li>
                        <li><img src="images/key3.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <ul class="list3">
                    <li>
                        <img src="images/asa1.png" alt="">
                        <p>ASA SG1209</p>
                    </li>
                    <li>
                        <img src="images/asa2.png" alt="">
                        <p>ASA SG0330</p>
                    </li>
                    <li>
                        <img src="images/asa3.png" alt="">
                        <p>ASA GI5804</p>
                    </li>
                    <li>
                        <img src="images/asa4.png" alt="">
                        <p>ASA GI9160</p>
                    </li>
                    <img class="ll" src="images/left.png" alt="">
                    <img class="rr" src="images/right.png" alt="">
                </ul>
            </div>
            <div class="bottom">
                <div class="title">
                    <a href="">产品特征</a>
                    <a href="">产品规格</a>
                </div>
                <ul class="list4">
                    <li>
                        <img class="fl" src="images/phone.png" alt="">
                        <div class="fl">
                            <h1>01. MP3 Player</h1>
                            <p>输入产品的简要说明在产品上，输入产品简要的简要说明 包含产品的介绍去的简要说明。</p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <img class="fl" src="images/mic2.png" alt="">
                        <div class="fl">
                            <h1>02. 强大的内置扬声器</h1>
                            <p>输入产品的简要说明在产品上，输入产品简要的简要说明 包含产品的介绍去的简要说明。</p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <img class="fl" src="images/time.png" alt="">
                        <div class="fl">
                            <h1>03. 高速响应无残影率</h1>
                            <p>输入产品的简要说明在产品上，输入产品简要的简要说明 包含产品的介绍去的简要说明。</p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
        </article>
        <div class="clearfix"></div>
    </div>


    <?php require_once ('footer.php');?>
<script>

    $(function(){
        $(".list2 > li").click(function(){
            var index = $(this).index();
            // console.log(index);
            var imgs = $(".center > div");
            // console.log(imgs);
            $(imgs.get(index)).slideDown(1000).siblings(".left").hide();
        });
    });

</script>