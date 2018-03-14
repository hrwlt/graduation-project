<?php

class PersonNormal extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($operate) {
        $data['title'] = '个人中心';
        $data['operate'] = $operate;
        $data['username'] = $this->session->username;
        $data['identity'] = $this->session->identity;
        $data['email'] = $this->session->email;
        $this->load->view('common', $data);
    }

}
