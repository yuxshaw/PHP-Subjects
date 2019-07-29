<?php


namespace app\index\controller;


use think\Controller;
use think\Db;

class Cases extends Common
{
    public function cases($category = 2,$cate = 6)
    {
        $sub_nav = Db::name('nav')
            ->where('p_id',$category)
            ->select();

        // 查询当前cate 下的所有案例
        $case = Db::name('case')
            ->where('n_id',$cate)
            ->paginate(2);
        $page = $case->render();

        $case_data = array(
            'sub_nav' => $sub_nav,
            'category' => $category,
            'cate' => $cate,
            'case' => $case,
            'page' => $page
        );
        $this->assign('case_data',$case_data);
        return $this->fetch();
    }

    public function casesInfo($cid){
        $info = Db::name('case')
            ->where('c_id',$cid)
            ->find();
        $this->assign('info',$info);

        return $this->fetch();
    }
}