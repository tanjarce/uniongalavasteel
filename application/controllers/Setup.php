<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller {

  public function index() {
    $data = array('active' => 'setup');
    if(! $this->input->is_ajax_request()) {
      $this->load->view('template/head');
      $this->load->view('template/header');
      $this->load->view('template/navigation', $data);
      $this->load->view('Setup_view');
      $this->load->view('template/footer');
    }
    else{
      $this->load->view('Setup_view');
    }
  }

  public function flashdata($err_name, $name) {
    $a = $this->input->post($name);
    $this->session->set_flashdata($err_name, $a);
  }

// ========================================================================
// ==========================  E M P L O Y E E  ===========================
// ========================================================================
  public function employee() {
    $this->load->model('Setup_model', 'model');
    $data['fetch_employee'] = $this->model->fetch_employee();
    $data['fetch_department'] = $this->model->fetch_department();
    $this->load->view('template/header');
    $this->load->view('Setup_employee_view', $data);
    $this->load->view('template/footer');
  }

  public function employee_validation() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('l_name','Last Name','required');
    $this->form_validation->set_rules('f_name','First Name','required');
    // $this->form_validation->set_rules('m_name','Middle Name','required');
    $this->form_validation->set_rules('cp','Contact Number','required|exact_length[10]');
    $this->form_validation->set_rules('email','Email','required|valid_email');
    $this->form_validation->set_rules('address','Address','required');
    $this->form_validation->set_rules('dept','Department','required');
    $this->form_validation->set_rules('active_tag','Active Tag','required');

    if ($this->form_validation->run() == TRUE) {
      $this->load->model('Setup_model', 'model');
      $data = array(
        'emp_lastname' => ucfirst($this->input->post('l_name')),
        'emp_firstname' => ucfirst($this->input->post('f_name')),
        'emp_middlename' => ucfirst($this->input->post('m_name')),
        'emp_contact_no' => '+63'.$this->input->post('cp'),
        'emp_email' => $this->input->post('email'),
        'emp_address' => ucfirst($this->input->post('address')),
        'department_id' => ucfirst($this->input->post('dept')),
        'emp_active_tag' => $this->input->post('active_tag'),
        'emp_archive' => $this->input->post('archive'),
      );
      if ($this->input->post('insert')) {
        $this->model->insert_employee($data);
        // $this->input->post('archive');
        redirect(base_url().'Setup/employee_inserted');
      }
      if ($this->input->post('update')) {
        $id = $this->input->post('id');
        $this->model->update_employee($data, $id);
        redirect(base_url().'Setup/employee_updated');
      }

    }
    else {
      if ($this->input->post('insert')) {
        $this->flashdata('err_lname', 'l_name');
        $this->flashdata('err_fname', "f_name");
        $this->flashdata('err_mname', "m_name");
        $this->flashdata('err_cp', 'cp');
        $this->flashdata('err_email', 'email');
        $this->flashdata('err_address', 'address');
        $this->flashdata('err_dept', 'dept');
        $this->flashdata('err_active_tag', 'active_tag');

        $this->employee();
        // redirect(base_url().'Setup/employee');
      }
      if ($this->input->post('update')) {
        $id = $this->input->post('id');
        $this->load->model('Setup_model', 'model');
        $data['single_employee'] = $this->model->fetch_single_employee($id);
        $data['fetch_employee'] = $this->model->fetch_employee();
        $data['fetch_department'] = $this->model->fetch_department();

        $this->load->view('template/header');
        $this->load->view('Setup_employee_view', $data);
        $this->load->view('template/footer');
      }
    }

  }

  public function employee_inserted() {
    $this->employee();
  }

  public function employee_updated() {
    $this->employee();
  }

  public function update_employee() {
    $id = $this->uri->segment(3);
    $this->load->model('Setup_model', 'model');
    $data['single_employee'] = $this->model->fetch_single_employee($id);
    $data['fetch_department'] = $this->model->fetch_department();
    $data['fetch_employee'] = $this->model->fetch_employee();
    $this->load->view('template/header');
    $this->load->view('Setup_employee_view', $data);
    $this->load->view('template/footer');
  }

  public function delete_employee() {
    $id = $this->uri->segment(3);
    $this->load->model('Setup_model', 'model');
    $data = array(
      'emp_archive' => 0,
    );
    $this->model->delete_employee($data, $id);

    redirect(base_url().'Setup/employee_deleted');
  }

  public function employee_deleted() {
    $this->employee();
  }

// ========================================================================
// ============================  R E C O R D  =============================
// ========================================================================
  public function record() {
    $this->load->model('Setup_model', 'model');
    $data['fetch_name'] = $this->model->fetch_name();
    $data['fetch_records'] = $this->model->fetch_records();
    $this->load->view('template/header');
    $this->load->view('Setup_record', $data);
    $this->load->view('template/footer');
  }

  public function record_validation() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('whom', 'Name', 'required');
    $this->form_validation->set_rules('sender', 'Sender', 'required');
    $this->form_validation->set_rules('subject', 'Subject', 'required');
    $this->form_validation->set_rules('comment', 'Comment', 'required');
    $this->form_validation->set_rules('date', 'Date', 'required');

    if ($this->form_validation->run() == TRUE) {
      $this->load->model('Setup_model', 'model');
      $data = array(
        'emp_id' => $this->input->post('whom'),
        'rec_sender' => $this->input->post('sender'),
        'rec_subject' => ucfirst($this->input->post('subject')),
        'rec_comment' => $this->input->post('comment'),
        'rec_date' => $this->input->post('date'),
        'rec_archive' => 1,
      );
      if ($this->input->post('cancel')) {
        redirect(base_url().'Setup/record');
      }
      if ($this->input->post('send')) {
        $this->model->insert_record($data);
        redirect(base_url().'Setup/record_inserted');
      }
      if ($this->input->post('edit')) {
        $id = $this->input->post('id');
        $this->model->update_record($data, $id);
        redirect(base_url().'Setup/record_updated');
      }
    }
    else {
      if ($this->input->post('send')) {
        $this->flashdata('err_whom', 'whom');
        $this->flashdata('err_sender', 'sender');
        $this->flashdata('err_subject', 'subject');
        $this->flashdata('err_comment', 'comment');
        $this->flashdata('err_date', 'date');

        $this->record();
        // redirect(base_url().'Setup/record');
      }
      if ($this->input->post('cancel')) {
        redirect(base_url().'Setup/record');
      }
      if ($this->input->post('edit')) {
        $id = $this->input->post('rec_id');
        $this->load->model('Setup_model', 'model');
        $data['record_view'] = $this->model->record_view($id);
        $data['fetch_name'] = $this->model->fetch_name();
        $data['fetch_records'] = $this->model->fetch_records();
        $this->load->view('template/header');
        $this->load->view('Setup_record', $data);
        $this->load->view('template/footer');
      }
    }


  }

  public function record_inserted() {
    $this->record();
  }

  public function record_view() {
    $id = $this->input->post('rec_id');
    $this->load->model('Setup_model', 'model');
    $data['record_view'] = $this->model->record_view($id);
    $data['fetch_name'] = $this->model->fetch_name();
    $this->load->view('template/header');
    $this->load->view('Setup_record_view', $data);
    $this->load->view('template/footer');
  }

  public function update_record() {
    $id = $this->input->post('rec_id');
    $this->load->model('Setup_model', 'model');
    $data['record_view'] = $this->model->record_view($id);
    $data['fetch_name'] = $this->model->fetch_name();
    $data['fetch_records'] = $this->model->fetch_records();
    $this->load->view('template/header');
    $this->load->view('Setup_record', $data);
    $this->load->view('template/footer');
  }

  public function record_updated() {
    $this->record();
  }

  public function delete_record() {
    $id = $this->input->post('rec_id');
    $this->load->model('Setup_model', 'model');
    $data = array(
      'rec_archive' => 0,
    );
    $this->model->delete_record($data, $id);

    redirect(base_url().'Setup/record_deleted');
  }

  public function record_deleted() {
    $this->record();
  }

// ========================================================================
// ==========================  U S E R R O L E  ===========================
// ========================================================================
  public function user_role() {
    $this->load->model('Setup_model', 'model');
    $data['fetch_user_role'] = $this->model->fetch_user_role();
    $this->load->view('template/header');
    $this->load->view('Setup_user_role', $data);
    $this->load->view('template/footer');
  }

  public function user_role_validation() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Role Name', 'required');
    $this->form_validation->set_rules('desc', 'Role Decription', 'required');
    if ($this->form_validation->run() == TRUE) {
      $this->load->model('Setup_model', 'model');
      $data = array(
        'role_name' => ucfirst($this->input->post('name')),
        'role_description' => ucfirst($this->input->post('desc')),
      );
      if ($this->input->post('insert')) {
        $this->model->insert_role($data);
        redirect(base_url().'Setup/role_inserted');
      }
      if ($this->input->post('save')) {
        $id = $this->input->post('id');
        $this->model->update_role($data, $id);
        redirect(base_url().'Setup/role_updated');
      }
      if ($this->input->post('cancel')) {
        redirect(base_url().'Setup/user_role');
      }
    }
    else {
      if ($this->input->post('insert')) {
        $this->flashdata('err_name', 'name');
        $this->flashdata('err_desc', 'desc');

        $this->user_role();
      }
      if ($this->input->post('save')) {
        $id = $this->input->post('id');
        $this->load->model('Setup_model', 'model');
        $data['single_role'] = $this->model->single_role($id);
        $data['fetch_user_role'] = $this->model->fetch_user_role();

        $this->load->view('Setup_user_role', $data);
      }
      if ($this->input->post('cancel')) {
        redirect(base_url().'Setup/user_role');
      }
    }

  }

  public function role_inserted() {
    $this->user_role();
  }

  public function role_updated() {
    $this->user_role();
  }

  public function update_role() {
    $id = $this->input->post('id');
    $this->load->model('Setup_model', 'model');
    $data['single_role'] = $this->model->single_role($id);
    $data['fetch_user_role'] = $this->model->fetch_user_role();
    $this->load->view('template/header');
    $this->load->view('Setup_user_role', $data);
    $this->load->view('template/footer');
  }

  public function delete_role() {
    $id = $this->input->post('id');
    $this->load->model('Setup_model', 'model');
    $this->model->delete_role($id);

    redirect(base_url().'Setup/role_deleted');
  }

  public function role_deleted() {
    $this->user_role();
  }

// ========================================================================
// ========================  D E P A R T M E N T  =========================
// ========================================================================
  public function department() {
    $this->load->model('Setup_model', 'model');
    $data['fetch_departments'] = $this->model->fetch_departments();
    $this->load->view('template/header');
    $this->load->view('Setup_department', $data);
    $this->load->view('template/footer');
  }

  public function department_validation() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Department Name', 'required');
    $this->form_validation->set_rules('desc', 'Department Description', 'required');

    if ($this->form_validation->run() == TRUE) {
      $this->load->model('Setup_model', 'model');
      $data = array(
        'department_name' => ucfirst($this->input->post('name')),
        'department_description' => ucfirst($this->input->post('desc')),
      );
      if ($this->input->post('insert')) {
        $this->model->insert_department($data);
        redirect(base_url().'Setup/department_inserted');
      }
      if ($this->input->post('update')) {
        $id = $this->input->post('id');
        $this->model->update_department($data, $id);
        redirect(base_url().'Setup/department_updated');
      }
      if ($this->input->post('cancel')) {
        reirect(base_url().'Setup/department');
      }
    }
    else {
      if ($this->input->post('insert')) {
        $this->flashdata('err_name', 'name');
        $this->flashdata('err_desc', 'desc');

        $this->department();
      }
      if ($this->input->post('update')) {
        $id = $this->input->post('id');
        $this->load->model('Setup_model', 'model');
        $data['fetch_departments'] = $this->model->fetch_departments();
        $data['single_department'] = $this->model->single_department($id);
        $this->load->view('template/header');
        $this->load->view('Setup_department', $data);
        $this->load->view('template/footer');
      }
      if ($this->input->post('cancel')) {
        reirect(base_url().'Setup/department');
      }
    }
  }

  public function department_inserted() {
    $this->department();
  }

  public function department_updated() {
    $this->department();
  }

  public function update_department() {
    $id = $this->input->post('id');
    $this->load->model('Setup_model', 'model');
    $data['fetch_departments'] = $this->model->fetch_departments();
    $data['single_department'] = $this->model->single_department($id);
    $this->load->view('template/header');
    $this->load->view('Setup_department', $data);
    $this->load->view('template/footer');
  }

  public function delete_department() {
    $id = $this->input->post('id');
    $this->load->model('Setup_model', 'model');
    $this->model->delete_department($id);

    redirect(base_url().'Setup/department_deleted');
  }

  public function department_deleted() {
    $this->department();
  }

// ========================================================================
// =============================  U S E R S  ==============================
// ========================================================================
  public function user() {
    $this->load->model('Setup_model', 'model');
    $data['fetch_user'] = $this->model->fetch_user();
    $data['fetch_name'] = $this->model->fetch_name();
    $data['fetch_user_role'] = $this->model->fetch_user_role();
    $this->load->view('template/header');
    $this->load->view('Setup_user', $data);
    $this->load->view('template/footer');
  }

  public function user_validation() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('user', 'User Name', 'required');
    $this->form_validation->set_rules('pass', 'Password', 'required');
    $this->form_validation->set_rules('emp', 'Employee Name', 'required');
    $this->form_validation->set_rules('role', 'Role', 'required');
    $this->form_validation->set_rules('tag', 'Active Tag', 'required');

    if ($this->form_validation->run() == TRUE) {
      $this->load->model('Setup_model', 'model');
      $data = array (
        'user_name' => $this->input->post('user'),
        'user_password' => $this->input->post('pass'),
        'emp_id' => $this->input->post('emp'),
        'role_id' => $this->input->post('role'),
        'user_active_tag' => $this->input->post('tag'),
      );
      if ($this->input->post('insert')) {
        $this->model->insert_user($data);
        redirect(base_url().'Setup/user_inserted');
      }
      if ($this->input->post('update')) {
        $id = $this->input->post('id');
        $this->model->update_user($data, $id);
        redirect(base_url().'Setup/user_updated');
      }
      if ($this->input->post('cancel')) {
        redirect(base_url().'Setup/user');
      }
    }
    else {
      if ($this->input->post('insert')) {
        $this->flashdata('err_user', 'user');
        $this->flashdata('err_pass', 'pass');
        $this->flashdata('err_emp', 'emp');
        $this->flashdata('err_role', 'role');
        $this->flashdata('err_tag', 'tag');

        $this->user();
      }
      if ($this->input->post('update')) {
        $id = $this->input->post('id');
        $this->load->model('Setup_model', 'model');
        $data['fetch_single_user'] = $this->model->fetch_single_user($id);
        $data['fetch_user'] = $this->model->fetch_user();
        $data['fetch_name'] = $this->model->fetch_name();
        $data['fetch_user_role'] = $this->model->fetch_user_role();
        $this->load->view('template/header');
        $this->load->view('Setup_user', $data);
        $this->load->view('template/footer');
      }
      if ($this->input->post('cancel')) {
        redirect(base_url().'Setup/user');
      }
    }
  }

  public function user_inserted() {
    $this->user();
  }

  public function user_updated() {
    $this->user();
  }

  public function update_user() {
    $id = $this->input->post('id');
    $this->load->model('Setup_model', 'model');
    $data['fetch_single_user'] = $this->model->fetch_single_user($id);
    $data['fetch_user'] = $this->model->fetch_user();
    $data['fetch_name'] = $this->model->fetch_name();
    $data['fetch_user_role'] = $this->model->fetch_user_role();
    $this->load->view('template/header');
    $this->load->view('Setup_user', $data);
    $this->load->view('template/footer');
  }

  public function delete_user() {
    $id = $this->input->post('id');
    $this->load->model('Setup_model', 'model');
    $this->model->delete_user($id);

    redirect(base_url().'Setup/user_deleted');
  }

  public function user_deleted() {
    $this->user();
  }









}
?>
