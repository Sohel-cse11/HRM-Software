<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class My_leave extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('leave_model');
        if (!$this->session->userdata('admin_logged')) {
            redirect('auth');
        }
	}

	public function index($id){
		$data['title'] = "My Leave";
		$data['content'] = $this->leave_model->my_leaves($id);
		$this->load->view('my_leave/index',$data);
	}
	
	public function add($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("emp_name","emp_name","trim|required|xss_clean");
		$this->form_validation->set_rules("start_date","start_date","trim|required|xss_clean");
		$this->form_validation->set_rules("end_date","end_date","trim|required|xss_clean");
		$this->form_validation->set_rules("reason","reason","trim|required|xss_clean");
		$this->form_validation->set_rules("leave_type","leave_type","trim|required|xss_clean");
		$this->form_validation->set_rules("day","day","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Employee's Leave";
			$data['emp_list'] = $this->leave_model->employee();
			$data['leave_list'] = $this->leave_model->leave();
			$data['content'] = $this->leave_model->my_leaves($id);
			$this->load->view("my_leave/add",$data);
		} else{
			$data['leave_type'] = $this->input->post('leave_type');
			$data['start_date'] = $this->input->post('start_date');
			$data['emp_name'] = $this->input->post('emp_name');		
			$data['end_date'] = $this->input->post('end_date');
			$data['reason'] = $this->input->post('reason');
			$data['day'] = $this->input->post('day');

			$insert = $this->leave_model->insert_emp_data($data,$id);

			if($insert){
				$this->session->set_flashdata("success", "New Leave Added Successfully.");
                redirect('my_leave/index/'.$this->session->userdata('id'));
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('my_leave/add');
			}
			
	    }
	}

}
