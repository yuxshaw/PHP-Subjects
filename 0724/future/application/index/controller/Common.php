<?php

	namespace app\index\controller;

	use think\Controller;
	use think\Db;
	use think\Request;

	class Common extends Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->header();
		}

		public function header()
		{

			$nav = Db::name('category')
					->where('pid',0)
					->select();

			//$domain = Request::instance()->domain();
			$base_file = Request::instance()->baseFile();

			$url= $base_file;

			$data = [
				'nav' => $nav,
				'url' => $url,
			];
			//pre($data);
			$this->assign('data',$data);
		}
	}