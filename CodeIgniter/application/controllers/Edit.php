<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = '个人信息';
        $data['username'] = $this->session->username;
        $data['identity'] = $this->session->identity;
        $data['email'] = $this->session->email;
        $this->load->view('common', $data);
    }

}
