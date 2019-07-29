<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class About extends MY_Controller {
        public function index()
        {
            $a_id = $this->uri->segment(3,1);

            // 查询about_id,about_classify
            $about = $this->db
                ->select('about_id,about_classify')
                ->get('about')
                ->result_array();

            // 查询about_id 下面的内容
            $content = $this->db
                ->select('about_content')
                ->where('about_id',$a_id)
                ->get('about')
                ->row_array();
//            var_dump($content);


            $data = array(
                'about' => $about,
                'a_id' => $a_id,
                'content' => $content
            );

            $this->load->view('about/about',$data);
        }
    }
