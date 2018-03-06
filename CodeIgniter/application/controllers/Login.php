<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $this->load->view('login/index');
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $identity = $this->input->post('identity');

        $row = $this->user_model->get_by_username_password($username, $password, $identity);
        if ($row) {
            $obj['message'] = '登录成功！';
            $obj['success'] = TRUE;
            // 添加session
            $session_array = ['username' => $username, 'identity' => $identity, 'email' => $row->email];
            $this->session->set_tempdata($session_array, NULL, 10);
        } else {
            $obj['message'] = '请输入正确的用户名或密码！';
            $obj['success'] = FALSE;
        }

        echo json_encode($obj);

    }

    public function register() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $identity = $this->input->post('identity');
        $email = $this->input->post('email');

        $user_row = $this->user_model->get_by_username($username);
        if ($user_row) {
            $obj['message'] = '该用户已经被注册！';
            $obj['success'] = FALSE;
        } else {
            $row = $this->user_model->add($username, $password, $identity, $email);
            if ($row) {
                $obj['message'] = '注册成功！';
                $obj['success'] = TRUE;
                $session_array = ['username' => $username, 'identity' => $identity, 'email' => $email];
                $this->session->set_tempdata($session_array, NULL, 10);
            } else {
                $obj['message'] = '注册失败，请稍后再试！';
                $obj['success'] = FALSE;
            }
        }

        echo json_encode($obj);
    }

}