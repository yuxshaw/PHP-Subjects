<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
//use app\index\controller\Common;

class Index extends Common
{
    public function index()
    {

        // 查询最新的两条新闻
        $news = Db::name('news')
            ->order('news_time','DESC')
            ->limit(2)
            ->select();

        // 查询前10条装修案例
        $cases = Db::name('case')
            ->limit(10)
            ->select();

        // 查询首页展示信息
        $msg = Db::name('home')
            ->limit(3)
            ->select();

        $datas = array(
            'news' => $news,
            'cases' => $cases,
            'msg' => $msg,
        );
        $this->assign('datas',$datas);

        return $this->fetch();
    }
}
