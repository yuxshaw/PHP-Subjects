<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {


	public function index()
	{
	    // 手动加载辅助函数,可以在autoload.php中改为自动加载
        // $this->load->helper('url');

	    // echo base_url();   // 根据配置文件返回站点的根 URL
        // echo site_url();   //

        // 手动连接数据库，可以在autoload.php中改为自动加载
        // $this->load->database('pre_future');


        $data = $this->get_data();
		$this->load->view('index/index',$data);

	}


    public function get_data()
    {
        // 查询一级分类的ID
        $cid = $this->uri->segment(3, 1);
        // 查询二级分类id
        $ccid = $this->uri->segment(4, 0);
        //查询构造器--链式查询   查询二级分类
        $sub_nav = $this->db
            ->where('pid', $cid)
            ->get('category')
            ->result_array();

        foreach ($sub_nav as $item){
            $ccid_arr[] = $item['cid'];
        }

        // 获取分页偏移量
        $offset = intval($this->uri->segment(5,0));
        $limit = 4;


        // 判断
        if ($ccid == 0) {
            // 查询所在cid的文章
            $article = $this->db
                ->where_in('cid',$ccid_arr)
                ->where('isshow',1)
                ->limit($limit,$offset)
                ->get('article')
                ->result_array();

            $total = $this->db
                ->where_in('cid',$ccid_arr)
                ->where('isshow',1)
                ->count_all_results('article');
        } else {
            // 查询所在cid的文章
            $article = $this->db
                ->where(array('cid' => $ccid, 'isshow' => 1))
                ->limit($limit,$offset)
                ->get('article')
                ->result_array();

            $total = $this->db
                ->where(array('cid' => $ccid, 'isshow' => 1))
                ->count_all_results('article');
        }

        $url = site_url('Home/index/'.$cid.'/'.$ccid);
        $page = page($url,$total,$limit,5,4);

        $data = array(
            'sub_nav' => $sub_nav,
            'ccid' => $ccid,
            'article' => $article,
            'page' => $page
        );
        return $data;
    }

}
