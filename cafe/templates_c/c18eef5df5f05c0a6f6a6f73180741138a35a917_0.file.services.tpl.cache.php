<?php
/* Smarty version 3.1.33, created on 2019-07-10 18:04:06
  from 'D:\phpStudy\PHPTutorial\WWW\cafe\templates\home\services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d25b81627ff83_86973652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c18eef5df5f05c0a6f6a6f73180741138a35a917' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\templates\\home\\services.tpl',
      1 => 1562753044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d25b81627ff83_86973652 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16181723035d25b8162443e9_66701704';
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</header>

	<!--==============================content================================-->
	<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_8">
						<h3>What We Offer</h3>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brief']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
							<p class="p2"><?php echo $_smarty_tpl->tpl_vars['item']->value['b_content'];?>
</p>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												<p class="p3"><a class="link-1" href="#">阅读更多</a></p>
						<h3 class="prev-indent-bot">Special Events</h3>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
							<div class="wrapper p3">
								<figure class="img-indent"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['news_img'];?>
" alt=""></figure>
								<div class="extra-wrap">
									<h6 class="p1"><?php echo $_smarty_tpl->tpl_vars['item']->value['news_name'];?>
</h6>
									<p class="p1"><?php echo $_smarty_tpl->tpl_vars['item']->value['news_content'];?>
</p>
									<a class="link-1" href="#"> 阅读更多</a>
								</div>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</article>
					<article class="grid_4">
						<div class="indent-left">
							<h3 class="prev-indent-bot">New Service</h3>
							<figure class="p2"><img src="static/home/images/page3-img3.jpg" alt=""></figure>
							<p class="prev-indent-bot">Vel eum iriure dolor in hendrerit tumzril delenit augue duis dolore.</p>
							<p class="margin-bot"><a class="link-1" href="#">View More</a></p>
							<h3 class="p1">Our Services</h3>
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
							<a class="link-1 margin-left" href="#">阅读更多</a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
