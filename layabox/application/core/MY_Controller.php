<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class MY_Controller extends CI_Controller {

        public function __construct()
        {
            parent::__construct();

            $seg = $this->uri->segment(1,'');
            if ($seg == 'admin'){
                $this->admin_header();
            }else{
                $this->header();
            }

        }


        public function header(){

            // 查询所有的导航
            $nav = $this->db
                ->get('nav')
                ->result_array();

            $data = array(
                'nav' => $nav
            );

            $this->load->vars($data);
        }
    }