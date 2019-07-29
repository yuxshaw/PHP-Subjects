<?php
/* Smarty version 3.1.33, created on 2019-07-03 08:52:53
  from 'D:\phpStudy\PHPTutorial\WWW\jl\templates\home\contact_us.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1c6ce5bcb842_84189439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c11606a90fe4e99e0d06f004fb88765f84f18f0f' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\jl\\templates\\home\\contact_us.tpl',
      1 => 1562143971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./righter.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d1c6ce5bcb842_84189439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">联系我们<b class="cGrey fn">Contact us</b></h2>
        </div>
        <div class="intro" style="height:167px">
        	地址：广东省广州市广州大道北<br />
            联系人：乐可<br />
            移动电话：13619829982<br />
            固定电话：020-1234567<br />
            传真：020-1234567
        </div>
        <div class="title">
        	<h2 class="cBlue fB">我的位置<b class="cGrey fn">Map</b></h2>
        </div>
        <div class="intro">
        	<img src="static/images/map.jpg" />
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:./righter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
