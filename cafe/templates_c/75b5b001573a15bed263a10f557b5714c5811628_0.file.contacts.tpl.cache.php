<?php
/* Smarty version 3.1.33, created on 2019-07-20 20:22:57
  from 'D:\phpStudy\PHPTutorial\WWW\cafe\templates\home\contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3307a1adc613_96301605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75b5b001573a15bed263a10f557b5714c5811628' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\templates\\home\\contacts.tpl',
      1 => 1563625372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5d3307a1adc613_96301605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\includes\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '18576592675d3307a1a98bb2_66760479';
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</header>
	<!--==============================content================================-->
	<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_8">
						<h3>Contact Form</h3>
						<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gbook']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>								
							<li>
								<div>
									<h4><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
 :<span>&emsp; <?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</span></h4>
									<?php echo $_smarty_tpl->tpl_vars['item']->value['gbook_content'];?>

									<br />
									<span style='display:block; float:right; margin-right: 20px;'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['gbook_time'],"%Y-%m-%d");?>
</span>
								</div>
								<div style="clear:both;"></div>
								<hr />
							</li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
						<form id="contact-form" method="post" enctype="multipart/form-data">					
							<fieldset>
								  <label><span class="text-form">姓名:</span><input required name="name" type="text" /></label>							  
								  <label><span class="text-form">手机:</span><input required name="phone" type="text" /></label>
								  <label><span class="text-form">邮箱:</span><input required name="email" type="email" /></label>							  
								  <div class="wrapper">
									<div class="text-form">内容:</div>
									<div class="extra-wrap">
										<textarea required name='content'></textarea>
										<div class="clear"></div>
										<div class="buttons">
											<a href="javascript:;" onClick="document.getElementById('contact-form').reset()">重置</a>
																						<input class='link-1' type='submit' name='commit' value='提交' />	
										</div> 
									</div>
								  </div>							
							</fieldset>						
						</form>
					</article>
					<article class="grid_4">
						<div class="indent-top indent-left">
							<div class="wrapper p3">
								<figure class="img-indent-r"><a href="#"><img src="static/home/images/page1-img1.png" alt=""></a></figure>
								<div class="extra-wrap">
									<strong class="title-1">Tell Your<strong>Friends</strong><em>About</em><em>Our Cafe</em></strong>
								</div>
							</div>
							<h3 class="p1">Latest News</h3>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conf']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
								<p class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['item']->value['conf_name'];?>
</p>
								<p class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['item']->value['conf_value'];?>
</p>
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
