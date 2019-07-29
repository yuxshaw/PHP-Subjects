<?php
    require_once ('include/config.php');

    // 查询后四条导航
    $sql = "SELECT * FROM nnd_nav LIMIT 1,4";
    $nav_data = get_all($sql);

    // 查询公司信息
    $sql = "SELECT * FROM nnd_conf";
    $conf_data = get_one($sql);

?>

<!-- footer -->
<footer>
    <img src="images/foot1.png" alt="">
    <div class="company">
        <div class="list">
            <ul>
                <?php foreach ($nav_data as $item){ ?>
                    <li><a href="<?php echo $item['nav_link'];?>"><?php echo $item['nav_name'];?></a></li>
                <?php } ?>
<!--                <li><a href="solution.php">解决方案</a></li>-->
<!--                <li><a href="inform.php">资讯中心</a></li>-->
<!--                <li><a href="cases.php">案例展示</a></li>-->
<!--                <li><a href="about.php">了解牛牛豆</a></li>-->
            </ul>
        </div>
        <div class="clear"></div>
        <div class="adress">
            <p>
                <img src="images/address.png" alt="">
                <?php echo $conf_data['conf_addr'];?>
            </p>
            <p>
                <img src="images/company.png" alt="">
                <?php echo $conf_data['conf_copyright'];?>
            <span><?php echo $conf_data['conf_msg'];?></span>
        </div>
    </div>
</footer>

</div>
</body>
</html>

<script type="text/javascript" src="js/common.js"></script>
