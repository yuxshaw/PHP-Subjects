<?php
/* Smarty version 3.1.33, created on 2019-07-21 16:08:33
  from 'D:\phpStudy\PHPTutorial\WWW\cafe\templates\admin\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d341d816283b7_95574241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db5dfcc0d92b89f0dd7314b2f98797c54ce570cb' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\templates\\admin\\index.tpl',
      1 => 1563696511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5d341d816283b7_95574241 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\includes\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '11075161825d341d815e3b31_29750035';
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
      </ol>
    </div>
    <div class="container">
		<div class="col-md-9">
			<div id="docs-content">
				<h2 class="page-header margin-top-none">个人信息</h2>
				<table class="table">
					<tr>
					<td colspan="2">您好，<?php echo $_smarty_tpl->tpl_vars['admin_name']->value;?>
</td>
					</tr>
					<tr>
					<td width="100">最后登录时间:</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['last_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
					</tr>
					<tr>
					<td>最后登录IP:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['data']->value['IP'];?>
</td>
					</tr>
				</table>

				<h2 class="page-header margin-top-none">系统信息</h2>
				<table class="table">
				  <tr>
				    <td width="100">操作系统：</td>
				    <td>Windows</td>
				  </tr>
				  <tr>
				    <td>PHP 版本:</td>
				    <td>5.6.27</td>
				  </tr>
				  <tr>
				    <td>MySQL 版本:</td>
				    <td>5.1.33</td>
				  </tr>
				</table>
			</div>
		</div>
    </div> 
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --></body>

</html><?php }
}
