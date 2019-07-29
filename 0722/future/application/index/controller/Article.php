<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Article extends Common
{
    public function index($cate,$art)
    {

        $art_info = Db::name('article')
            ->where('aid',$art)
            ->find();

        // 查询二级分类下面的所有文章
        $art = Db::name('article')
            ->where('cid',$cate)
            ->select();
        // 将获取的文章的aid重组数组
        foreach ($art as $item){
            $art_ids[] = $item['aid'];
        }
//        var_dump($art_ids);

        $this->assign('art_info',$art_info);

        return $this->fetch('article');
    }
}
