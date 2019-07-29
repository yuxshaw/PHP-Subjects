<?php

	namespace app\index\controller;

	use think\Controller;
	use app\index\controller\Common;
	use app\index\model\Article as ArtModel;//模型
	use think\Db;
	class Article extends Common
	{
		public function article($id)
		{
			//查询文章
			$article = ArtModel::get($id);

			$this->assign('artinfo',[
				'article' => $article,
			]);
			return $this->fetch();
		}


	}