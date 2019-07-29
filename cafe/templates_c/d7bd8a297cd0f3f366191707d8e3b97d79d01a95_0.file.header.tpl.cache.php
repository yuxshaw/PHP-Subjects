<?php
/* Smarty version 3.1.33, created on 2019-07-14 16:07:39
  from 'D:\phpStudy\PHPTutorial\WWW\cafe\templates\home\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2ae2cb36b954_72474541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7bd8a297cd0f3f366191707d8e3b97d79d01a95' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\templates\\home\\header.tpl',
      1 => 1563091654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2ae2cb36b954_72474541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6810328205d2ae2cb33df21_37666774';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>InternetCafe</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="static/home/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="static/home/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="static/home/css/grid.css" type="text/css" media="screen">
    <?php echo '<script'; ?>
 src="static/home/js/jquery-1.7.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="static/home/js/cufon-yui.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="static/home/js/cufon-replace.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="static/home/js/Vegur_500.font.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="static/home/js/Ropa_Sans_400.font.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="static/home/js/FF-cash.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="static/home/js/script.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 type="text/javascript" src="static/home/js/html5.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="static/home/css/ie.css" type="text/css" media="screen">
    <link rel="stylesheet" href="includes/bootstrap.css">
    <![endif]-->
</head>
<body id="page1">
<!--==============================header=================================-->
<header>
    <div class="border-bot">
        <div class="main">
            <h1><a href="index.php">InternetCafe</a></h1>
            <nav>
                <ul class="menu" id="menu">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['nav_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nav_name'];?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </div><?php }
}
