<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index() {
        echo $this->session->userdata('user');
        echo $this->session->userdata('pass');
        echo "   ";
        echo $this->session->userdata('role_id');
        echo $this->session->userdata('pass');
        
        
        
    }
}
?>