<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Job_require extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('job_require_model');
        if ( $this->session->userdata('admin_logged')) {
        	if($this->session->userdata('user_roles')=='1'||$this->session->userdata('user_roles')=='2') {
        	
        }else{
        	 redirect('dashboard');
        } 
        }else{
            redirect('auth');
        }

	}

//----------------------------------- start job details area -----------------------------------------
	// read data
	public function index(){
		$data['title'] = "Jobs Position";
		$data['content'] = $this->job_require_model->get_all_data();
		$this->load->view("job_require/index",$data);
	}

	public function add(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("job_title","Job Name","trim|required|xss_clean");
		$this->form_validation->set_rules("job_description","jobdescription","trim|required|xss_clean");
		$this->form_validation->set_rules("requirement","requirement","trim|required|xss_clean");
		$this->form_validation->set_rules("benefit","benefit","trim|required|xss_clean");
		$this->form_validation->set_rules("department","department","trim|required|xss_clean");
		$this->form_validation->set_rules("experience","experience","trim|required|xss_clean");
		$this->form_validation->set_rules("employee_type","employee type","trim|required|xss_clean");
		$this->form_validation->set_rules("job_function","job_function","trim|required|xss_clean");
		$this->form_validation->set_rules("education_level","education level","trim|required|xss_clean");
		$this->form_validation->set_rules("max_salary","maximum salary","trim|required|xss_clean");
		$this->form_validation->set_rules("min_salary","minimum salary","trim|required|xss_clean");
		$this->form_validation->set_rules("deadline","Job deadline","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Job Position";
			$data['job_code_list'] = $this->job_require_model->get_job_code();
			$data['benefit_list'] = $this->job_require_model->benefit();
			$data['salary_list'] = $this->job_require_model->salary();
			$data['education_list'] = $this->job_require_model->education();
			$data['job_function_list'] = $this->job_require_model->job_function();
			$data['employee_type_list'] = $this->job_require_model->employee_type();
			$data['experience_list'] = $this->job_require_model->experience();
			$data['department_list'] = $this->job_require_model->department();
			$this->load->view("job_require/add",$data);
		} else{
			$data['job_title'] = $this->input->post('job_title');
			$data['job_description'] = $this->input->post('job_description');
			$data['requirement'] = $this->input->post('requirement');
			$data['benefit'] = $this->input->post('benefit');
			$data['department'] = $this->input->post('department');
			$data['experience'] = $this->input->post('experience');
			$data['employee_type'] = $this->input->post('employee_type');
			$data['job_function'] = $this->input->post('job_function');
			$data['education_level'] = $this->input->post('education_level');
			$data['max_salary'] = $this->input->post('max_salary');
			$data['min_salary'] = $this->input->post('min_salary');
			$data['deadline'] = $this->input->post('deadline');
			$insert = $this->job_require_model->insert_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Job Position successfully.");
                redirect('job_require/index');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('job_require/add');
			}
			
	    }
	}

	public function edit($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("job_title","Job Name","trim|required|xss_clean");
		$this->form_validation->set_rules("job_description","jobdescription","trim|required|xss_clean");
		$this->form_validation->set_rules("requirement","requirement","trim|required|xss_clean");
		$this->form_validation->set_rules("benefit","benefit","trim|required|xss_clean");
		$this->form_validation->set_rules("department","department","trim|required|xss_clean");
		$this->form_validation->set_rules("experience","experience","trim|required|xss_clean");
		$this->form_validation->set_rules("employee_type","employee type","trim|required|xss_clean");
		$this->form_validation->set_rules("job_function","job_function","trim|required|xss_clean");
		$this->form_validation->set_rules("education_level","education level","trim|required|xss_clean");
		$this->form_validation->set_rules("max_salary","maximum salary","trim|required|xss_clean");
		$this->form_validation->set_rules("min_salary","minimum salary","trim|required|xss_clean");
		$this->form_validation->set_rules("deadline","Job deadline","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Job Position";
			$data['job_code_list'] = $this->job_require_model->get_job_code();
			$data['benefit_list'] = $this->job_require_model->benefit();
			$data['salary_list'] = $this->job_require_model->salary();
			$data['education_list'] = $this->job_require_model->education();
			$data['job_function_list'] = $this->job_require_model->job_function();
			$data['employee_type_list'] = $this->job_require_model->employee_type();
			$data['experience_list'] = $this->job_require_model->experience();
			$data['department_list'] = $this->job_require_model->department();
			$data['content'] = $this->job_require_model->get_data_by_id($id);
			$this->load->view("job_require/edit",$data);
		} else{
			$data['job_title'] = $this->input->post('job_title');
			$data['job_description'] = $this->input->post('job_description');
			$data['requirement'] = $this->input->post('requirement');
			$data['benefit'] = $this->input->post('benefit');
			$data['department'] = $this->input->post('department');
			$data['experience'] = $this->input->post('experience');
			$data['employee_type'] = $this->input->post('employee_type');
			$data['job_function'] = $this->input->post('job_function');
			$data['education_level'] = $this->input->post('education_level');
			$data['max_salary'] = $this->input->post('max_salary');
			$data['min_salary'] = $this->input->post('min_salary');
			$data['deadline'] = $this->input->post('deadline');
			$update = $this->job_require_model->update_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Job Position successfully.");
                redirect('job_require/index');
		    }
			
	    }
	}

	public function delete($id){
		$did = trim($id);
        $change = $this->job_require_model->delete_data($did);
        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('job_require');
        }
	}

}