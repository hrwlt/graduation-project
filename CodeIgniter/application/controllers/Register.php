<?php

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Register';
        $this->load->view('register/index', $data);
    }

    public function sign() {

    }

}
