<?php
/* Smarty version 3.1.33, created on 2019-07-21 14:33:00
  from 'D:\phpStudy\PHPTutorial\WWW\cafe\templates\admin\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d34071cb448e4_70220668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0c7cbd9f724dfb64e3a3d94e98037d39aa1e7e7' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\templates\\admin\\login.tpl',
      1 => 1563690774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d34071cb448e4_70220668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15926675495d34071cb06675_93104216';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>CMS内容管理系统</title>
    <meta name="keywords" content="Admin">
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Core CSS  -->
    <link rel="stylesheet" type="text/css" href="../static/admin/css/bootstrap.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="../static/admin/css/theme.css">
    <link rel="stylesheet" type="text/css" href="../static/admin/css/pages.css">
    <link rel="stylesheet" type="text/css" href="../static/admin/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="../static/admin/css/responsive.css">

    <!-- Boxed-Layout CSS -->
    <link rel="stylesheet" type="text/css" href="../static/admin/css/boxed.css">

    <!-- Demonstration CSS -->
    <link rel="stylesheet" type="text/css" href="../static/admin/css/demo.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../static/admin/css/custom.css">

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
                    <div class="panel-title">CMS内容管理系统</div>
                </div>
                <form action="" class="cmxform" id="altForm" method="post">
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-addon">用户名</span>
                                <input type="text" name="username" class="form-control phone" maxlength="10"
                                       autocomplete="off" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-addon">密&nbsp;&nbsp;&nbsp;码</span>
                                <input type="password" name="password" class="form-control product" maxlength="10"
                                       autocomplete="off" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group"> <span class="input-group-addon">验证码</span>
                                <input style="width: 150px;" type="text" name="imgcode" class="form-control" autocomplete="off" placeholder="请输入验证码">
                                <img style="margin-top: 2px; margin-left: 10px;" id="code" src="code/imgcode.php" alt="验证码">
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer"><span class="panel-title-sm pull-left" style="padding-top: 7px;"></span>
                        <div class="form-group margin-bottom-none">
                            <input name="commit" class="btn btn-primary pull-right" type="submit" value="登 录"/>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End: Main -->

<!-- Core Javascript - via CDN -->
<?php echo '<script'; ?>
 src="../static/admin/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../static/admin/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../static/admin/js/bootstrap.min.js"><?php echo '</script'; ?>
> <!-- Theme Javascript -->
<?php echo '<script'; ?>
 type="text/javascript" src="../static/admin/js/uniform.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../static/admin/js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../static/admin/js/custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

    jQuery(document).ready(function () {

        // Init Theme Core
        Core.init();

    });

<?php echo '</script'; ?>
>
</body>

</html>
<?php echo '<script'; ?>
>
    var imgcode = document.getElementById('code');
    imgcode.onclick = function () {
        this.src = './code/imgcode.php?p='+Math.random();
    }
<?php echo '</script'; ?>
><?php }
}
