<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index() {
        if ($this->session->userdata('role_id') != NULL) {
            $this->load->view('template/header');
            $this->load->view('admin/Dashboard');
            $this->load->view('template/footer');
        }
        else {
            redirect(base_url().'login');
        }
    }    
}

?>