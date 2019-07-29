<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class About extends Common
{
    public function about($category = 5,$cate = 12)
    {
        $sub_nav = Db::name('nav')
            ->where('p_id',$category)
            ->select();

        // 查询当前cate 下的所有信息
        $info = Db::name('about')
            ->where('n_id',$cate)
            ->select();

        $about_data = array(
            'sub_nav' => $sub_nav,
            'category' => $category,
            'cate' => $cate,
            'info' => $info
        );
        $this->assign('about_data',$about_data);
        return $this->fetch();
    }
}
