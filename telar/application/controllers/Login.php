<?php
class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('login_model');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('login_view');
        
    }

    public function do_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->login_model->login($username, $password);

        if ($user) {
            redirect('alumnos'); 
        } else {
            redirect('login'); 
        }
    }
}
