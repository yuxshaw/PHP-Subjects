<?php
namespace app\index\controller;

//use think\Controller;
use app\index\controller\Common;
use think\Db;
use think\Paginator;

class Index extends Common
{
    public function index($category = 1 ,$cate = 0)
    {
        // 查询二级分类
        $sub_nav = Db::name('category')
            ->where('pid',$category)
            ->select();

        // 查询文章
        if ($cate == 0){
            $article = Db::name('article')
                ->alias('art')
                ->join('category','category.cid = art.cid')
                ->where('pid',$category)
                ->paginate(4);
            $page = $article->render();
        }else{
            $article = Db::name('article')
                ->where('cid',$cate)
                ->paginate(4);
            $page = $article->render();
        }

        $data = array(
            'sub_nav' => $sub_nav,
            'cid' => $category,
            'cate' => $cate,
            'article' => $article,
            'page' => $page
        );
        $this->assign('datas',$data);

        return $this->fetch();
    }
}
