    <?php
        require_once ('./include/config.php');

        if (isset($_POST['commit'])){
            $username = $_POST['username'];
            $pwd = md5($_POST['pwd']);
            $imgcode = strtolower($_POST['imgcode']);
            if ($imgcode != $_COOKIE['imgcode']){
                msg_jump('验证码错误！');
                return;
            }
            $sql = "SELECT * FROM wd_user WHERE user_name = '$username' AND user_pwd = '$pwd'";
            $res = get_one($sql);
            if($res){
                // 设置cookie
                setcookie('user_id',$res['user_id'],time()+60*30,'/');
                setcookie('username',$res['user_name'],time()+60*30,'/');
                setcookie('useremail',$res['user_email'],time()+60*30,'/');
                // 设置登录标记
                setcookie('isLogin',1,time()+60*30,'/');
                msg_jump('登录成功！','index.php');
            }else{
                msg_jump('登录失败，请检查您的账号密码是否正确！');
            }
        }

    ?>
    <link rel="stylesheet" href="./css/login.css" />
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
                <h2 class="fl">登录</h2>
                <span class="fr">首页 > 登录</span>
                <div class="clearfix"></div>
            </div>
            <div class="center">
                <img class="fl" src="images/earth02.png" alt="">
                <div class="login fr">
                    <div>
                        <h2><span>Member</span> LOG-IN</h2>
                    </div>
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td>用户名</td>
                                <td>
                                    <input class="inp" type="text" name="username">
                                </td>
                                <td rowspan="3" align="center">
                                    <input class="submit" type="submit" name="commit"  onclick="return validate()" value="登录">
                                </td>
                            </tr>
                            <tr>
                                <td>密&emsp;码</td>
                                <td>
                                    <input class="inp" type="password" name="pwd">
                                </td>
                            </tr>
                            <tr>
                                <td>验证码</td>
                                <td align="left">
                                    <input style="width: 100px; margin-left: 14px;" class="inp" type="text" name="imgcode">
                                    <img id="code" style="margin-top: 3px;" src="./code/imgcode.php" alt="验证码">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="bottom">
                <p>请定期更改GABA政府试图密码，请不要暴露别人。</p>
                <p>当您希望使用该服务来保护您的信息，请务必登出。</p>
            </div>
        </article>
        <div class="flearfix"></div>
    </div>

    <?php require_once ('footer.php');?>
<script>
    function validate(){
        var login = document.forms['login'];
        var user = login['username'];
        if(user.value.length === 0){
            alert('用户名不能为空！');
            return false;
        }else{

        }

        var pwd = login['pwd'];
        if(pwd.value.length === 0){
            alert('密码不能为空！');
            return false;
        }else{

        }
    }

    var imgcode = document.getElementById("code");
    imgcode.onclick = function () {
        this.src = "./code/imgcode.php?p="+Math.random();
    }
</script>