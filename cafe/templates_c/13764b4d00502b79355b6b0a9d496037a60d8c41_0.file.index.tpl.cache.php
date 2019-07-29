<?php
/* Smarty version 3.1.33, created on 2019-07-09 19:30:41
  from 'D:\phpStudy\PHPTutorial\WWW\cafe\templates\home\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d247ae17269d3_89378570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13764b4d00502b79355b6b0a9d496037a60d8c41' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\templates\\home\\index.tpl',
      1 => 1562671839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d247ae17269d3_89378570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\includes\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '9212243735d247ae1548171_90730794';
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<div class="row-bot">
			<div class="slider-wrapper">
				<div class="slider">
					<ul class="items">
						<li>
							<img src="static/home/images/slider-img1.jpg" alt="" />
						</li>
						<li>
							<img src="static/home/images/slider-img2.jpg" alt="" />
						</li>
						<li>
							<img src="static/home/images/slider-img3.jpg" alt="" />
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<!--==============================content================================-->
	<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_8">
						<h2>Welcome!</h2>

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

												<h3 class="p1">Here you can find all services in one place:</h3>

						<div class="wrapper">
							<div class="grid_4 alpha">
								<ul class="list-1">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ser1']->value, 'item');
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
							<div class="grid_4 omega">
								<ul class="list-1 indent-bot">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ser2']->value, 'item');
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
								<a class="link-1 margin-left" href="services.php">所有服务</a>
							</div>
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
							<time class="tdate-1" datetime="2012-02-21"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['news_time'],"%Y-%m-%d");?>
</time>
							<p class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['item']->value['news_content'];?>
</p>
							<p><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['news_name'];?>
</a></p>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<a class="link-1" href="events.php">所有新闻</a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="static/home/js/tms-0.3.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="static/home/js/tms_presets.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="static/home/js/jquery.easing.1.3.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	$(window).load(function() {
		$('.slider')._TMS({
			duration:1000,
			easing:'easeOutQuint',
			preset:'diagonalFade',
			slideshow:7000,
			banners:false,
			pauseOnHover:true,
			pagination:true,
			pagNums:false
		});
	});
<?php echo '</script'; ?>
><?php }
}
