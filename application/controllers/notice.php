<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Notice extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('notification_model');
        if (!$this->session->userdata('admin_logged')) {
            redirect('auth');
        }
	}

	public function index(){
        $data['title'] = "Notice";
        $data['content'] = $this->notification_model->get_all_data();
        $this->load->view('notice/index',$data);
        $this->load->view('common/header2',$data);
    }

    public function details($id){
        $data['title'] = "Details";
        $data['content'] = $this->notification_model->get_data_by_id($id);
        $this->load->view('notice/details',$data);
        
    }
  


}