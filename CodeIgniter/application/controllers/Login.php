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
            $session_array = ['id' => $row->id, 'username' => $username, 'identity' => $identity, 'email' => $row->email, 'tel' => $row->tel, 'qq' => $row->qq, 'city' => $row->city, 'address' => $row->address, 'profile' => $row->profile, 'avatar' => $row->avatar];
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
        $session_array = ['id' => $id, 'username' => $username, 'identity' => $identity, 'email' => $email, 'tel' => '', 'qq' => '', 'city' => '', 'address' => '', 'profile' => '', 'avatar' => ''];
        $this->session->set_tempdata($session_array, NULL, 86400);
        echo json_encode($obj);
    }

    public function retrieve() {
        $username = $this->input->post('username');
        $identity = $this->input->post('identity');
        $result = $this->user_model->get_by_username_identity($username, $identity);
        if (!$result) {
            $obj['message'] = '该用户不存在！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $email = $result->email;
        if (!$email) {
            $obj['message'] = '该用户没有设置邮箱！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.sohu.com';
        $config['smtp_user'] = 'hr393816634@sohu.com';
        $config['smtp_pass'] = 'king13145275495';
        $config['smtp_port'] = 25;
        $config['smtp_timeout'] = 30;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['validate'] = TRUE;
        $config['wordwrap'] = TRUE;
        $config['crlf'] = "\r\n";
        $this->email->initialize($config);
        $this->email->from('hr393816634@sohu.com', 'HZNUDODO试题库系统');
        $this->email->to($email);
        $this->email->subject('找回密码');
        $reset_password = $this->reset_password();
        $this->email->message($reset_password);
        if ($this->email->send()) {
            $where = ['username' => $username, 'identity' => $identity];
            $data = ['password' => md5($reset_password)];
            $this->user_model->update($where, $data);
            $obj['success'] = TRUE;
            echo json_encode($obj);
            exit();
        } else {
            $obj['message'] = '密码邮件发送失败！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login/index');
    }

    // 重置密码算法
    private function reset_password() {
        $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $password = '';
        for ($i = 0; $i < 6; $i++) {
            $password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $password;
    }

}