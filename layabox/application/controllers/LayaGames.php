<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class LayaGames extends MY_Controller {

        public function index(){

            $this->load->view('home/layaGames');
        }
    }