<?php


namespace app\index\controller;


use think\Controller;
use think\Db;

class News extends Common
{
    public function news($category = 2,$cate = 9)
    {
        $sub_nav = Db::name('nav')
            ->where('p_id',$category)
            ->select();

        // 查询当前cate 下面的新闻
        $news = Db::name('news')
            ->where('n_id',$cate)
            ->paginate(2);
        $page = $news->render();
        $news_data = array(
            'sub_nav' => $sub_nav,
            'category' => $category,
            'cate' => $cate,
            'news' => $news,
            'page' => $page
        );
        $this->assign('news_data',$news_data);
        return $this->fetch();
    }

    public function newsInfo($nid){

        $info = Db::name('news')
            ->where('news_id',$nid)
            ->find();
        $this->assign('info',$info);
        return $this->fetch();
    }

}