<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends MY_Controller
{
    public function index()
    {
        $keyword = $this->input->post('keyword');
        $query = $this->input->post('query');

        $this->session->set_userdata(['keyword'=>$keyword]);
        $this->session->set_userdata(['query'=>$query]);

        //echo $this->session->userdata('keyword');

        //重定向
        redirect('Search/find');

    }

    public function find()
    {
        $key = $this->session->userdata('keyword');
        $que = $this->session->userdata('query');

        $offset = $this->uri->segment(3,0);
        $limit = 2;
        if ($key) {
            $article = $this->db->select('*')
                ->from('article')
                ->join('category','article.cid = category.cid')
                ->like('title', $key)
                ->or_like('content', $key)
                ->or_like('author', $key)
                ->limit($limit, $offset)
                ->get()
                ->result_array();
//            var_dump($article);
//            echo $this->db->last_query(); //最后一次执行的sql语句
            $total = $this->db
                ->like('title', $key)
                ->or_like('content', $key)
                ->or_like('author', $key)
                ->count_all_results('article');
        }elseif ($que){
            $article = $this->db->select('*')
                ->from('article')
                ->join('category','article.cid = category.cid')
                ->like('title', $que)
                ->or_like('content', $que)
                ->or_like('author', $que)
                ->limit($limit, $offset)
                ->get()
                ->result_array();
            $total = $this->db
                ->like('title', $que)
                ->or_like('content', $que)
                ->or_like('author', $que)
                ->count_all_results('article');
        }


//        foreach ($article as $item){
//            $con = $item['content'];
//        }



        //echo $total;
        //echo $this->db->last_query(); //最后一次执行的sql语句
        //var_dump($article);

        $url = site_url('Search/find/');
        $page = page($url,$total,$limit,3,2);

        $data = array(
            'article' => $article,
            'total' => $total,
            'page' => $page,
        );

        $this->load->view('search/search',$data);
    }
}