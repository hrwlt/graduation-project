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
            $session_array = [
                'id' => $row->id,
                'username' => $username,
                'identity' => $identity,
                'email' => $row->email,
                'tel' => $row->tel,
                'qq' => $row->qq,
                'city' => $row->city,
                'address' => $row->address,
                'profile' => $row->profile,
                'avatar' => $row->avatar
            ];
            $this->session->set_tempdata($session_array, NULL, 86400);
        } else {
            $obj['message'] = '请输入正确的用户名或密码！';
            $obj['success'] = FALSE;
        }

        echo json_encode($obj);
        exit();

    }

    public function register() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');
        $identity = $this->input->post('identity');
        $email = $this->input->post('email');

        if (!$username) {
            $obj['message'] = '用户名不能为空！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $user_row = $this->user_model->get_by_username($username);
        if ($user_row) {
            $obj['message'] = '该用户名已经被注册！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        if (strcmp($password, $confirm_password) != 0) {
            $obj['message'] = '两次输入密码必须相同！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $row = $this->user_model->add($username, $password, $identity, $email);
        if (!$row) {
            $obj['message'] = '注册失败，请稍后再试！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $id = $this->user_model->get_by_username($username)->id;
        $obj['message'] = '注册成功！';
        $obj['success'] = TRUE;
        $session_array = [
            'id' => $id,
            'username' => $username,
            'identity' => $identity,
            'email' => $email,
            'tel' => '',
            'qq' => '',
            'city' => '',
            'address' => '',
            'profile' => '',
            'avatar' => ''
        ];
        $this->session->set_tempdata($session_array, NULL, 86400);
        echo json_encode($obj);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login/index');
    }

}