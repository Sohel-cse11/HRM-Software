<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Recruitment extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('recruitment_model');
        if ( $this->session->userdata('admin_logged')) {
        	if($this->session->userdata('user_roles')=='1'||$this->session->userdata('user_roles')=='2') {
        	
        }else{
        	 redirect('dashboard');
        } 
        }else{
            redirect('auth');
        }

	}

//----------------------------------- start employee type area -----------------------------------------
	// read data
	public function employee_type(){
		$data['title'] = "Employee Types";
		$data['content'] = $this->recruitment_model->get_all_data();
		$this->load->view("recruitment/employee_type",$data);
	}

	public function add_employee_type(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("employee_type_name","Employee Type Name","trim|required|xss_clean");		

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Employee Type Name";
			$this->load->view("recruitment/add_employee_type",$data);
		} else{
			$data['employee_type_name'] = $this->input->post('employee_type_name');
			$insert = $this->recruitment_model->insert_data_employee_type($data);

			if($insert){
				$this->session->set_flashdata("success", "New Employee Type Name Added successfully.");
                redirect('recruitment/employee_type');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('recruitment/add_employee_type');
			}	
	    }
	}

	public function edit_employee_type($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("employee_type_name","employee_type_name","trim|required|xss_clean");
		
		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Employee Type";
			$data['content'] = $this->recruitment_model->get_employee_type_data_by_id($id);
			$this->load->view("recruitment/edit_employee_type",$data);
		} else{
			$data['employee_type_name'] = $this->input->post('employee_type_name');
			$update = $this->recruitment_model->update_employee_type($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Employee Type Name successfully.");
                redirect('recruitment/employee_type');
			} 
		}
	}

	// delete data
	public function delete_employee_type($id){
		$did = trim($id);
        $change = $this->recruitment_model->delete_employee_type($did);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('recruitment/employee_type');
        }
	}
//----------------------------------- end employee type area -----------------------------------------


//----------------------------------- start employee experience area --------------------------------
	// read data
	public function experience_level(){
		$data['title'] = "Experience Level";
		$data['content'] = $this->recruitment_model->get_all_experience_level_data();
		$this->load->view("recruitment/experience_level",$data);
	}

	public function add_experience_level(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("experience_name","Experience Level","trim|required|xss_clean");		

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Experience Level Name";
			$this->load->view("recruitment/add_experience_level",$data);
		} else{
			$data['experience_name'] = $this->input->post('experience_name');
			$insert = $this->recruitment_model->insert_data_experience_level($data);

			if($insert){
				$this->session->set_flashdata("success", "New Experience Level Added successfully.");
                redirect('recruitment/experience_level');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('recruitment/add_experience_level');
			}	
	    }
	}

	public function edit_experience_level($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("experience_name","experience_name","trim|required|xss_clean");
		
		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Experience Level";
			$data['content'] = $this->recruitment_model->get_experience_level_by_id($id);
			$this->load->view("recruitment/edit_experience_level",$data);
		} else{
			$data['experience_name'] = $this->input->post('experience_name');
			$update = $this->recruitment_model->update_experience_level($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Employee Type Name successfully.");
                redirect('recruitment/experience_level');
			} 
		}
	}

	// delete data
	public function delete_experience_level($id){
		$did = trim($id);
        $change = $this->recruitment_model->delete_experience_level($did);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('recruitment/experience_level');
        }
	}
//----------------------------------- end employee experience area ----------------------------------

//----------------------------------- start job function area --------------------------------
	// read data
	public function job_function(){
		$data['title'] = "Job function";
		$data['content'] = $this->recruitment_model->get_all_job_function_data();
		$this->load->view("recruitment/job_function",$data);
	}

	public function add_job_function(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("job_function_name","Job Function Name","trim|required|xss_clean");		

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Job function Name";
			$this->load->view("recruitment/add_job_function",$data);
		} else{
			$data['job_function_name'] = $this->input->post('job_function_name');
			$insert = $this->recruitment_model->insert_data_job_function($data);

			if($insert){
				$this->session->set_flashdata("success", "New Job Function Added successfully.");
                redirect('recruitment/job_function');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('recruitment/add_job_function');
			}	
	    }
	}

	public function edit_job_function($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("job_function_name","job_function_name","trim|required|xss_clean");
		
		if($this->form_validation->run() == FALSE){
			$data['title'] = "Job Function ";
			$data['content'] = $this->recruitment_model->get_job_function_by_id($id);
			$this->load->view("recruitment/edit_job_function",$data);
		} else{
			$data['job_function_name'] = $this->input->post('job_function_name');
			$update = $this->recruitment_model->update_job_function($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Job Function successfully.");
                redirect('recruitment/job_function');
			} 
		}
	}

	// delete data
	public function delete_job_function($id){
		$did = trim($id);
        $change = $this->recruitment_model->delete_job_function($did);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('recruitment/job_function');
        }
	}
//----------------------------------- end job function area ----------------------------------

//----------------------------------- start education level area --------------------------------
	// read data
	public function education_level(){
		$data['title'] = "Education Level";
		$data['content'] = $this->recruitment_model->get_all_education_level_data();
		$this->load->view("recruitment/education_level",$data);
	}

	public function add_education_level(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("education_level_name","Education Level","trim|required|xss_clean");		

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Education Level";
			$this->load->view("recruitment/add_education_level",$data);
		} else{
			$data['education_level_name'] = $this->input->post('education_level_name');
			$insert = $this->recruitment_model->insert_data_education_level($data);

			if($insert){
				$this->session->set_flashdata("success", "New Education Level Added successfully.");
                redirect('recruitment/education_level');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('recruitment/add_education_level');
			}	
	    }
	}

	public function edit_education_level($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("education_level_name","education_level_name","trim|required|xss_clean");
		
		if($this->form_validation->run() == FALSE){
			$data['title'] = "Education Level";
			$data['content'] = $this->recruitment_model->get_education_level_by_id($id);
			$this->load->view("recruitment/edit_education_level",$data);
		} else{
			$data['education_level_name'] = $this->input->post('education_level_name');
			$update = $this->recruitment_model->update_education_level($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Education Level successfully.");
                redirect('recruitment/education_level');
			} 
		}
	}

	// delete data
	public function delete_education_level($id){
		$did = trim($id);
        $change = $this->recruitment_model->delete_education_level($did);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('recruitment/education_level');
        }
	}
//----------------------------------- end education level area ----------------------------------

//----------------------------------- start Benefits area --------------------------------
	// read data
	public function benefit(){
		$data['title'] = "Benefits";
		$data['content'] = $this->recruitment_model->get_all_benefit_data();
		$this->load->view("recruitment/benefit",$data);
	}

	public function add_benefit(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("benefit_name","Benifits","trim|required|xss_clean");		

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Benefits";
			$this->load->view("recruitment/add_benefit",$data);
		} else{
			$data['benefit_name'] = $this->input->post('benefit_name');
			$insert = $this->recruitment_model->insert_data_benefit($data);

			if($insert){
				$this->session->set_flashdata("success", "New Benefits Added successfully.");
                redirect('recruitment/benefit');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('recruitment/add_benefit');
			}	
	    }
	}

	public function edit_benefit($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("benefit_name","benefit_name","trim|required|xss_clean");
		
		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Benefits";
			$data['content'] = $this->recruitment_model->get_benefit_by_id($id);
			$this->load->view("recruitment/edit_benefit",$data);
		} else{
			$data['benefit_name'] = $this->input->post('benefit_name');
			$update = $this->recruitment_model->update_benefit($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Benefits successfully.");
                redirect('recruitment/benefit');
			} 
		}
	}

	// delete data
	public function delete_benefit($id){
		$did = trim($id);
        $change = $this->recruitment_model->delete_benefit($did);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('recruitment/benefit');
        }
	}
//----------------------------------- end Benefits area ----------------------------------


}