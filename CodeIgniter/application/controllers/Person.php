<?php

class Person extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($operate) {
        switch ($operate) {
            case 'personedit':
                $data['title'] = '个人中心 - 基本设置';
                break;
            case 'personavatar':
                $data['title'] = '个人中心 - 头像设置';
                break;
            case 'personsafe':
                $data['title'] = '个人中心 - 安全设置';
                break;
            default:
                break;
        }
        $data['operate'] = $operate;
        $data['username'] = $this->session->username;
        $data['identity'] = $this->session->identity;
        $data['email'] = $this->session->email;
        $this->load->view('common', $data);
    }

}
