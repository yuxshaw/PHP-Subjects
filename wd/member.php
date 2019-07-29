    <?php
        require_once ('./include/config.php');
    ?>
    <link rel="stylesheet" href="./css/member.css" />
    <?php require_once ('header.php');?>


    <!-- 内容部分 -->
    <div class="content">
        <!-- 广告图 -->
        <div class="banner">
            <img src="images/banner04.png" alt="">
            <img class="rope" src="images/rope.png" alt="">
        </div>
        <!-- 侧边栏 -->
        <aside class="fl">
            <p>INFORMATION</p>
            <h2>会员信息</h2>
            <ul>
                <li><a href="information.php">详细资料</a></li>
                <li><a href="">密码修改</a></li>
                <li><a href="">意见反馈</a></li>
                <li><a href="guest.php">查看留言</a></li>
            </ul>
        </aside>
        <!-- 文字内容 -->
        <article class="fl">
            <div class="top">
                <h2 class="fl">意见反馈</h2>
                <span class="fr">首页 > 意见反馈</span>
                <div class="clearfix"></div>
            </div>
            <div class="center">
                <div class="left fl">
                    <ul>
                        <li>
                            <h2>Asaweb</h2>
                            <h3>NOTICE</h3>
                        </li>
                        <li>
                            <img src="images/mic.png" alt="">
                        </li>
                    </ul>
                </div>
                <div class="right fl">
                    <p>
                        “ <span>web</span>最近的消息告诉你。<br>
                        多种多样的消息迅速转达给您。 ”
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="bottom">
                <form action="">
                    <table>
                        <tr>
                            <th>意见主题&emsp;</th>
                            <td>
                                <input class="text" type="text" name="memname">
                            </td>
                        </tr>
                        <tr>
                            <th>意见描述&emsp;</th>
                            <td>
                                <textarea class="area" name="text" id="" cols="30" rows="10"></textarea>
                            </td>
                        </tr>
                        <tr align="center">
                            <td></td>
                            <td>
                                <input class="sub" type="submit" value="确认">
                                <input class="res" type="reset" value="重置">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </article>
        <div class="clearfix"></div>


        <?php require_once ('footer.php');?>