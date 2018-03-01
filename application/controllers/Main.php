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
    
    public function set_mode(){
        $mode = $this->input->post('mode');
        $id =  $this->session->userdata('emp_id');

        $this->load->model('Employee_model', 'model');
        echo $this->model->input_mode($mode, $id);
        
    }
}

?>