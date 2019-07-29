<?php

	namespace app\admin\model;

	use think\Model;

	class Article extends Model
	{
		public function art() //一对一联表
		{
			return $this->belongsTo('Category','cid','cid',[],'LEFT')
					->field('*');
			//hasOne('关联模型名','外键名','主键名',['模型别名定义'],'join类型');
		}
	}