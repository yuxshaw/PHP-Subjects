    <?php
        require_once ('./include/config.php');

        if (isset($_POST['commit'])){
            $username = $_POST['username'];
            $sql = "SELECT user_name FROM wd_user WHERE user_name = '$username'";
            $result = get_one($sql);
            if ($result){
                msg_jump('用户名已存在，请重新输入！');
            }else {
                $data = array(
                    'user_name' => $_POST['username'],
                    'user_pwd' => $_POST['pwd'],
                    'user_sex' => $_POST['sex'],
                    'user_email' => $_POST['email'],
                    'user_phone' => $_POST['phone'],
                    'user_desc' => $_POST['desc'],
                    'user_type' => 1
                );
                $res = add('wd_user', $data);
                if ($res) {
                    msg_jump('恭喜您，注册成功！', 'login.php');
                } else {
                    msg_jump('注册失败！');
                }
            }
        }


    ?>
    <link rel="stylesheet" href="./css/register.css" />
    <?php require_once ('header.php');?>

    <!-- 内容部分 -->
    <div class="content">
        <!-- 广告图 -->
        <div class="banner">
            <img src="images/banner02.png" alt="">
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
                <h2 class="fl">注册</h2>
                <span class="fr">首页 > 注册</span>
                <div class="clearfix"></div>
            </div>
            <div class="center fr">
                <img src="images/earth02.png" alt="">
            </div>
            <div class="clearfix"></div>
            <div class="bottom">
                <h2>Member Register</h2>
                <form action="" method="post">
                    <table>
                        <tr>
                            <td align="right">用户名</td>
                            <td>&emsp;</td>
                            <td>
                                <input type="text" name="username">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">密&emsp;码</td>
                            <td>&emsp;</td>
                            <td>
                                <input type="password" name="pwd">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">确认密码</td>
                            <td>&emsp;</td>
                            <td>
                                <input type="password" name="pwd_confirm">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">电子邮箱</td>
                            <td>&emsp;</td>
                            <td>
                                <input type="email" name="email">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">手&emsp;机</td>
                            <td>&emsp;</td>
                            <td>
                                <input type="text" name="phone">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">性&emsp;别</td>
                            <td>&emsp;</td>
                            <td>
                                <input type="radio" name="sex" id="male" value="1"><label for="male">男</label>
                                <input type="radio" name="sex" id="female" value="0"><label for="female">女</label>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">个人介绍</td>
                            <td>&emsp;</td>
                            <td>
                                <textarea name="desc" id="" cols="40" rows="5"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>&emsp;</td>
                            <td>
                                <input class="submit" name="commit" type="submit" onclick="return validate()" value="注册">
                                <input class="submit" type="reset" value="重置">
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
    var reg = document.forms['register'];
    var user = reg['username'];
    // console.log(user.parentNode.nextElementSibling.childNodes);
    function validate() {
        var reg = document.forms['register'];
        //用户名验证
        var user = reg['username'];
        if (user.value.length === 0) {
            // user.nextElementSibling.style.display = 'block';
            alert('用户名不能为空，请重新输入！');
            return false;
        } else if (user.value.length > 16) {
            // user.nextElementSibling.style.display = 'block';
            // user.nextElementSibling.innerHTML = '用户名不能超过16个字符！';
            alert('用户名不能超过16个字符，请重新输入！');
            return false;
        } else {
            user.nextElementSibling.style.display = 'none';
        }
        //密码验证
        var pwd = reg['pwd'];
        if (pwd.value.length === 0) {
            alert('密码不能为空，请重新输入！');
            return false;
        } else if (pwd.value.length < 6) {
            alert('密码不能少于6位，请重新输入！');
            return false;
        } else {

        }
        //判断两次密码是否一致
        var conf_pwd = reg['pwd_confirm'];
        if (conf_pwd.value !== pwd.value) {
            alert('两次密码不一致，请重新输入！');
            return false;
        } else {

        }
        //邮箱验证
        var email = reg['email'];
        if (email.value.length === 0) {
            alert('邮箱不能为空，请重新输入！')
            return false;
        } else {

        }

        // 验证手机号
        var phone = reg['phone'];
        if (phone.value.length === 0) {
            alert('手机号码不能为空，请重新输入！')
            return false;
        } else {

        }


        //性别验证
        var sex = reg['sex'];
        if (sex.value === '') {
            alert('请选择你的性别！');
            return false;
        } else {

        }

        alert('恭喜你，注册成功！');
    }
</script>