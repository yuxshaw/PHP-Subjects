    <?php
        require_once ('./include/config.php');

        // 获取当前页码
        if (isset($_GET['page'])){
            $current = $_GET['page'];
        }else{
            $current = 1;
        }

        // 每页显示的记录数量
        $limit = 3;

        // 记录的起始位置
        $n = ($current -1) * $limit;

        // 最后一条页码数
        $size = 5;

        // 查询留言总数
        $count_sql = "SELECT COUNT(gbook_id) AS count FROM wd_guestbook";
        $count = get_one($count_sql);
        $count = $count['count'];

        if (isset($_GET['search']) && !empty($_GET['keywords'])){
            $keywords = $_GET['keywords'];
            // 查询留言总数
            $count_sql = "SELECT COUNT(gbook_id) AS count FROM wd_guestbook AS gb JOIN wd_user AS usr ON gb.user_id = usr.user_id WHERE user_name LIKE '%$keywords%' OR user_email LIKE '%$keywords%' OR gbook_content LIKE '%$keywords%'";
            $count = get_one($count_sql);
            $count = $count['count'];
            // 查询输出所有留言
            $sql = "SELECT * FROM wd_guestbook AS gb JOIN wd_user AS usr ON gb.user_id = usr.user_id WHERE user_name LIKE '%$keywords%' OR user_email LIKE '%$keywords%' OR gbook_content LIKE '%$keywords%' ORDER BY gb.gbook_time DESC LIMIT $n,$limit";
            $msg_data = get_all($sql);
        }else {
            // 查询输出所有留言
            $sql = "SELECT * FROM wd_guestbook AS gb JOIN wd_user AS usr ON gb.user_id = usr.user_id ORDER BY gb.gbook_time DESC LIMIT $n,$limit";
            $msg_data = get_all($sql);
        }
        // 获取当前留言id的最大值，再加1，作为当前游客留言的id
        $sql = "SELECT MAX(gbook_id) AS max FROM wd_guestbook";
        $max = get_one($sql);
        $max = $max['max'] + 1;

        //提交留言
        if (!empty($_POST) && isset($_POST['sub'])) {
            if (isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1) {
                $msg_data = array(
                    'gbook_name' => '',
                    'gbook_content' => $_POST['content'],
                    'gbook_time' => time(),
                    'gbook_show' => '1',
                    'user_id' => $_COOKIE['user_id']
                );
                $res = add('wd_guestbook', $msg_data);
                if ($res) {
                    msg_jump('留言成功！', 'guest.php');
                } else {
                    msg_jump('留言失败！');
                }
            } else {
                $data = array(
                    'user_name' => '游客',
                    'user_email' => $_POST['email']
                );
                $msg_data = array(
                    'gbook_name' => '',
                    'gbook_content' => $_POST['content'],
                    'gbook_time' => time(),
                    'user_id' => $max
                );
                $res = add('wd_guestbook', $msg_data);
                if ($res) {
                    msg_jump('留言成功！', 'guest.php');
                } else {
                    msg_jump('留言失败！');
                }
            }
        }
    ?>
    <link rel="stylesheet" href="./css/guest.css" />
    <link rel="stylesheet" href="./include/page/css.css">
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
                <li><a href="login.php">会员登录</a></li>
                <li><a href="register.php">会员注册</a></li>
                <li><a href="guest.php">客户留言</a></li>
            </ul>
        </aside>
        <!-- 文字内容 -->
        <article class="fl">
            <div class="top">
                <h2 class="fl">客户留言</h2>
                <span class="fr">首页 > 客户留言</span>
                <div class="clearfix"></div>
            </div>
            <div class="center">
                <ul class="list">
                    <li>
                        <form action="" style="margin-bottom: 10px;">
                            搜索内容：<input type="text" name="keywords">
                            <input id="search" type="submit" name="search" value="搜索">
                        </form>
                    </li>
                    <?php foreach ($msg_data as $item){?>
                        <li>
                            <h3><?php if ($item['gbook_id'] == $item['user_id']){echo '游客';}else{ echo $item['user_name'];}?></h3>
                            <p><?php echo $item['gbook_content'];?></p>
                            <a href="">View Details >></a>
                            <span><?php echo date('Y-m-d H:i:s', $item['gbook_time']);?></span>
                            <div class="clearfix"></div>
                        </li>
                    <?php } ?>
                </ul>

                <!-- 分页 -->
                <div style="padding: 20px 0;"><?php echo page($current,$count,$limit,$size,'Digg');?></div>

            </div>
            <div class="bottom">
                <form action="guest.php" name="guest" method="post">
                    <table class="tb">
                        <!--                <a href="login.php">--><?php //echo (isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1)? $_COOKIE['username'] : '登录';?><!--</a>-->
                        <?php
                            echo (isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1)
                                ?
                                '<tr><th>会员名称 </th><td><input type="text" readonly name="username" value="'.$_COOKIE['username'].'"/></td></tr>'
                                : '';
                        ?>
                        <tr>
                            <th>电子邮件&emsp;</th>
                            <td>
                                <input type="email" name="email" value="<?php echo (isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1)? $_COOKIE['useremail'] : '';?>"<?php echo (isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1)? 'readonly' : '';?>>
                            </td>
                        </tr>
                        <tr>
                            <th>留言内容&emsp;</th>
                            <td>
                                <textarea class="area" name="content" id="" cols="30" rows="10"></textarea>
                            </td>
                        </tr>
                        <tr align="center">
                            <td></td>
                            <td>
                                <input class="sub" type="submit" name="sub" onclick="return validate()" value="提交">
                                <input class="res" type="reset" value="重置">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </article>
        <div class="clearfix"></div>
    </div>

   <?php require_once ('footer.php');?>
    <script>
        function validate() {
            var guest = document.forms['guest'];
            //验证邮箱
            var email = guest['email'];
            if (email.value.length === 0) {
                alert('邮箱不能为空！');
                return false;
            } else {

            }
            //留言内容
            var content = guest['content'];
            if (content.value.length === 0) {
                alert('留言内容不能为空！');
                return false;
            } else if (content.value.length > 200) {
                alert('留言内容最多200个字符！');
                return false;
            }

            // alert('留言成功！');

        }
    </script>