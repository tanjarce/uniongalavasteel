<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timesheet extends CI_Controller {

    public function index() {
        $data = array('active' => 'timesheet');

        $this->load->view('template/head');
        $this->load->view('template/header');
        $this->load->view('template/navigation', $data);
        $this->load->view('Timesheet_view');
        $this->load->view('template/footer');
    }

    public function timesheet_view(){
        // if(! $this->input->is_ajax_request()) {
        //   redirect('404');
        // }
        // else{
            $this->load->view('Timesheet_view');
        // }
    }
}
?>