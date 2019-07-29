<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Article extends MY_Controller{
        public function __construct(){
            parent::__construct();

            // 判断是否登录
            if (!$this->session->userdata('name') && !$this->session->userdata('islogin')){
                redirect(site_url('admin/User/login'));
            }
        }

        public function article_list(){

            // 获取当前cid
            $act = $this->uri->segment(4,'');
            // 获取分页偏移量
            $offset = $this->uri->segment(5,0);
            $limit = 2;
            // 查询当前cid下面的所有文章
            $article = $this->db->select('*')
                ->where('cid',$act)
                ->limit($limit,$offset)
                ->get('article')
                ->result_array();
            $total = $this->db
                ->where('cid',$act)
                ->count_all_results('article');
            // 查询当前cid文章所属的分类
            $cname = $this->db
                ->select('cname')
                ->where('cid',$act)
                ->get('category')
                ->row_array();


            $url = site_url('admin/Article/article_list/'.$act.'/');
            $page = page($url,$total,$limit,5,2);


            $data = array(
                'act' => $act,
                'article' => $article,
                'cname' => $cname,
                'page' => $page
            );

            $this->load->view('admin/article_list',$data);
        }

        public function delete(){
            $del_id = $this->uri->segment(4);
            $res = $this->db->where('aid',$del_id)->delete('article');
            if ($res){
                $url = site_url('admin/Article/article_list/');
                echo '<script>alert("删除成功！");location.href="'.$url.'";</script>';
                exit;
            }else{
                echo '<script>alert("删除失败！");history.back();</script>';
                exit;
            }
        }


        public function article_add(){

            $this->load->helper('form');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('cid','文章分类','trim|required');
            $this->form_validation->set_rules('title','文章标题','trim|required');
            $this->form_validation->set_rules('content','文章内容','trim|required');

            if ($this->form_validation->run()){
                $cid = $this->input->post('cid');

                // 上传图片
                $img_path = $this->upload();

                // 缩略图
                $this->img_resize($img_path);

                $data = array(
                    'cid' => $cid,
                    'title' => $this->input->post('title'),
                    'author' => $this->input->post('author'),
                    'isshow' => $this->input->post('isshow'),
                    'content' => $this->input->post('content'),
                    'pubtime' => time(),
                    'a_img' => $img_path
                );


                $res = $this->db->insert('article',$data);
                if ($res){
                    echo '<script>alert("添加成功！");location.href="'.site_url('admin/Article/article_list/'.$cid).'";</script>';
                }
            }


            $this->load->view('admin/article_add');
        }

        public function upload(){
            $path = 'uploads/';
            if (!file_exists($path)){
                mkdir($path,0777);
            }
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;
//            $config['max_width'] = 1024;
//            $config['max_height'] = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('img')){
                $error = array('error' => $this->upload->display_errors());

                $this->load->view(site_url('admin/Article/article_add'), $error);
            }else{
                $data = array('upload_data' => $this->upload->data());
                return $path.$data['upload_data']['file_name'];
            }

        }

        public function img_resize($img_path){

            $new_img_path = 'uploads/thumb/';
            if (!file_exists($new_img_path)){
                mkdir($new_img_path);
            }

            $config['image_library'] = 'gd2';
            $config['source_image'] = $img_path;
            $config['new_image'] = $new_img_path;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
//            $config['thumb_marker'] = '_thumb';
            $config['width']     = 120;
            $config['height']   = 80;

            $this->load->library('image_lib', $config);

            $data = $this->image_lib->resize();
            return $data;

        }

        public function cate_list(){

            $offset = $this->uri->segment(4,0);
            $limit = 4;

            $nav_arr = $this->db
                ->limit($limit,$offset)
                ->get('category')
                ->result_array();

            $total = $this->db
                ->select('cid')
                ->count_all_results('category');

            $url = site_url('admin/Article/cate_list/');
            $page = page($url,$total,$limit,4,2);

            $data = array(
                'nav_arr' => $nav_arr,
                'page' => $page
            );

            $this->load->view('admin/cate_list',$data);
        }

    }