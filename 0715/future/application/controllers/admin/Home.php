<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends MY_Controller{
        public function __construct(){
            parent::__construct();

            // 判断是否登录
            if (!$this->session->userdata('name') && !$this->session->userdata('islogin')){
                redirect(site_url('admin/User/login'));
            }

        }

        public function index(){

            $data = array(
                // 系统信息
                'os' => PHP_OS,
                'php_v' => PHP_VERSION,
                'mysql_v' => $this->db->version(),
            );


            $this->load->view('admin/index',$data);
        }

    }