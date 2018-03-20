<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = '首页';
        $data['operate'] = 'home';
        $data['seen'] = 'home';
        $data['username'] = $this->session->username;
        $data['identity'] = $this->session->identity;
        $data['email'] = $this->session->email;
        $data['tel'] = $this->session->tel;
        $data['qq'] = $this->session->qq;
        $data['address'] = $this->session->address;
        $data['city'] = $this->session->city;
        $data['profile'] = $this->session->profile;
        $this->load->view('common', $data);
    }

}
