<?php
namespace app\index\controller;
//use think\Controller;
use app\index\controller\Common;
use think\Db;
use think\Paginator;
class Index extends Common
{
    public function index($category=1,$cate=0)
    {
    	$GLOBALS['category'] = $category;
    	//查询二级分类
	    $sub_nav = Db::name('category')
		            ->where('pid',$category)
		            ->select();
	    //dump($sub_nav);
	    $cate_ids = Db::name('category')
		            ->where('pid',$category)
		            ->select();
		//二级分类id
	    foreach ($cate_ids as $item) {
		   $ids_arr[] = $item['cid'];
	    }

	    //查询文章
	    if($cate == 0){
	    	$article = Db::name('article')
			            ->where('cid','in',$ids_arr)
		                ->paginate(2);
	    	$page = $article->render();
	    }else{
			$article = Db::name('article')
						->where('cid',$cate)
						->paginate(2);
			$page = $article->render();
	    }

	    $data1 = [
	    	'sub_nav' => $sub_nav,
		    'category'=>$category,
		    'cate' => $cate,
		    'article'=>$article,
		    'page'=>$page
	    ];

	    $this->assign('data1',$data1);
    	return $this->fetch();
    }
}
