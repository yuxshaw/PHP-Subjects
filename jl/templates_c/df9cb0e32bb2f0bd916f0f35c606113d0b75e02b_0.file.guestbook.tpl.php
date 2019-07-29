<?php
/* Smarty version 3.1.33, created on 2019-07-03 08:52:53
  from 'D:\phpStudy\PHPTutorial\WWW\jl\templates\home\guestbook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1c6ce552c714_77398674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df9cb0e32bb2f0bd916f0f35c606113d0b75e02b' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\jl\\templates\\home\\guestbook.tpl',
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
function content_5d1c6ce552c714_77398674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">客户留言<b class="cGrey fn">Guestbook</b></h2>
        </div>
        <div class="intro" style="padding-top:16px">
        	<label>呢称：</label><input name="" type="text" /><br />
			<label>内容：</label><textarea name="" cols="" rows="" style="width:545px;height:138px"></textarea>
            <input name="" type="button" value="提交" class="btn_input" />
        </div>
        
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:./righter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
