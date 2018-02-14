<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Attendance extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('attendance_model');
        if (!$this->session->userdata('admin_logged')) {
            redirect('auth');
        }
	}

	public function index(){
        $data['title'] = "Attendance";
        $data['content'] = $this->attendance_model->get_all_data();
        $this->load->view('attendance/index',$data);
    }

}