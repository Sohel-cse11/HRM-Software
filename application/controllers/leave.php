<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Leave extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('leave_model');
        if ( $this->session->userdata('admin_logged')) {
        	if($this->session->userdata('user_roles')=='1') {
        	
        }else{
        	 redirect('dashboard');
        } 
        }else{
            redirect('auth');
        }

	}

//----------------------------------- start leave area -----------------------------------------
	// read data
	public function index(){
		$data['title'] = "Leave Setup";
		$data['content'] = $this->leave_model->get_all_data();
		$this->load->view("leave/index",$data);
	}
	public function add(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("leave_name","leave_name","trim|required|xss_clean");
		$this->form_validation->set_rules("leaves_per_year","leaves_per_year","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Leave";
			$this->load->view("Leave/add",$data);
		} else{
			$data['leave_name'] = $this->input->post('leave_name');
			$data['leaves_per_year'] = $this->input->post('leaves_per_year');
			$insert = $this->leave_model->insert_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Leave successfully.");
                redirect('leave/index');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('leave/add');
			}
			
	    }
	}

	// update data
	public function edit($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("leave_name","leave_name","trim|required|xss_clean");
		$this->form_validation->set_rules("leaves_per_year","leaves_per_year","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Leave";
			$data['content'] = $this->leave_model->get_data_by_id($id);
			$this->load->view("leave/edit",$data);
		} else{
			$data['leave_name'] = $this->input->post('leave_name');
			$data['leaves_per_year'] = $this->input->post('leaves_per_year');
			$update = $this->leave_model->update_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "update successfully.");
                redirect('leave');
			} 
		}
	}

	// delete data
	public function delete($did){
		$id = trim($did);
        $change = $this->leave_model->delete_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('leave');
        }
	}

//----------------------------------- end leave area -----------------------------------------


	public function employee_list(){
		$data['title'] = "Employee's Leave List";
		$data['content'] = $this->leave_model->get_all_employee_leave_data();
		$this->load->view("leave/employee_list",$data);
	}

	public function add_employee_leave(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("emp_name","emp_name","trim|required|xss_clean");
		$this->form_validation->set_rules("start_date","start_date","trim|required|xss_clean");
		$this->form_validation->set_rules("end_date","end_date","trim|required|xss_clean");
		$this->form_validation->set_rules("reason","reason","trim|required|xss_clean");
		$this->form_validation->set_rules("status","status","trim|required|xss_clean");
		$this->form_validation->set_rules("leave_type","leave_type","trim|required|xss_clean");
		$this->form_validation->set_rules("day","day","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Employee's Leave";
			$data['emp_list'] = $this->leave_model->employee();
			$data['leave_list'] = $this->leave_model->leave();
			$data['status_list'] = $this->leave_model->status();
			$this->load->view("Leave/add_employee_leave",$data);
		} else{
			$data['emp_name'] = $this->input->post('emp_name');
			$data['day'] = $this->input->post('day');
			$data['leave_type'] = $this->input->post('leave_type');
			$data['start_date'] = $this->input->post('start_date');
			$data['end_date'] = $this->input->post('end_date');
			$data['reason'] = $this->input->post('reason');
			$data['status'] = $this->input->post('status');
			$insert = $this->leave_model->insert_emp_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Employee's Leave Added Successfully.");
                redirect('leave/employee_list');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('leave/add_employee_leave');
			}
			
	    }
	}


	public function edit_employee_leave($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("emp_name","emp_name","trim|required|xss_clean");
		$this->form_validation->set_rules("start_date","start_date","trim|required|xss_clean");
		$this->form_validation->set_rules("end_date","end_date","trim|required|xss_clean");
		$this->form_validation->set_rules("reason","reason","trim|required|xss_clean");
		$this->form_validation->set_rules("status","status","trim|required|xss_clean");
		$this->form_validation->set_rules("leave_type","leave_type","trim|required|xss_clean");
		$this->form_validation->set_rules("day","day","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Employee's Leave";
			$data['emp_list'] = $this->leave_model->employee();
			$data['leave_list'] = $this->leave_model->leave();
			$data['status_list'] = $this->leave_model->status();
			$data['content'] = $this->leave_model->get_all_employee_leave_data_by_id($id);
			$this->load->view("Leave/edit_employee_leave",$data);
		} else{
			$data['emp_name'] = $this->input->post('emp_name');
			$data['day'] = $this->input->post('day');
			$data['leave_type'] = $this->input->post('leave_type');
			$data['start_date'] = $this->input->post('start_date');
			$data['end_date'] = $this->input->post('end_date');
			$data['reason'] = $this->input->post('reason');
			$data['status'] = $this->input->post('status');
			$update = $this->leave_model->update_emp_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Successfully.");
                redirect('leave/employee_list');
			}
	    }
	}


	public function delete_employee_leave($did){
		$id = trim($did);
        $change = $this->leave_model->delete_emp_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('leave/employee_list');
        }
	}
}