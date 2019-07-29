<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class AboutUs extends MY_Controller {

        public function index(){

            $this->load->view('home/aboutUs');
        }
    }