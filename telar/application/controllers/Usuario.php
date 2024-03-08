<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function cerrar_sesion() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
