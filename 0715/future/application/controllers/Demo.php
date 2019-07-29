<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Demo extends CI_Controller {

        public function __construct(){
            parent::__construct();
        }

        public function test(){
            $data = array(
                'name' => 'Alan',
                'age' => '18',
                'hobby' => array('唱','跳','rap','篮球')
            );

            // 向模板输出数据
            $this->load->view('welcome_message',$data);
        }

    }