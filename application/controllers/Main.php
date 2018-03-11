<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index() {
        $data = array('active' => 'payroll');
        
        if ($this->session->userdata('role_id') != NULL) {
            $this->load->view('template/head');
            $this->load->view('template/header');
            $this->load->view('template/navigation', $data);
            $this->load->view('Payroll_view');
            $this->load->view('template/footer');
        }
        else {
            redirect(base_url().'login');
        }
    }

    public function main_view(){
        // if(! $this->input->is_ajax_request()) {
        //   redirect('404');
        // }
        // else{
          $this->load->view('Payroll_view');
        // }
    }

    
    public function set_mode(){
        $mode = $this->input->post('mode');
        $id =  $this->session->userdata('emp_id');

        $this->load->model('Employee_model', 'model');
        $this->model->input_mode($mode, $id);
        $this->get_mode($id);
    }

    public function get_mode($id){
        $this->load->model('Employee_model', 'model');
        $data['user_data'] = $this->model->get_mode($id);
        $this->session->set_userdata('mode', $data['user_data']['night_mode']);
    }
}

?>