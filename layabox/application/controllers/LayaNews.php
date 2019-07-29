<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class LayaNews extends MY_Controller {

        public function index(){

            $this->load->view('home/layaNews');
        }
    }