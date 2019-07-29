<?php


    class Article_model extends CI_Model {

        public function __construct(){
            parent::__construct();
        }

        public function detail($where){
            return $this->db->where($where)->get('article')->row_array(); //  获取一条数据(一维数组)
        }

        public function get_all($where){
            return $this->db->where($where)->get('article')->result_array();
        }

    }