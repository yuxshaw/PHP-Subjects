<?php

    // 查询友情链接网址
    $sql = "SELECT link_name, link_url FROM wd_link";
    $links = get_all($sql);

    // 查询所有公司信息
    $sql = "SELECT conf_name, conf_value FROM wd_config LIMIT 6";
    $config = get_all($sql);

?>
<!-- 页脚 -->
<div class="footer">
    <div class="left fl">
<!--        <p>地址：广东省广州市海珠区新港西路231号3栋4层&emsp;联系人：乐乐&emsp;移动电话：13588888888&emsp;固定电话：020-1234567</p>-->

        <?php foreach ($config as $item){ ?>
            <p><span><?php echo $item['conf_name'];?></span>    <span><?php echo $item['conf_value'];?></span></p>
        <?php } ?>

<!--            <p><span>地址：</span>    <span>广东省广州市海珠区新港西路231号3栋4层</span></p>-->
<!--            <p><span>联系人：</span>   <span>乐乐</span></p>-->
<!--            <p><span>移动电话：</span>  <span>13588888888</span></p>-->
<!--            <p><span>固定电话：</span>    <span>020-1234567</span></p>-->
<!--            <p><span>传真：</span>    <span>020-1234567</span></p>-->
<!--            <p><span>版权：</span>    <span>COPYRIGHT ⓒ WENGDO company. All rights reserved.</span></p>-->
    </div>
    <div class="right fr">
        <select name="href" id="">
            <option value="">友情链接</option>
            <?php foreach ($links as $item){ ?>
            <option value=""><a href="<?php echo $item['link_url'];?>"><?php echo $item['link_name'];?></a></option>
            <?php } ?>
<!--            <option value=""><a href="http://www.baidu.com">百度</a></option>-->
<!--            <option value=""><a href="http://www.qq.com">腾讯</a></option>-->
<!--            <option value=""><a href="http://www.163.com">网易</a></option>-->
        </select>
    </div>
</div>
</body>

</html>
<script src="js/jquery-3.1.1.js"></script>
<script src="js/common.js"></script>
