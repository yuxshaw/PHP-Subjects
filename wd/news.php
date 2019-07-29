    <?php
        require_once ('./include/config.php');

        // 查询文章分类
        $sql = "SELECT artcate_id, artcate_name FROM wd_article_cate";
        $art_cate = get_all($sql);

        if (!empty($_GET) && isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM wd_article WHERE art_id = $id";
            $article = get_one($sql);
        }else{
            die('404');
        }

    ?>

    <link rel="stylesheet" href="./css/news.css" />
    <?php require_once ('header.php');?>


    <!-- 内容部分 -->
    <div class="content">
        <!-- 广告图 -->
        <div class="banner">
            <img src="images/banner04.png" alt="">
            <img class="rope" src="images/rope.png" alt="">
        </div>
        <!-- 侧边栏 -->
        <aside class="fl">
            <p>News Center</p>
            <h2>新闻中心</h2>
            <ul>
<!--                <li><a href="news_list.php">公司新闻</a></li>-->
<!--                <li><a href="">通知公告</a></li>-->
<!--                <li><a href="">科技咨询</a></li>-->
                <?php foreach ($art_cate as$item){ ?>
                    <li><a class="<?php if ($item['artcate_id'] == $article['artcate_id']){echo 'active';} ?>" href="news_list.php?cate=<?php echo $item['artcate_id'];?>"><?php echo $item['artcate_name'];?></a></li>
                <?php } ?>
            </ul>
        </aside>
        <!-- 文字内容 -->
        <article class="fl">
            <div class="top">
                <h2 class="fl">新闻中心</h2>
                <span class="fr">首页 > 新闻中心 > 公司新闻</span>
                <div class="clearfix"></div>
            </div>
            <div class="center">
                <div class="left fl">
                    <ul>
                        <li>
                            <h2>Asaweb</h2>
                            <h3>NOTICE</h3>
                        </li>
                        <li>
                            <img src="images/mic.png" alt="">
                        </li>
                    </ul>
                </div>
                <div class="right fl">
                    <p>
                        “ <span>web</span>最近的消息告诉你。<br>
                        多种多样的消息迅速转达给您。 ”
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="bottom">
                <ul>
                    <li>
                        <span>主题</span>
                        <h2><?php echo $article['art_title'];?></h2>
                    </li>
                    <li>
                        <span>作者</span>
                        <h3><?php echo $article['art_author'];?></h3>
                        <span class="sp">日期</span>
                        <h3><?php echo date("Y-m-d H:i:s",$article['art_time']);?></h3>
                    </li>
                    <li>
                        <p><?php echo $article['art_content'];?></p>
                    </li>
                </ul>
            </div>
        </article>
        <div class="clearfix"></div>
    </div>


        <?php require_once ('footer.php');?>