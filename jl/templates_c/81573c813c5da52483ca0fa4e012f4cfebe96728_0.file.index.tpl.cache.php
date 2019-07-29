<?php
/* Smarty version 3.1.33, created on 2019-07-04 19:35:54
  from 'D:\phpStudy\PHPTutorial\WWW\jl\templates\home\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1de49a1717a3_09764796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81573c813c5da52483ca0fa4e012f4cfebe96728' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\jl\\templates\\home\\index.tpl',
      1 => 1562240150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d1de49a1717a3_09764796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '698497895d1de49a11d730_19431666';
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<div class="content">
	<div class="w475_l">
    	<div class="title">
        	<h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
        </div>
        <div class="intro">
            <?php echo $_smarty_tpl->tpl_vars['com']->value['page_desc'];?>
<a href="about_us.php" class="cBlue"> 更多...</a>
            <div class="hackbox"></div>
        </div>
        <div class="blank10"></div>
        <div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2><span class="more"><a href="product_list.php" class="cBlue"> 更多...</a></span>
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
    </div>
    <div class="w370_r">
    	<div class="title">
        	<h2 class="cBlue fB">最新公告<b class="cGrey fn">News</b></h2>
        </div>
        <ul class="list_r">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <li><a href="article.php"><?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
</a><span class="time1"><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['item']->value['art_time']);?>
</span></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="blank29"></div>
        <div class="title">
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2><span class="more"><a href="info.php" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_r">
            <li><a href="article.php">全国建材库存继续增加 广州市场...</a><span class="time1">2009-07-10</span></li>
            <li><a href="article.php">禁止保温材料现场调配 保证节能建材真正... </a><span class="time1">2009-07-10</span></li>
            <li><a href="article.php">节能65%烧结页岩空心砖面世 </a><span class="time1">2009-07-10</span></li>
            <li><a href="article.php">节能减排推动建筑陶瓷企业科技创新  </a><span class="time1">2009-07-10</span></li>
            <li><a href="article.php">新型墙体材料合格率仅为85.1%    </a><span class="time1">2009-07-10</span></li>
        </ul>
    </div>
    <div class="hackbox"></div>
    
	<div class="title">
        	<h2 class="cBlue fB">友情链接<b class="cGrey fn">Links</b></h2>
    </div>
    <p class="links"><a href="#">卓越网上购物</a> | <a href="#">京东网上商城</a> | <a href="#">携程旅行网</a> | <a href="#">太平洋电脑网</a> | <a href="#">中国移动</a> | <a href="#">中国政府网</a> | <a href="#">凤 凰 网</a></p>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
