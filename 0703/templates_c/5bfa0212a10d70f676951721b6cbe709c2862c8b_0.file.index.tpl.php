<?php
/* Smarty version 3.1.33, created on 2019-07-03 06:19:42
  from 'D:\phpStudy\PHPTutorial\WWW\0703\templates\home\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1c48fe7851c1_36574194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bfa0212a10d70f676951721b6cbe709c2862c8b' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\0703\\templates\\home\\index.tpl',
      1 => 1562134763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./sys.conf' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d1c48fe7851c1_36574194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\phpStudy\\PHPTutorial\\WWW\\0703\\include\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'D:\\phpStudy\\PHPTutorial\\WWW\\0703\\include\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
$_smarty_tpl->_subTemplateRender("file:./sys.conf", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

    
        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['a']->value);?>
总共<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['a']->value, $tmp);?>
字符<br/>
    大写：<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['a']->value, 'UTF-8');?>
<br/>
    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,"%Y-%m-%d");?>
<br/>
    <?php echo $_smarty_tpl->tpl_vars['b']->value;?>
<br/>

        <img src="./static/images/aaa.jpg" alt="">

        <?php if ($_smarty_tpl->tpl_vars['age']->value >= 25) {?>
        <div>大叔你好！</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['age']->value > 18) {?>
        <div>小哥哥你好！</div>
    <?php } else { ?>
        <div>小屁孩你好！</div>
    <?php }?>

    name:<?php echo $_smarty_tpl->tpl_vars['stu']->value[0];?>
<br/>
    age:<?php echo $_smarty_tpl->tpl_vars['stu']->value[1];?>
<br/>
    sex:<?php echo $_smarty_tpl->tpl_vars['stu']->value[2];?>
<br/>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stu']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['val']->value;?>
&emsp;
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
