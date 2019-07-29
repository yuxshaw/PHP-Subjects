<?php

    class Article extends MY_Controller {

        public function index(){

            $cid = $this->uri->segment(3); //一级分类id
            $aid = $this->uri->segment(4); //文章id


            //加载模型
            $this->load->model('Article_model');

            $where = array('aid'=>$aid);

            //调用模型的方法
            $art = $this->Article_model->detail($where);


            //查询二级分类id
            $sub_nav = $this->db->select('cid')
                ->where('pid',$cid)
                ->get('category')
                ->result_array();
            $sub_ids = array();
            foreach ($sub_nav as $item){
                $sub_ids[] = $item['cid'];
            }

            //上一篇
            $prev = $this->db->select('aid')
                ->where('aid < ',$aid)
                ->where_in('cid',$sub_ids)
                ->order_by('aid DESC')
                ->limit(1)
                ->get('article')
                ->row_array();

            //下一篇
            $next = $this->db->select('aid')
                ->where('aid > ',$aid)
                ->where_in('cid',$sub_ids)
                ->limit(1)
                ->get('article')
                ->row_array();

            //echo $this->db->last_query();
            //var_dump($prev);

            if($prev){
                $prev_id = $prev['aid'];
            }else{
                $prev_id = '';
            }

            if($next){
                $next_id = $next['aid'];
            }else{
                $next_id = '';
            }


            $data = array(
                'art' => $art,
                'prev_id' => $prev_id,
                'next_id' => $next_id
            );

            $this->load->view('article/article',$data);
        }

    }