<?php
/* Smarty version 3.1.33, created on 2019-07-04 18:45:54
  from 'D:\phpStudy\PHPTutorial\WWW\jl\templates\home\product_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1dd8e28539a4_87765178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3008b3958ebc600056d6ab5ff44d1648faa444e' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\jl\\templates\\home\\product_list.tpl',
      1 => 1562237125,
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
function content_5d1dd8e28539a4_87765178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7593077965d1dd8e280f882_07397146';
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2>
        </div>
        <ul class="list_l">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pro']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <li>
                    <span class="listimg">
                        <img src="static/images/tran.gif" class="blank" /><a href="product_info.php"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_img'];?>
" alt="产品1" /></a>
                    </span>
                    <span class="listtxt"><a href="product_info.php"><?php echo $_smarty_tpl->tpl_vars['item']->value['pro_name'];?>
</a></span>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="blank10"></div>
                <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

        <div class="blank6"></div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:./righter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
