<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Time_management extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('time_management_model');
        if (!$this->session->userdata('admin_logged')) {
            redirect('auth');
        }
	}

	public function project($id){
        $data['title'] = "My Project";
        $data['content'] = $this->time_management_model->project($id);
        $this->load->view('time_management/project',$data);
    }

    public function attendance($id){
        $data['title'] = "My Attedance";
        $data['content'] = $this->time_management_model->attendance($id);
        $this->load->view('time_management/attendance',$data);
    }

}