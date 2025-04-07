<?php
if (!defined('BASEPATH')) exit();

class MyModule extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'session'));
        $this->load->model('MyModel');
    }

    public function index() {
        if ($this->MyModel->getUserInfo()) {
            $data['user'] = $this->MyModel->getUserInfo();
            $data['title'] = "User Information";
            $this->load->view('my_page', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">You are not logged in.</div>');
            redirect('login');
        }
    }

    public function login() {
        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            echo $errors;
        } else {
            $data['user'] = $this->MyModel->getUserInfo();

            if ($this->MyModel->isLogin($this->input->post('username'), $this->input->post('password'))) {
                redirect('my_page');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Username or password is incorrect.</div>');
                redirect('login');
            }
        }
    }

    public function register() {
        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            echo $errors;
        } else {
            $user = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'email'    => $this->input->post('email')
            );
            $data['user'] = $user;
            $data['title'] = "Register";
            $this->load->view('my_page', $data);
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        redirect('login');
    }

    public function dashboard() {
        $data['title'] = 'Dashboard';
        $this->load->view('dashboard', $data);
    }
}
