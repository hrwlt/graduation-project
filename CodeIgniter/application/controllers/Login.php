<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Login';
        $this->load->view('login/index', $data);
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $identity = $this->input->post('identity');
        if (!$username) {
            echo '用户名不能为空！';
        }
        if (!$password) {
            echo '密码不能为空！';
        }

        //加载数据库
        $this->load->model('user_model');
        $row = $this->user_model->get_by_username_password($username, $password, $identity);
        if ($row) {
            echo 'Success!';
        } else {
            echo 'Failed!';
        }
    }

}