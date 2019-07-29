<?php
    require_once ('./include/config.php');

    //查询公司信息
    $sql = "SELECT * FROM jl_config LIMIT 5";
    $conf = get_all($sql);

?>
<link rel="stylesheet" href="css/contact.css">
<title>联系我们</title>
<?php require_once ('header.php');?>
        <!-- content -->
        <div class="content">
            <!-- 文章 -->
            <article class="fl">
                <div class="hd">
                    <h2>客户留言<span> Guestbook</span></h2>
                </div>
                <div class="con">
                    <?php foreach ($conf as $item){ ?>
                        <p><?php echo $item['conf_name'];?> <?php echo $item['conf_value'];?></p>
                    <?php } ?>
                </div>

                <div class="hd">
                    <h2>我的位置<span> Map</span></h2>
                </div>
                <iframe src="bdmap.php" width="366px" height="270px" scrolling="no" frameborder="1"></iframe>
            </article>


    <?php
        require_once ('aside.php');
        require_once ('footer.php');
    ?>