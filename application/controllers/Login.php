<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		if ($this->session->userdata('role_id') != NULL) {
			redirect(base_url());
		}else{
			$this->load->view('Login_view');
		}
	}

	public function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Login_model', 'model');
			
			if ($this->input->post('signin') == 'SIGN IN') {
				$user = $this->input->post('user');
				$pass = $this->input->post('pass');

				if ($this->model->can_login($user, $pass)) {
					$this->_enter($user);
				}
				else{
					echo 'failed';
				}
			}
			else{
				echo 'failed';
			}
		}
		else {
			echo 'failed';
		}
	}
			
			
	private function _enter($user){
		$this->load->model('Login_model', 'model');
		$data['user_data'] = $this->model->fetch_user_data($user);
		$create_session = array(
			'user' => $user,
			'role_id' => $data['user_data']['role_id'],
			'emp_id' => $data['user_data']['emp_id'],
			'user_name' => $data['user_data']['user_name'],
			'emp_firstName' => $data['user_data']['emp_firstname'],
			'emp_lastName' => $data['user_data']['emp_lastname'],
			'mode' => $data['user_data']['night_mode']
		);
		$this->session->set_userdata($create_session);
		
	}
					
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}

}
