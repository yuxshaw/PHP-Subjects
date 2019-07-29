<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>登录</title>
    <meta name="keywords" content="Admin">
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Core CSS  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/css/'); ?>bootstrap.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/css/'); ?>theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/css/'); ?>pages.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/css/'); ?>responsive.css">

    <style>
        .form-group p{
            color: red;
        }
    </style>

</head>
<body class="login-page">

<!-- Start: Main -->
<div id="main">
    <div class="container">
        <div class="row">
            <div id="page-logo"></div>
        </div>
        <div class="row">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">系统登录入口</div>
                </div>

<!--                --><?php //echo validation_errors(); ?>
                <form action="" class="cmxform" id="altForm" method="post">
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-addon">用户名</span>
                                <input type="text" name="username" class="form-control" autocomplete="off"
                                      value="<?php echo set_value('username');?>" placeholder="请输入您的用户名">
                            </div>
                            <?php echo form_error('username');?>
                        </div>
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-addon">密&emsp;码</span>
                                <input type="password" name="password" class="form-control" autocomplete="off"
                                       value="<?php echo set_value('password');?>" placeholder="请输入您的密码">
                            </div>
                            <?php echo form_error('password');?>
                        </div>
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-addon">验证码</span>
                                <input style="width: 60%;" type="text" name="code" class="form-control pull-left" autocomplete="off"
                                       value="<?php echo set_value('password');?>" placeholder="请输入验证码">
                                <div class="pull-right" style="margin-top: 2px;" id="img_code">
                                    <?php echo $code_img;?>
                                </div>
                            </div>
                            <?php echo form_error('code');?>
                        </div>
                    </div>

                    <div class="panel-footer"><span class="panel-title-sm pull-left" style="padding-top: 7px;"></span>
                        <div class="form-group margin-bottom-none">
                            <input type="hidden" value="login" name="action-mark"/>
                            <input class="btn btn-primary pull-right" type="submit" value="登 录"/>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!-- End: Main -->


</body>

</html>
<script src="<?php echo base_url('static/admin/js/')?>jquery.min.js"></script>
<script>
    $(function () {
        $('#img_code').click(function () {
           var _this = this;

           $.ajax({
               type:'post',
               url:"<?php echo site_url('admin/User/imgcode');?>",
               data:'is_ajax='+1,
               success:function (data) {
                   $(_this).html(data);
               }
           })
        });
    })
</script>