<?php
    require_once ('./include/config.php');

    $sql = "SELECT * FROM jl_config";
    $conf = get_all($sql);


?>

<footer>
    <div class="left fl">
        <?php foreach ($conf as $item){ ?>
            <p><?php echo $item['conf_name'];?> <?php echo $item['conf_value'];?></p>
        <?php } ?>
<!--        <p>地址：广东省广州市天河100号&emsp;联系人：乐乐&emsp;移动电话：13588888888&emsp;固定电话：020-1234567</p>-->
<!--        <p>Copyright @2009 金陵贸易有限公司 版权所有 粤ICP备0000000号</p>-->
    </div>
    <div class="right fr">
        <a href=""><img src="images/qq.jpg" alt=""></a>
    </div>
    <div class="clear"></div>
</footer>
</div>
</body>

</html>
<!--<script src="js/common.js"></script>-->
