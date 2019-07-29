<?php
/* Smarty version 3.1.33, created on 2019-07-04 17:45:53
  from 'D:\phpStudy\PHPTutorial\WWW\jl\templates\home\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1dcad17b2bb4_04170101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2992a92f97fdc9d9bbe4461c5ca4f3282b315415' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\jl\\templates\\home\\footer.tpl',
      1 => 1562233550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1dcad17b2bb4_04170101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10685719015d1dcad1778cc0_69342280';
?>
<div class="footer">
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conf']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
        <span><?php echo $_smarty_tpl->tpl_vars['val']->value['conf_name'];?>
: <?php echo $_smarty_tpl->tpl_vars['val']->value['conf_value'];?>
</span>&ensp;
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
<?php echo '<script'; ?>
 type="text/javascript" src="static/common/js.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
