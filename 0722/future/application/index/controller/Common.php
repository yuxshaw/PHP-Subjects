<?php


namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;
use think\Url;

class Common extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->header();
    }

    public function header($category = 1){
        $nav = Db::name('category')
            ->where('pid',0)
            ->select();

        $url = Request::instance()->domain();
        $data = array(
            'nav' => $nav,
            'url' => $url,
            'cid' => $category
        );
        $this->assign('data',$data);

//        return $this->fetch('header');
    }
}