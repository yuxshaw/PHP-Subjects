    <?php
        require_once ('./include/config.php');
    ?>
    <link rel="stylesheet" href="./css/information.css" />
    <?php require_once ('header.php');?>

    <!-- 内容部分 -->
    <div class="content">
        <!-- 广告图 -->
        <div class="banner">
            <img src="images/banner02.png" alt="">
            <!-- <img class="rope" src="images/rope.png" alt=""> -->
        </div>
        <!-- 侧边栏 -->
        <aside class="fl">
            <p>INFORMATION</p>
            <h2>会员信息</h2>
            <ul>
                <li><a href="">详细资料</a></li>
                <li><a href="">修改密码</a></li>
                <li><a href="">意见反馈</a></li>
                <li><a href="guest.php">查看留言</a></li>
            </ul>
        </aside>
        <!-- 文字内容 -->
        <article class="fl">
            <div class="top">
                <h2 class="fl">详细资料</h2>
                <span class="fr">首页 > 会员信息 > 详细资料</span>
                <div class="clearfix"></div>
            </div>
            <div class="center">
                <div class="photo fl">
                    <img src="images/headpic.jpg" alt="">
                    <p>我的头像</p>
                </div>
                <form class="fl" action="">
                    <table border="0" cellpadding="5px">
                        <tr>
                            <td align="right">昵称:</td>
                            <td>&emsp;</td>
                            <td>
                                <input type="text" name="username">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">性别:</td>
                            <td>&emsp;</td>
                            <td>
                                <select name="sex" id="">
                                    <option value="0">男</option>
                                    <option value="1">女</option>
                                    <option value="2">保密</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">职业:</td>
                            <td>&emsp;</td>
                            <td>
                                <input type="text" name="job">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">公司名称:</td>
                            <td>&emsp;</td>
                            <td>
                                <input type="text" name="company">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">详细地址:</td>
                            <td>&emsp;</td>
                            <td>
                                <input type="text" name="address">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">电子邮箱:</td>
                            <td>&emsp;</td>
                            <td>
                                <input type="email" name="email">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">现居地:</td>
                            <td>&emsp;</td>
                            <td>
                                <input type="text" name="addnow">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">个人介绍:</td>
                            <td>&emsp;</td>
                            <td>
                                <textarea name="info" id="" cols="40" rows="5"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>&emsp;</td>
                            <td>
                                <input class="sub" type="submit" value="更 新">
                            </td>
                        </tr>
                    </table>
                </form>
                <div class="clearfix"></div>
            </div>
            <div class="bottom">
                <img src="images/earth02.png" alt="">
            </div>
        </article>
        <div class="clearfix"></div>
    </div>

    <?php require_once ('footer.php');?>