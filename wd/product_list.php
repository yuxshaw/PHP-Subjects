    <?php
        require_once ('./include/config.php');

        // 查询设备分类
        $sql = "SELECT * FROM wd_product_cate";
        $procate = get_all($sql);

        // 获取当前页码
        if (isset($_GET['page'])){
            $current = $_GET['page'];
        }else{
            $current = 1;
        }

        // 每页显示的记录数量
        $limit = 4;

        // 记录的起始位置
        $n = ($current -1) * $limit;

        // 最后一条页码数
        $size = 3;

        // 查询产品总数
        $count_sql = "SELECT COUNT(pro_id) AS count FROM wd_product";
        $count = get_one($count_sql);
        $count = $count['count'];

        if (!empty($_GET) && isset($_GET['cate'])){
            $id = $_GET['cate'];
            $condition = "procate_id = $id";

            // 查询子分类产品总数
            $count_sql = "SELECT COUNT(pro_id) AS count FROM wd_product WHERE $condition";
            $count = get_one($count_sql);
            $count = $count['count'];

//            if ($count > 6){
//                $size = 3;
//            }elseif ($count > 3){
//                $size = 2;
//            }

            $sql = "SELECT * FROM wd_product WHERE $condition LIMIT $n,$limit";
            $product = get_all($sql);
        }else {
            // 查询所有的产品
            $sql = "SELECT * FROM wd_product LIMIT $n,$limit";
            $product = get_all($sql);
        }
    ?>
    <link rel="stylesheet" href="./css/product_list.css" />
    <link rel="stylesheet" href="./include/page/css.css">
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
                    <li><a class="<?php if ($_GET['cate'] == $item['procate_id']){echo 'active';} ?>" href="?cate=<?php echo $item['procate_id'];?>"><?php echo $item['procate_name'];?></a></li>
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
                <span class="fr">首页 > 产品介绍 > 产品展示</span>
                <div class="clearfix"></div>
            </div>
            <div class="bottom">
                <ul class="tb" valign="middle">
                    <?php foreach ($product as $item){ ?>
                    <li>
                        <a href="product_detail.php?id=<?php echo $item['pro_id']; ?>">
                            <img src="<?php echo $item['pro_img'];?>" alt="">
                            <p><?php echo $item['pro_name'];?></p>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
                <div class="clearfix"></div>
                <div class="list">
                    <?php echo page($current,$count,$limit,$size,'Digg');?>
<!--                    <li><a href=""><<</a></li>-->
<!--                    <li><a href="">1</a></li>-->
<!--                    <li><a href="">2</a></li>-->
<!--                    <li><a href="">3</a></li>-->
<!--                    <li><a href="">4</a></li>-->
<!--                    <li><a href="">5</a></li>-->
<!--                    <li><a href="">>></a></li>-->
                </div>
            </div>
        </article>
        <div class="clearfix"></div>


        <?php require_once ('footer.php');?>