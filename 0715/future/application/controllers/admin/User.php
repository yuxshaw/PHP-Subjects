<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class User extends MY_Controller{

        public function __construct(){
            parent::__construct();
        }

        public function login(){

            if ($this->session->userdata('name') && $this->session->userdata('islogin') == 1){
                $url = site_url('admin/Home/index');
                echo '<script>alert("你已经登录！");location.href="'.$url.'";</script>';
                exit;
            }

            $this->load->helper('form');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('username','用户名','trim|required');
            $this->form_validation->set_rules('password','密码','trim|required');
            $this->form_validation->set_rules('code','验证码','trim|required');

            if ($this->form_validation->run()){ // 如果验证操作
                // 登录操作
                $code = $this->input->post('code');
                $sess_code = $this->session->userdata('code');
                if ($code != $sess_code){
                    echo '<script>alert("验证码错误！");history.back();</script>';
                    exit;
                }


                // 执行验证
                $where = array(
                    'name' => $this->input->post('username'),
                    'password' => md5($this->input->post('password'))
                );

                $result = $this->db->where($where)->get('user')->row_array();
                if ($result){
                    $data = array(
                        'uid' => $result['uid'],
                        'name' => $result['name'],
                        'islogin' => 1,
                        'log_time' => time()
                    );
                    $this->session->set_userdata($data);    // 数据保存到session
                    $url = site_url('admin/Home/index');
                    echo '<script>alert("登录成功！");location.href="'.$url.'";</script>';
                }else{
                    echo '<script>alert("账号或者密码错误！");history.back();</script>';
                }

            }else{
                $data = array(
                    'code_img' => $this->imgcode()
                );
                $this->load->view('admin/login',$data);
            }
        }

        public function logout(){
            // 删除session
            $this->session->unset_userdata('uid');
            $this->session->unset_userdata('name');
            $this->session->unset_userdata('islogin');

            // 销毁session
            $this->session->sess_destroy();
            $url = site_url('admin/User/login');
            echo '<script>alert("退出成功！");location.href="'.$url.'";</script>';
        }


        public function imgcode(){
            if (!file_exists('captcha')){
                mkdir('captcha',0777);
            }
            $this->load->helper('captcha');
            $vals = array(
                'word'      => '',
                'img_path'  => './captcha/',
                'img_url'   => base_url('captcha'),
                'font_path' => './static/admin/fonts/texb.ttf',
                'img_width' => '100',
                'img_height'    => 30,
                'expiration'    => 1800,
                'word_length'   => 4,
                'font_size' => 16,
                'img_id'    => 'Imageid',
                'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

                // White background and border, black text and red grid
                'colors'    => array(
                    'background' => array(255, 255, 255),
                    'border' => array(150, 150, 150),
                    'text' => array(0, 0, 0),
                    'grid' => array(255, 40, 40)
                )
            );

            $cap = create_captcha($vals);
            $code_img =  $cap['image'];

            // 将验证码字符存到session里面
            $this->session->set_userdata('code',strtolower($cap['word']));

            $is_ajax = $this->input->post('is_ajax');
            if ($is_ajax == 1){
                echo $code_img;
                exit;
            }else{
                return $code_img;
            }

        }

    }