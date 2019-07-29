<?php
/* Smarty version 3.1.33, created on 2019-07-04 18:57:56
  from 'D:\phpStudy\PHPTutorial\WWW\jl\templates\home\article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1ddbb43ed4a2_34038640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '336c70fca6bf0756ff787f361dfa88a8aed80298' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\jl\\templates\\home\\article.tpl',
      1 => 1562143971,
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
function content_5d1ddbb43ed4a2_34038640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2799420125d1ddbb43ad189_28501289';
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">详细信息<b class="cGrey fn">News</b></h2>
        </div>
        <div class="article">
			<h3>全国建材库存继续增加 广州市场增幅较大</h3>
			<h4>发布时间：2009年02月06日10:17</h4>
        	<p>日前，广东广州检验检疫局对广州汽车集团商贸有限公司进口钢材实施“诚信管理+企业验收+检验检疫抽批检验和定期检查”的检验监管新模式。这一新检验监管模式，既保证了工作质量，又提高了通关效率，受到了企业的高度评价。</p>
        	<p>广州汽车集团商贸有限公司进口的钢板属大宗进口商品，若采用常规的批批抽样检验监管模式，将影响企业的物流效率，且增加其运营成本。为减轻企业负担，助推产业发展，广州局对该企业及进口钢材使用方进行了诚信评估后，决定对其实施检验监管新模式</p>
        	
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:./righter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
