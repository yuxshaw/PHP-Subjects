<?php
    require_once ('./include/config.php');

    // 获取分页数量
    if (isset($_GET['page'])){
        $current = $_GET['page'];
    }else{
        $current = 1;
    }

    // 每页数据数量
    $limit = 10;

    // 每页的起始位置
    $n = ($current - 1) * $limit;

    // 最大页码数
    $size = 5;

    // 获取留言的总数
    $sql = "SELECT COUNT(art_id) AS count FROM jl_article WHERE artcate_id = 1";
    $count = get_one($sql);
    $count = $count['count'];

    // 查询所有的内容
    $sql = "SELECT art_title, art_time FROM jl_article WHERE artcate_id = 1 LIMIT $n,$limit";
    $konwledge = get_all($sql);
?>

    <link rel="stylesheet" href="css/knowledge.css">
    <link rel="stylesheet" href="./include/page/css.css">
<title>行业知识</title>
<?php require_once ('header.php');?>
        <!-- content -->
        <div class="content">
            <!-- 文章 -->
            <article class="fl">
                <div class="hd">
                    <h2>行业知识<span> Konwledge</span></h2>
                </div>
                <ul class="list">
                    <?php foreach ($konwledge as $item){ ?>
                        <li>
                            <a href=""><?php echo $item['art_title'];?><span><?php echo date("Y-m-d",$item['art_time']);?></span></a>
                        </li>
                    <?php } ?>
<!--                    <li>-->
<!--                        <a href="">胶粉的分类及在使用乳胶粉时需要注意的几... <span>2009-07-09</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">禁止保温材料现场调配 保证节能建材真正... <span>2009-07-09</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">节能65%烧结页岩空心砖面世 <span>2009-07-09</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">节能减排推动建筑陶瓷企业科技创新 <span>2009-07-09</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">新型墙体材料合格率仅为85.1% <span>2009-07-09</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">胶粉的分类及在使用乳胶粉时需要注意的几... <span>2009-07-09</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">禁止保温材料现场调配 保证节能建材真正... <span>2009-07-09</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">节能65%烧结页岩空心砖面世 <span>2009-07-09</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">节能减排推动建筑陶瓷企业科技创新 <span>2009-07-09</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">新型墙体材料合格率仅为85.1% <span>2009-07-09</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">胶粉的分类及在使用乳胶粉时需要注意的几... <span>2009-07-09</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">禁止保温材料现场调配 保证节能建材真正... <span>2009-07-09</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">节能65%烧结页岩空心砖面世 <span>2009-07-09</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">节能减排推动建筑陶瓷企业科技创新 <span>2009-07-09</span></a>-->
<!--                    </li>-->
                </ul>
                <div class="clear"></div>

                <!-- 分页 -->
                <div style="padding: 20px 0;"><?php echo page($current,$count,$limit,$size,'manu');?></div>

            </article>



    <?php
        require_once ('aside.php');
        require_once ('footer.php');
    ?>