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

        $about_data = array(
            'sub_nav' => $sub_nav,
            'category' => $category,
            'cate' => $cate
        );
        $this->assign('about_data',$about_data);
        return $this->fetch();
    }
}
