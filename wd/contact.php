    <?php
        require_once ('./include/config.php');

    ?>

    <link rel="stylesheet" href="./css/contact.css" />
    <?php require_once ('header.php');?>


    <!-- 内容部分 -->
    <div class="content">
        <!-- 广告图 -->
        <div class="banner">
            <img src="images/banner03.png" alt="">
            <img class="rope" src="images/rope.png" alt="">
        </div>
        <!-- 侧边栏 -->
        <aside class="fl">
            <p>About Us</p>
            <h2>关于我们</h2>
            <ul>
                <li><a href="ceo.php">CEO致辞</a></li>
                <li><a href="history.php">公司历史</a></li>
                <li><a href="">企业文化</a></li>
                <li><a href="">组织机构</a></li>
                <li><a href="">合作伙伴</a></li>
                <li><a href="contact.php">联系我们</a></li>
            </ul>
        </aside>
        <!-- 文字内容 -->
        <article class="fl">
            <div class="top">
                <h2 class="fl">关于我们</h2>
                <span class="fr">首页 > 关于我们 > 联系我们</span>
                <div class="clearfix"></div>
            </div>
            <div class="center">
                <iframe src="bdmap.php" frameborder="0" width="680px" height="400px" scrolling=no></iframe>
            </div>
            <div class="bottom">
                <h2>详细地址</h2>
                <ul>
                    <li>地址&emsp;&emsp;<span>- 广东省广州市海珠区新港西路231号3栋4层（都城快餐楼上）</span></li>
                    <li>联系&emsp;&emsp;<span>- 020-88888888</span></li>
                    <li>E-mail&emsp;<span>- test@wengdo.com</span></li>
                    <li>地铁&emsp;&emsp;<span>- 暂无</span></li>
                    <li>公交&emsp;&emsp;<span>- 暂无</span></li>
                    <li>自驾&emsp;&emsp;<span>- 暂无</span></li>
                </ul>
            </div>
        </article>
        <div class="clearfix"></div>
    </div>


    <?php require_once ('footer.php');?>