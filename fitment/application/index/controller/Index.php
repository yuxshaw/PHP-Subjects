<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
//use app\index\controller\Common;

class Index extends Common
{
    public function index()
    {
//        $data = array(
//        );
//        $this->assign('data',$data);
        return $this->fetch();
    }
}
