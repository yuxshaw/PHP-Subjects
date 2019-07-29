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
            ->select();

        $news_data = array(
            'sub_nav' => $sub_nav,
            'category' => $category,
            'cate' => $cate,
            'news' => $news,
        );
        $this->assign('news_data',$news_data);
        return $this->fetch();
    }
}