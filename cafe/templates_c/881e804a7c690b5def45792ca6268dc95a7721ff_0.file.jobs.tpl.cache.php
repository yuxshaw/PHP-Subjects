<?php
/* Smarty version 3.1.33, created on 2019-07-14 16:21:14
  from 'D:\phpStudy\PHPTutorial\WWW\cafe\templates\home\jobs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2ae5faeb9726_31447146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '881e804a7c690b5def45792ca6268dc95a7721ff' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\templates\\home\\jobs.tpl',
      1 => 1563092469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d2ae5faeb9726_31447146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5305592455d2ae5fae74563_30170605';
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</header>
	<!--==============================content================================-->
	<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_8">
						<div class="margin-bot">
							<h3 class="prev-indent-bot">Perspective Development</h3>
							<div class="wrapper">
								<figure class="img-indent"><img src="static/home/images/page4-img1.jpg" alt=""></figure>
								<div class="extra-wrap">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brief']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
										<h6><?php echo $_smarty_tpl->tpl_vars['item']->value['b_content'];?>
</h6>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
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
							<a class="link-1" href="services.php">查看更多</a>
						</div>
						<h3 class="p1">Career Opportunities</h3>
						<div class="wrapper">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
								<div class="grid_4 alpha">
								<h6 class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['item']->value['job_title'];?>
</h6>
								<p class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['item']->value['job_desc'];?>
</p>
								<a class="link-1" href="#">查看更多</a>
							</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</div>
					</article>
					<article class="grid_4">
						<div class="indent-left">
							<h3>Our Vacations</h3>
							<ul class="list-1 img-indent-bot">
								<li><a href="#">Consetetur sadipscing elitr sed</a></li>
								<li><a href="#">Diam nonumy eirmod tempor invidunt </a></li>
								<li><a href="#">Labore et dolore magna aliquyam</a></li>
								<li><a href="#">At vero eos et accusam et justo duo </a></li>
								<li><a href="#">Dolores et ea rebum</a></li>
							</ul>
							<h3 class="prev-indent-bot">Interview Process</h3>
							<figure class="indent-bot"><img src="static/home/images/page4-img2.jpg" alt=""></figure>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_jobs']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
								<p class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['item']->value['job_desc'];?>
</p>
								<h6 class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['item']->value['job_title'];?>
</h6>
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
