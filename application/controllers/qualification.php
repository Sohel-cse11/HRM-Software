<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Qualification extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('qualification_model');
       if ( $this->session->userdata('admin_logged')) {
        	if($this->session->userdata('user_roles')=='1'||$this->session->userdata('user_roles')=='2') {
        	
        }else{
        	 redirect('dashboard');
        } 
        }else{
            redirect('auth');
        }
	}

//----------------------------------- start skills area -----------------------------------------
	
	// read data
	public function skill_index(){
		$data['title'] = "Skills";
		$data['content'] = $this->qualification_model->get_all_skills_data();
		$this->load->view("qualification/skill_index",$data);
	}

	// create data
	public function add_skill(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Skill Name","trim|required|xss_clean");
		$this->form_validation->set_rules("description","Description","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Skill";
			$this->load->view("qualification/add_skill",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['description'] = $this->input->post('description');
			$insert = $this->qualification_model->insert_skill_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Skill Added successfully.");
                redirect('qualification/skill_index');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('qualification/add_skill');
			}
		}
	}

	// update data
	public function edit_skill($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Skill Name","trim|required|xss_clean");
		$this->form_validation->set_rules("description","Description","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Skill";
			$data['content'] = $this->qualification_model->get_skill_data_by_id($id);
			$this->load->view("qualification/edit_skill",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['description'] = $this->input->post('description');
			$update = $this->qualification_model->update_skill_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "update successfully.");
                redirect('qualification/skill_index');
			} 
		}
	}

	// delete data
	public function delete_skill($did){
		$id = trim($did);
        $change = $this->qualification_model->delete_skill_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('qualification/skill_index');
        }
	}

//----------------------------------- end skills area -----------------------------------------

//----------------------------------- start education area -----------------------------------------
	
	// read data
	public function education(){
		$data['title'] = "Educations";
		$data['content'] = $this->qualification_model->get_all_education_data();
		$this->load->view("qualification/education",$data);
	}

	// create data
	public function add_education(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Skill Name","trim|required|xss_clean");
		$this->form_validation->set_rules("description","Description","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Education";
			$this->load->view("qualification/add_education",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['description'] = $this->input->post('description');
			$insert = $this->qualification_model->insert_education_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Education Added successfully.");
                redirect('qualification/education');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('qualification/add_education');
			}
		}
	}

	// update data
	public function edit_education($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Skill Name","trim|required|xss_clean");
		$this->form_validation->set_rules("description","Description","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Education";
			$data['content'] = $this->qualification_model->get_education_data_by_id($id);
			$this->load->view("qualification/edit_education",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['description'] = $this->input->post('description');
			$update = $this->qualification_model->update_education_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "update successfully.");
                redirect('qualification/education');
			} 
		}
	}

	// delete data
	public function delete_education($did){
		$id = trim($did);
        $change = $this->qualification_model->delete_education_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('qualification/education');
        }
	}

//----------------------------------- end education area -----------------------------------------

//----------------------------------- start certification area -----------------------------------------
	// read data
	public function certification(){
		$data['title'] = "Certifications";
		$data['content'] = $this->qualification_model->get_all_certification_data();
		$this->load->view("qualification/certification",$data);
	}

	// create data
	public function add_certification(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Skill Name","trim|required|xss_clean");
		$this->form_validation->set_rules("description","Description","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Certification";
			$this->load->view("qualification/add_certification",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['description'] = $this->input->post('description');
			$insert = $this->qualification_model->insert_certification_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Certification Added successfully.");
                redirect('qualification/certification');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('qualification/add_certification');
			}
		}
	}

	// update data
	public function edit_certification($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Skill Name","trim|required|xss_clean");
		$this->form_validation->set_rules("description","Description","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Certification";
			$data['content'] = $this->qualification_model->get_certification_data_by_id($id);
			$this->load->view("qualification/edit_certification",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['description'] = $this->input->post('description');
			$update = $this->qualification_model->update_certification_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "update successfully.");
                redirect('qualification/certification');
			} 
		}
	}

	// delete data
	public function delete_certification($did){
		$id = trim($did);
        $change = $this->qualification_model->delete_certification_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('qualification/certification');
        }
	}

//----------------------------------- end certification area -----------------------------------------

//----------------------------------- start language area -----------------------------------------
	// read data
	public function language(){
		$data['title'] = "Languages";
		$data['content'] = $this->qualification_model->get_all_language_data();
		$this->load->view("qualification/language",$data);
	}

	// create data
	public function add_language(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Skill Name","trim|required|xss_clean");
		$this->form_validation->set_rules("description","Description","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Language";
			$this->load->view("qualification/add_language",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['description'] = $this->input->post('description');
			$insert = $this->qualification_model->insert_language_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Language Added successfully.");
                redirect('qualification/language');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('qualification/add_language');
			}
		}
	}

	// update data
	public function edit_language($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Skill Name","trim|required|xss_clean");
		$this->form_validation->set_rules("description","Description","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Language";
			$data['content'] = $this->qualification_model->get_language_data_by_id($id);
			$this->load->view("qualification/edit_language",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['description'] = $this->input->post('description');
			$update = $this->qualification_model->update_language_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "update successfully.");
                redirect('qualification/language');
			} 
		}
	}

	// delete data
	public function delete_language($did){
		$id = trim($did);
        $change = $this->qualification_model->delete_language_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('qualification/language');
        }
	}

//----------------------------------- end language area -----------------------------------------
}