<?php
    require_once ('./include/config.php');

    // 查询所有链接
    $sql = "SELECT * FROM jl_links";
    $links = get_all($sql);

    // 查询前3个产品
    $sql = "SELECT * FROM jl_product LIMIT 3";
    $pro = get_all($sql);

    // 查询前5条最新新闻
    $sql = "SELECT * FROM jl_article WHERE artcate_id = 2 ORDER BY art_time DESC LIMIT 5";
    $news = get_all($sql);

    // 查询前5条行业知识
    $sql = "SELECT * FROM jl_article WHERE artcate_id = 1 LIMIT 5";
    $knowledge = get_all($sql);

?>
<?php require_once ('header.php');?>
        <!-- content -->
        <div class="content">
            <div class="top">
                <div class="left fl">
                    <div>
                        <h2>公司简介<span> About us</span></h2>
                    </div>
                    <p>
                        我公司前身是金能保温材料经营部，因扩大经营规模，于2009年3月变更为金陵
                        贸易有限公 。1994年开始从事保温、保冷、吸音、耐火、化工、建材等产品的
                        经营贸易，对控制产品质量方面具备非常好的经验，是中国东南地区最大的保温
                        材料经营贸易公司之一。公司经营宗旨是：诚信经营，质量第一。欢迎您的洽谈！
                        1994年开始从事保温、保冷、吸音、耐火、化工、建材等产品的经营贸易，对控
                        制产品质量方面具备非常好的经验，是中国东南地区最大的保温材料经营贸易公
                        司之一。公司经营宗旨是：诚信经营，质量第一。欢迎您的洽谈！
                        <a href="about_us.php">查看更多..</a>
                    </p>
                </div>
                <div class="right fr">
                    <div>
                        <h2>最新公告<span> News</span></h2>
                    </div>
                    <ul>
                        <?php foreach ($news as $item){ ?>
                            <li>
                                <a  href=""><?php echo $item['art_title'];?><span><?php echo date('Y-m-d',$item['art_time']); ?></span></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>

            <!-- center -->
            <div class="center">
                <div class="left fl">
                    <div>
                        <h2 class="fl">产品展示<span> Products</span></h2>
                        <a href="product.php">更多...</a>
                        <div class="clear"></div>
                    </div>
                    <ul>
                        <?php foreach ($pro as $item){ ?>
                            <li>
                                <img src="<?php echo $item['pro_img']; ?>" alt="">
                                <p><?php echo $item['pro_name'];?></p>
                            </li>
                        <?php } ?>
<!--                        <li>-->
<!--                            <img src="images/img01.jpg" alt="">-->
<!--                            <p>网格布</p>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <img src="images/img02.jpg" alt="">-->
<!--                            <p>橡塑板</p>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <img src="images/img03.jpg" alt="">-->
<!--                            <p>像素管</p>-->
<!--                        </li>-->
                    </ul>
                </div>
                <div class="right fr">
                    <div>
                        <h2 class="fl">行业知识<span> Knowledge</span></h2>
                        <a href="knowledge.php" class="more">更多...</a>
                        <div class="clear"></div>
                    </div>
                    <ul>
                        <?php foreach ($knowledge as $item){ ?>
                        <li>
                            <a  href=""><?php echo $item['art_title'];?><span><?php echo date('Y-m-d',$item['art_time']); ?></span></a>
                        </li>
                        <?php } ?>
<!--                        <li>-->
<!--                            <a  href="">禁止保温材料现场调配 保证节能建材真正... <span>2009-07-09</span></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a  href="">节能65%烧结页岩空心砖面世 <span>2009-07-09</span></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a  href="">节能减排推动建筑陶瓷企业科技创新 <span>2009-07-09</span></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a  href="">新型墙体材料合格率仅为85.1% <span>2009-07-09</span></a>-->
<!--                        </li>-->
                    </ul>
                </div>
                <div class="clear"></div>
            </div>

            <div class="bottom">
                <div class="hr">
                    <h2>友情链接<span> Links</span></h2>
                </div>
                <ul>
                    <?php foreach ($links as $item) {?>
                        <li><a href=""><?php echo $item['links_name']; ?></a></li>
                    <?php } ?>
<!--                    <li><a href="">凤 凰 网</a></li>-->
<!--                    <li><a href="">央 视 网</a></li>-->
<!--                    <li><a href="">中国政府网</a></li>-->
<!--                    <li><a href="">网　易</a></li>-->
<!--                    <li><a href="">太平洋电脑网</a></li>-->
<!--                    <li><a href="">凤 凰 网</a></li>-->
<!--                    <li><a href="">央 视 网</a></li>-->
<!--                    <li><a href="">中国政府网</a></li>-->
<!--                    <li><a href="">网　易</a></li>-->
<!--                    <li><a href="">太平洋电脑网</a></li>-->
<!--                    <li><a href="">凤 凰 网</a></li>-->
<!--                    <li><a href="">央 视 网</a></li>-->
<!--                    <li><a href="">中国政府网</a></li>-->
<!--                    <li><a href="">网　易</a></li>-->
<!--                    <li><a href="">太平洋电脑网</a></li>-->
                </ul>
                <div class="clear"></div>
            </div>
        </div>


<?php require_once ('footer.php');?>