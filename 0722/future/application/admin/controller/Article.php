<?php


    namespace app\admin\controller;
    use app\admin\model\Article as ArticleModel;


    use think\Controller;
    use think\Db;
    use think\image;
    use think\Request;

    class Article extends Controller
    {
        public function articleIndex()
        {
            $art = new ArticleModel();
            $art_list = $art->paginate(6);
            $page = $art_list->render();
            $data = array(
                'art_list' => $art_list,
                'page' => $page
            );
            $this->assign('data',$data);
            return $this->fetch();
        }


        public function articleAdd()
        {
            // 查询所有的文章分类
            $cate = Db::name('category')
                ->where('pid','NEQ','0')
                ->select();
//            $cate = ArticleModel::where('pid','<>','0')->select();

            $this->assign('cate',$cate);
            return $this->fetch();
        }

        public function articleInsert()
        {
            // 上传文件
            $file = request()->file('a_img');
            $img_path = $this->upload($file);

            // 制作缩略图
            // 缩略图存放目录
            $thumb_path = strstr($img_path['img_path'],$img_path['img_name'],true);
            // 缩略图文件名
            $thumb_name = $img_path['img_name'];
            $thumb_source = $img_path['img_path'];
            $thumb = $this->resize($thumb_source,$thumb_path,$thumb_name);


            // 上传文章
            $art = input('post.');
            $art['pubtime'] = time();
            $art['a_img'] = '/uploads/'.str_replace('\\','/',$img_path['img_path']);
            $article = new ArticleModel($art);
            $res = $article->allowField(true)->save();
            if (!$res){
                $this->error('添加失败！');
            }else{
                $this->success('添加成功！','/admin/article/articleIndex');
            }
        }


        public function upload($file)
        {
            // 获取表单上传文件 例如上传了001.jpg
//            $file = request()->file('image');
            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file){
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    // 成功上传后 获取上传信息
                    // 输出 图片后缀
//                    return $info->getExtension();
                    // 输出 图片路径
//                    return $info->getSaveName();
                    return [
                        'img_path' => $info->getSaveName(),
                        'img_name' => $info->getFilename(),
                    ];
                    // 输出 文件名
//                    return $info->getFilename();
                }else{
                    // 上传失败获取错误信息
                    return $file->getError();
                }
            }
        }

        // 缩略图
        public function resize($thumb_source,$thumb_path,$thumb_name)
        {
            $img_path = 'uploads/'.str_replace('\\','/',$thumb_source);
            $image = \think\Image::open($img_path);
            // 缩略图存放路径
            $thumb_name = 'uploads/'.$thumb_path.'thumb_'.$thumb_name;
            // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
            $thumb_name = str_replace('\\','/',$thumb_name);
            $image->thumb(150, 120)->save($thumb_name);
            return $thumb_name; // 返回缩略图的路径
        }


        public function articleEdit($id){
            // 查询所有的文章分类
            $cate = Db::name('category')
                ->where('pid','NEQ','0')
                ->select();

            $art_info = ArticleModel::get($id);
            $data = array(
                'cate' => $cate,
                'art_info' => $art_info
            );
            $this->assign('data',$data);
            return $this->fetch();
        }

        public function articleUpdate(){
            $art = input('post.');     // 助手函数
            $id = input('post.aid');
            $res = ArticleModel::update($art,['aid' => $id])->save();
            if ($res){
                $this->error('修改失败！');
            }else{
                $this->success('修改成功！','Article/ArticleIndex');
            }
        }


        public function articleDel()
        {
            $id = input('get.id');

            // 通过传过来的id查询该条数据
            $info = ArticleModel::where('aid',$id)->find();

            // 图片地址
            $img_path = ltrim($info["a_img"],'/');
            // 缩略图地址
            if (is_file($img_path)){
                unlink($img_path);
            }
            $res = ArticleModel::destroy($id);     // 软删除
            // $res = UserModel::destroy($id,true);     // 直接从数据库删除
            if ($res){
                $this->success('删除成功！','/admin/article/articleIndex');
            }else{
                $this->error('删除失败！');
            }
        }

    }