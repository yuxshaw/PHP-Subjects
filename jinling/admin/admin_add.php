<?php
    require_once ('./include/config.php');

    // 添加管理员
    if (isset($_POST['commit'])){
        $name = $_POST['admin_name'];
        $sear_sql = "SELECT admin_name FROM jl_admin WHERE admin_name = '$name'";
        $result = get_one($sear_sql);
        if ($result){
            msg_jump('管理员名称已存在，请重新输入');
            return;
        }
        $data = array(
            'admin_name' => $_POST['admin_name'],
            'admin_pwd' => md5($_POST['pwd']),
            'add_time' =>time()
        );

        // 添加
        $res = add('jl_admin',$data);
        if ($res){
            msg_jump('添加成功！','admin_list.php');
        }else{
            msg_jump('添加失败！');
        }

    }
?>
<?php require_once('header.php'); ?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">系统管理员</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-8 center-column">
                <form action="" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加管理员</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="admin_list.php" class="btn btn-default btn-gradient dropdown-toggle">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">管理员</span>
                                        <input type="text" name="admin_name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">密码</span>
                                        <input style="position: relative"  type="password" id="pwd" value="" class="form-control">
                                        <img class="pwd_msg" style="position: absolute; right: -155px; width: 150px; height: 30px; top: 2px; display: none" src="images/pwd_msg.png" alt="">
                                        <img class="pwd_err1" style="position: absolute; right: -155px; width: 150px; height: 30px; top: 2px; display: none;" src="images/pwd_err1.png" alt="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">确认密码</span>
                                        <input style="position: relative" type="password" id="conf_pwd" value="" class="form-control">
                                        <img class="pwd_err2" style="position: absolute; right: -155px; width: 150px; height: 30px; top: 2px; display: none" src="images/pwd_err2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="form-group">
                                <input type="submit" value="提交" name="commit" id="commit" class="submit btn btn-green">
                                <input type="reset" value="重置" class="submit btn btn-blue">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End: Content -->
</div>
<!-- End: Main -->
<link type="text/css" rel="stylesheet" href="umeditor/themes/default/_css/umeditor.css">
<script src="umeditor/umeditor.config.js" type="text/javascript"></script>
<script src="umeditor/editor_api.js" type="text/javascript"></script>
<script src="umeditor/lang/zh-cn/zh-cn.js" type="text/javascript"></script>
<script type="text/javascript">
    var ue = UM.getEditor('myEditor', {
        autoClearinitialContent: true,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });

    $(function () {
        $('#pwd').focus(function () {
            $('.pwd_msg').css('display','block');
        }).blur(function () {
            $('.pwd_msg').css('display','none');
        }).blur(function () {
            if (this.value.length<6 && this.value.length>0){
                $('.pwd_err1').css('display','block');
            }else {
                $('.pwd_err1').css('display','none');
            }
        });
        $('#conf_pwd').blur(function () {
           if ($('#conf_pwd').val() == $('#pwd').val())  {
               $('.pwd_err2').css('display','none');
               $('#commit').attr('disabled',false);
           }else {
               $('.pwd_err2').css('display','block');
               $('#commit').attr('disabled',true);
           }
        });
    });


</script>
</body>

</html>