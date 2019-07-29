<?php
/* Smarty version 3.1.33, created on 2019-07-14 16:07:05
  from 'D:\phpStudy\PHPTutorial\WWW\cafe\templates\home\events.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2ae2a9cb2300_34204894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '335ec47a36d81f34dfb95fdbe9ab9aa95ea83206' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\templates\\home\\events.tpl',
      1 => 1563091621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d2ae2a9cb2300_34204894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\includes\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '13725445615d2ae2a9c61834_62699618';
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</header>
	<!--==============================content================================-->
	<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_8">
						<h3>Everything You Want to Know</h3>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brief']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
							<p class="indent-bot"><?php echo $_smarty_tpl->tpl_vars['item']->value['b_content'];?>
</p>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
						<div class="wrapper p2">
							<figure class="img-indent"><img src="static/home/images/page2-img1.jpg" alt=""></figure>
							<div class="extra-wrap">
								<ul class="list-1">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ser']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
										<li><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['ser_content'];?>
</a></li>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

																	</ul>
							</div>
						</div>
						<h3 class="prev-indent-bot">Special Events</h3>
						<div class="wrapper">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news_arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
							<div class="grid_4 alpha">
								<figure class="p2"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['news_img'];?>
" alt=""></figure>
								<h6 class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['item']->value['news_name'];?>
</h6>
								<p class="p2"><?php echo $_smarty_tpl->tpl_vars['item']->value['news_content'];?>
</p>
								<a class="link-1" href="#">阅读更多</a>
							</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</div>
						<div style="margin: 20px auto;">
							<ul class="pagination">
															</ul>
						</div>
					</article>
					<article class="grid_4">
						<div class="indent-top indent-left">
							<div class="wrapper margin-bot">
								<figure class="img-indent-r"><a href="#"><img src="static/home/images/page1-img1.png" alt=""></a></figure>
								<div class="extra-wrap">
									<strong class="title-1">Tell Your<strong>Friends</strong><em>About</em><em>Our Cafe</em></strong>
								</div>
							</div>
							<h3>Latest News</h3>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
								<time class="tdate-1 p2" datetime=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['news_time'],"%Y-%m-%d");?>
</time>
								<p class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['item']->value['news_content'];?>
</p>
								<p><a class="link-1" href="#">阅读更多</a></p>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
