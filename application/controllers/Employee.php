<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

  public function index() {
    if ($this->session->userdata('role_id') != '') {
      $this->load->model('Employee_model', 'model');
      $data['fetch_employee'] = $this->model->fetch_employee();
      $this->load->view('template/header');
      $this->load->view('Employee_view', $data);
      $this->load->view('template/footer');
      
    } else {
      redirect(base_url().'Login_view');
    }
  }

  public function fetch_record_list() {
    $id = $this->input->post('id');
    $this->load->model('Employee_model', 'model');
    $data['fetch_employee'] = $this->model->fetch_employee();
    $data['fetch_record_list'] = $this->model->fetch_record_list($id);
    $this->session->set_userdata('rec_list', $id);
    $this->load->view('template/header');
    $this->load->view('Employee_view', $data);
    $this->load->view('template/footer');
  }

  public function view_record() {
    $rec_list = $this->session->userdata('rec_list');
    $rec_id = $this->input->post('rec_id');
    $this->load->model('Employee_model', 'model');
    $data['fetch_employee'] = $this->model->fetch_employee();
    $data['fetch_record_list'] = $this->model->fetch_record_list($rec_list);
    $data['fetch_record'] = $this->model->fetch_record($rec_id);
    $data['fetch_name'] = $this->model->fetch_name();
    $this->load->view('template/header');
    $this->load->view('Employee_view', $data);
    $this->load->view('template/footer');
    
  }


}
?>
