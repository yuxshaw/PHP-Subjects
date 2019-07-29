<?php

	namespace app\admin\controller;

	use think\Controller;
	use think\Request;
	//基类
	class Base extends Controller
	{
		//定义成员属性(数组),存放不需要登录的方法
		protected $checkLogin = [];

		public function _initialize()
		{
			$action = Request::instance()->action(); //获取请求的方法

			//如果没有登录或者请求的方法在 $checkLogin 数组中，则需要登录
			if(!$this->isLogin() && !in_array($action,$this->checkLogin))
			{
				$this->error('请登录！','/admin/User/login');
			}
		}

		public function isLogin()
		{
			return session('?name');
		}
	}