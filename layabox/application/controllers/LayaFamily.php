<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class LayaFamily extends MY_Controller {

        public function index(){

            $this->load->view('home/layaFamily');
        }
    }