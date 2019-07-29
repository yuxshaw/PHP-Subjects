<?php


namespace app\index\controller;


use think\Controller;
use think\Db;

class Recruit extends Common
{
    public function recruit($category = 4,$cate = 11)
    {
        $sub_nav = Db::name('nav')
            ->where('p_id',$category)
            ->select();

        // 查询当前cate 下面的新闻
        $res = Db::name('recruit')
            ->where('n_id',$cate)
            ->paginate(2);
        $page = $res->render();

        $re_data = array(
            'sub_nav' => $sub_nav,
            'category' => $category,
            'cate' => $cate,
            'res' => $res,
            'page' => $page
        );
        $this->assign('re_data',$re_data);
        return $this->fetch();
    }

    public function recruitInfo($rid){
        $info = Db::name('recruit')
            ->where('r_id',$rid)
            ->find();
        $this->assign('info',$info);

        return $this->fetch();
    }

}