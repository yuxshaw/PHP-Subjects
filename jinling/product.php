<?php
    require_once ('./include/config.php');

    // 获取当前页码
    if (isset($_GET['page'])){
        $current = $_GET['page'];
    }else{
        $current = 1;
    }

    // 每页显示记录数量
    $limit = 8;

    // 记录的起始位置
    $n = ($current - 1)*$limit;

    // 最后一页页码数
    $size = 5;

    // 查询留言的总数
    $count_sql = "SELECT COUNT(pro_id) AS count FROM jl_product";
    $count = get_one($count_sql);
    $count = $count['count'];

    $sql = "SELECT * FROM jl_product LIMIT $n,$limit";
    $pro = get_all($sql);

?>
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="./include/page/css.css">
<title>产品展示</title>
<?php require_once ('header.php');?>

        <!-- content -->
        <div class="content">
            <!-- 文章 -->
            <article class="fl">
                <div class="hd">
                    <h2>产品展示<span> Products</span></h2>
                </div>
                <ul class="pro-list">
                    <?php foreach ($pro as $item){ ?>
                        <li>
                            <img src="<?php echo $item['pro_img'];?>" alt="">
                            <p><?php echo $item['pro_name'];?></p>
                        </li>
                    <?php } ?>
<!--                    <li>-->
<!--                        <img src="images/img01.jpg" alt="">-->
<!--                        <p>网格布</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img02.jpg" alt="">-->
<!--                        <p>橡塑板</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img03.jpg" alt="">-->
<!--                        <p>橡塑管</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img04.jpg" alt="">-->
<!--                        <p>高铝砖</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img01.jpg" alt="">-->
<!--                        <p>网格布</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img02.jpg" alt="">-->
<!--                        <p>橡塑板</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img03.jpg" alt="">-->
<!--                        <p>橡塑管</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img04.jpg" alt="">-->
<!--                        <p>高铝砖</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img01.jpg" alt="">-->
<!--                        <p>网格布</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img02.jpg" alt="">-->
<!--                        <p>橡塑板</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img03.jpg" alt="">-->
<!--                        <p>橡塑管</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img04.jpg" alt="">-->
<!--                        <p>高铝砖</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img01.jpg" alt="">-->
<!--                        <p>网格布</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img02.jpg" alt="">-->
<!--                        <p>橡塑板</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img03.jpg" alt="">-->
<!--                        <p>橡塑管</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <img src="images/img04.jpg" alt="">-->
<!--                        <p>高铝砖</p>-->
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