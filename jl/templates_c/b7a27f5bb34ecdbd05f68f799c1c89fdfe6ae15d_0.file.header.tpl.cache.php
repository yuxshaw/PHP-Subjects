<?php
/* Smarty version 3.1.33, created on 2019-07-04 18:24:34
  from 'D:\phpStudy\PHPTutorial\WWW\jl\templates\home\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1dd3e28ff822_67253058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7a27f5bb34ecdbd05f68f799c1c89fdfe6ae15d' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\jl\\templates\\home\\header.tpl',
      1 => 1562235869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1dd3e28ff822_67253058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3824647995d1dd3e28f57c0_58577992';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>金陵贸易有限公司</title>
    <link type="text/css" rel="stylesheet" href="static/style/style.css" />
    <link rel="stylesheet" href="includes/page/css.css">
</head>

<body>
<div class="header">
    <h1 class="logo" title="金陵贸易有限公司"><a href="index.php"><img src="static/images/logo.gif" alt="金陵贸易有限公司" /></a></h1>
    <p class="top_r"><a href="#" class="btn_i">设为主页</a><a href="#" class="btn_f">收藏本站</a></p>
</div>
<div class="nav">
    <div class="nav_left"></div>
    <ul>

        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['nav_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['nav_name'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </ul>
    <div class="time" id="showTime">&nbsp;</div>
    <div class="nav_right"></div>
</div>
<div class="banner">
    <a href="#"><img src="static/images/banner.jpg" align="banner" /></a>
</div><?php }
}
