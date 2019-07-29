<?php


namespace app\index\controller;


use think\Controller;
use think\Db;
use think\Request;

class Common extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->header();
    }

    public function header(){
        $nav = Db::name('nav')
            ->where('p_id',0)
            ->select();
        $data = array(
            'nav' => $nav,
        );
        $this->assign('data',$data);
    }
}