<?php


    class IndexController
    {
        public function index(){
            // echo 'Index/index()';
            require_once ('view/index.php');
        }

        public function demo(){
            // echo 'Index/demo()';
            require_once ('models/StudentsModel.php');

            $stu = new StudentsModel();
            $stu_info = $stu->all();

            require_once ('view/demo.php');
        }
    }