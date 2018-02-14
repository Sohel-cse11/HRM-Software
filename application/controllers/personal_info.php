<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Personal_info extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('personal_info_model');
        if (!$this->session->userdata('admin_logged')) {
            redirect('auth');
        }
	}

	public function index($id){
        $data['title'] = "Personal Info ";
        $data['content'] = $this->personal_info_model->get_all_data($id);
        $data['job'] = $this->personal_info_model->job_details($id);
        $data['skill'] = $this->personal_info_model->skill($id);
        $data['education'] = $this->personal_info_model->education($id);
        $data['certification'] = $this->personal_info_model->certification($id);
        $data['language'] = $this->personal_info_model->language($id);
        $data['dependents'] = $this->personal_info_model->dependents($id);
        $data['contact'] = $this->personal_info_model->contact($id);
        $this->load->view('personal_info/index',$data);
    }

}