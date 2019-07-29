<?php
    require_once ('./include/config.php');

    // 查询公告
    $sql = "SELECT art_title FROM jl_article WHERE artcate_id =2 LIMIT 3";
    $art = get_all($sql);

    // 查询链接
    $sql = "SELECT links_name FROM jl_links LIMIT 3";
    $link = get_all($sql);

?>

<!-- 侧边栏 -->
<aside class="fr">
    <div class="message">
        <img src="images/write.png" alt="">
        <a href="gbook.php">我要留言</a>
    </div>
    <div class="news">
        <h2>最新公告<span> News</span></h2>
        <ul>
            <?php foreach ($art as $item){ ?>
                <li><a href=""><?php echo $item['art_title'];?></a></li>
            <?php } ?>
<!--            <li><a href="">祝贺公司网站正式上线</a></li>-->
<!--            <li><a href="">禁止保温材料现场调配 保证...</a></li>-->
<!--            <li><a href="">节能65%烧结页岩空心砖面世</a></li>-->
        </ul>
    </div>
    <div class="links">
        <h2>友情链接<span> Links</span></h2>
        <ul>
            <?php foreach ($link as $item){ ?>
                <li><a href=""><?php echo $item['links_name'];?></a></li>
            <?php } ?>
<!--            <li><a href="">太平洋电脑网</a></li>-->
<!--            <li><a href="">中关村在线</a></li>-->
<!--            <li><a href="">中国政府网</a></li>-->
        </ul>
    </div>
</aside>
<div class="clear"></div>
</div>

