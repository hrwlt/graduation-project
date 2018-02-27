<?php

class Sign extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Sign';
        $this->load->view('sign/index', $data);
    }

    public function sign() {

    }

}