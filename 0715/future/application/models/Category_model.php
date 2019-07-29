<?php


    class Category_model extends CI_Model{

        public function __construct(){
            parent::__construct();
        }

        public function allCate(){
            return $this->db->select('*')->get('category')->result_array();
        }

    }