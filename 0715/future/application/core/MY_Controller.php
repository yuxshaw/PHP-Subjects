<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $seg = $this->uri->segment(1,'');
        if ($seg == 'admin'){
            $this->admin_header();
        }else{
            $this->header();
        }

        $this->footer();
    }

    public function index()
	{

	}

	public function header(){
        // 查询一级分类的ID
        $cid = $this->uri->segment(3, 1);
        // 查询一级分类
        $res = $this->db->query("SELECT * FROM pre_category WHERE pid = 0");
        $nav = $res->result_array();

        $data = array(
            'cid' => $cid,
            'nav' => $nav,
        );

        $this->load->vars($data);

    }

    public function footer(){

        $conf = $this->db
            ->select('*')
//            ->where('pconf_id',0)
            ->get('config')
            ->result_array();

        $data = array(
            'conf' => $conf,
            'pconf_id' => 0
        );

        $this->load->vars($data);
    }


    public function admin_header(){

        $this->load->model('Category_model');
        $cate = $this->Category_model->allCate();
        foreach ($cate as $key => $item){
            if ($item['pid'] == 0){
                $cate_arr[$key] = $item;
            }
            foreach ($cate as $v){
                if ($v['pid'] == $item['cid']){
                    $cate_arr[$key]['sub'][] = $v;
                }
            }
        }

        $data = array(
            'nav' =>$cate_arr,
        );

        $this->load->vars($data);
    }

}
