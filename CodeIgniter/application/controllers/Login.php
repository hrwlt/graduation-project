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

        //加载数据库
        $this->load->model('user_model');
        $row = $this->user_model->get_by_username_password($username, $password, $identity);
        if ($row) {
            $obj['message'] = '登录成功！';
            $obj['success'] = TRUE;
            // 添加session
            $session_array = ['username' => $username, 'identity' => $identity];
            $this->session->set_tempdata($session_array, NULL, 10);
        } else {
            $obj['message'] = '请输入正确的用户名或密码！';
            $obj['success'] = FALSE;
        }

        echo json_encode($obj);

    }

}