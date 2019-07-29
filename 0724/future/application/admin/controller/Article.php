<?php

	namespace app\admin\controller;
	use app\admin\controller\Base;
	use app\admin\model\Article as ArtModel;
	use app\admin\model\Category as CateModel;

	class Article extends Base
	{
		public function articleIndex()
		{
			$art = new ArtModel();
			$article = $art->with('',)->paginate(5);
			$page = $article->render();

			$this->assign('article',$article);
			$this->assign('page',$page);
			return $this->fetch();
		}


		//添加
		public function articleAdd()
		{
			//查询分类
			$cate = CateModel::where('pid','<>',0)->select();
			$this->assign('cate',$cate);
			return $this->fetch();
		}
		public function artInsert()
		{
			//上传文件
			// 获取表单上传文件 例如上传了001.jpg
			$file = request()->file('a_img');
			$img_path = $this->upload($file);

			//制作缩略图
			//缩略图存放目录
			$thumb_path = strstr($img_path['img_path'],$img_path['img_name'],true);
			$thumb_name = $img_path['img_name'];
			$thumb_source = $img_path['img_path'];


			$thumb = $this->resize($thumb_source,$thumb_path,$thumb_name);

			//上传文章
			$data = input('post.');
			$data['pubtime'] = time();
			$data['a_img'] = '/uploads/' . $img_path['img_path'];

			$art = new ArtModel($data);
			$res = $art->save();

			if($res){
				$this->success('添加文章成功！','/admin/Article/articleIndex');
			}else{
				$this->error('添加文章失败！');
			}
		}

		public function upload($file){

			// 移动到框架应用根目录/public/uploads/ 目录下
			if($file){

				$info = $file->move(ROOT_PATH . 'public' . DS .  'uploads');

				if($info){
					//  获取文件后缀
					//echo $info->getExtension() . '<br />';

					// 输出 图片路径
					//return $info->getSaveName();
					return [
						'img_path' => $info->getSaveName(),
						'img_name' => $info->getFilename()
					];

					// 输出 文件名
					//echo $info->getFilename() . '<br />';
				}else{
					// 上传失败获取错误信息
					return $file->getError();
				}
			}
		}

		//缩略图

		public function resize($thumb_source,$thumb_path,$thumb_name)
		{
			$path = 'uploads/' . str_replace('\\','/',$thumb_source);

			$image = \think\Image::open($path);

			// 按照原图的比例生成一个最大为150*120的缩略图并保存为thumb.png
			$thumb_name = 'uploads/' . $thumb_path . 'thumb_' . $thumb_name; //缩略图存放路径

			$thumb_name = str_replace('\\','/',$thumb_name); //替换路径中的 \ 为 /

			$image->thumb(150, 120)->save($thumb_name);

			return $thumb_name;//返回缩略图的路径
		}
	}