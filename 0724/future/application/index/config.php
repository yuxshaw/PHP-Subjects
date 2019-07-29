<?php
//配置文件
	use think\Request;

	/*use think\Route;

	Route::rule('article/:cate','index/Article/article');*/

	return [

	//输出替换
	'view_replace_str' => [
		'__CSS__' => '/static/index/css/',
		'__JS__' => '/static/index/js/',
		'__IMG__' => '/static/index/images/',
		'__DOMAIN__' => $domain = Request::instance()->domain()
	],

	//模板布局
	'template' => [
		'layout_on' => true,
		'layout_name' => 'layout',
	],


];