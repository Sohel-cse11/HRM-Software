<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Training extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('training_model');
        if ( $this->session->userdata('admin_logged')) {
        	if($this->session->userdata('user_roles')=='1'||$this->session->userdata('user_roles')=='2') {
        	
        }else{
        	 redirect('dashboard');
        } 
        }else{
            redirect('auth');
        }
	}

//----------------------------------- start course area -----------------------------------------

	// read data
	public function course(){
		$data['title'] = "Courses";
		$data['content'] = $this->training_model->get_all_course_data();
		$this->load->view("training/course",$data);
	}

	// create data
	public function add_course(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Project Name","trim|required|xss_clean");
		$this->form_validation->set_rules("coordinator","Coordinator Name","trim|required|xss_clean");
		$this->form_validation->set_rules("trainer","Trainer Name","trim|required|xss_clean");
		$this->form_validation->set_rules("trainer_details","Trainer Details","trim|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Course";
			$data['coordinator_list'] = $this->training_model->get_coordinator();
			$this->load->view("training/add_course",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['coordinator'] = $this->input->post('coordinator');
			$data['trainer'] = $this->input->post('trainer');
			$data['trainer_details'] = $this->input->post('trainer_details');
			$insert = $this->training_model->insert_course_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Course Added successfully.");
                redirect('training/course');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('training/add_course');
			}
		}
	}

	// update data
	public function edit_course($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Project Name","trim|required|xss_clean");
		$this->form_validation->set_rules("coordinator","Coordinator Name","trim|required|xss_clean");
		$this->form_validation->set_rules("trainer","Trainer Name","trim|required|xss_clean");
		$this->form_validation->set_rules("trainer_details","Trainer Details","trim|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Course";
			$data['coordinator_list'] = $this->training_model->get_coordinator();
			$data['content'] = $this->training_model->get_course_data_by_id($id);
			$this->load->view("training/edit_course",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['coordinator'] = $this->input->post('coordinator');
			$data['trainer'] = $this->input->post('trainer');
			$data['trainer_details'] = $this->input->post('trainer_details');
			$update = $this->training_model->update_course_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Project successfully.");
                redirect('training/course');
			} 
		}
	}

	// delete data
	public function delete_course($id){
		$did = trim($id);
        $change = $this->training_model->delete_course_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('training/course');
        }
	}
//----------------------------------- end course area -----------------------------------------

//----------------------------------- start training session area ---------------------------------

	// read data
	public function training_session(){
		$data['title'] = "Training Session";
		$data['content'] = $this->training_model->get_all_training_session_data();
		$this->load->view("training/training_session",$data);
	}

	// create data
	public function add_training_session(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("session_name","Session Name","trim|required|xss_clean");
		$this->form_validation->set_rules("course_id","Course Name","trim|required|xss_clean");
		$this->form_validation->set_rules("details","Details","trim|required|xss_clean");
		$this->form_validation->set_rules("scheduled_time","Trainer Details","trim|xss_clean");
		$this->form_validation->set_rules("assignment_due_date","Course Name","trim|required|xss_clean");
		$this->form_validation->set_rules("attendance_id","Det","trim|required|xss_clean");
		$this->form_validation->set_rules("delivery_id","Trainer Details","trim|xss_clean");
		$this->form_validation->set_rules("employee","Employee","trim|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Training Session";
			$data['course_list'] = $this->training_model->get_course();
			$data['attendance_list'] = $this->training_model->get_attendance();
			$data['delivery_list'] = $this->training_model->get_delivery();
			$data['employee_list'] = $this->training_model->get_employee();
			$this->load->view("training/add_training_session",$data);
		} else{
			$data['session_name'] = $this->input->post('session_name');
			$data['course_id'] = $this->input->post('course_id');
			$data['details'] = $this->input->post('details');
			$data['scheduled_time'] = $this->input->post('scheduled_time');
			$data['assignment_due_date'] = $this->input->post('assignment_due_date');
			$data['attendance_id'] = $this->input->post('attendance_id');
			$data['delivery_id'] = $this->input->post('delivery_id');
			$data['employee'] = $this->input->post('employee');
			$insert = $this->training_model->insert_training_session_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Training Session Added successfully.");
                redirect('training/training_session');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('training/add_training_session');
			}
		}
	}

	// update data
	public function edit_training_session($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("session_name","Session Name","trim|required|xss_clean");
		$this->form_validation->set_rules("course_id","Course Name","trim|required|xss_clean");
		$this->form_validation->set_rules("details","Details","trim|required|xss_clean");
		$this->form_validation->set_rules("scheduled_time","Trainer Details","trim|xss_clean");
		$this->form_validation->set_rules("assignment_due_date","Course Name","trim|required|xss_clean");
		$this->form_validation->set_rules("attendance_id","Det","trim|required|xss_clean");
		$this->form_validation->set_rules("delivery_id","Trainer Details","trim|xss_clean");
		$this->form_validation->set_rules("employee","Trainer Details","trim|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Training Session";
			$data['course_list'] = $this->training_model->get_course();
			$data['attendance_list'] = $this->training_model->get_attendance();
			$data['delivery_list'] = $this->training_model->get_delivery();
			$data['content'] = $this->training_model->get_training_session_data_by_id($id);
			$data['employee_list'] = $this->training_model->get_employee();
			$this->load->view("training/edit_training_session",$data);
		} else{
			$data['session_name'] = $this->input->post('session_name');
			$data['course_id'] = $this->input->post('course_id');
			$data['details'] = $this->input->post('details');
			$data['scheduled_time'] = $this->input->post('scheduled_time');
			$data['assignment_due_date'] = $this->input->post('assignment_due_date');
			$data['attendance_id'] = $this->input->post('attendance_id');
			$data['delivery_id'] = $this->input->post('delivery_id');
			$data['employee'] = $this->input->post('employee');
			$update = $this->training_model->update_training_session_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Project successfully.");
                redirect('training/training_session');
			} 
		}
	}

	// delete data
	public function delete_training_session($id){
		$did = trim($id);
        $change = $this->training_model->delete_training_session_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('training/training_session');
        }
	}

//----------------------------------- end training session area ---------------------------------

//----------------------------------- start employee training session area ----------------------

	// read data
	public function employee_training_session(){
		$data['title'] = "Employee Training Session";
		$data['content'] = $this->training_model->get_all_employee_training_session_data();
		$this->load->view("training/employee_training_session",$data);
	}

	// create data
	public function add_employee_training_session(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("employee_id","Employee Name","trim|required|xss_clean");
		$this->form_validation->set_rules("course_id","Course Name","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Employee Training Session";
			$data['course_list'] = $this->training_model->get_course();
			$data['employee_list'] = $this->training_model->get_employee();
			$this->load->view("training/add_employee_training_session",$data);
		} else{
			$data['employee_id'] = $this->input->post('employee_id');
			$data['course_id'] = $this->input->post('course_id');
			$insert = $this->training_model->insert_employee_training_session_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Employee Training Session Added successfully.");
                redirect('training/employee_training_session');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('training/add_employee_training_session');
			}
		}
	}

	// update data
	public function edit_employee_training_session($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("employee_id","Employee Name","trim|required|xss_clean");
		$this->form_validation->set_rules("course_id","Course Name","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Employee Training Session";
			$data['course_list'] = $this->training_model->get_course();
			$data['employee_list'] = $this->training_model->get_employee();
			$data['content'] = $this->training_model->get_employee_training_session_data_by_id($id);
			$this->load->view("training/edit_employee_training_session",$data);
		} else{
			$data['employee_id'] = $this->input->post('employee_id');
			$data['course_id'] = $this->input->post('course_id');
			$update = $this->training_model->update_employee_training_session_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Employee Training Session successfully.");
                redirect('training/employee_training_session');
			} 
		}
	}

	// delete data
	public function delete_employee_training_session($id){
		$did = trim($id);
        $change = $this->training_model->delete_employee_training_session_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('training/employee_training_session');
        }
	}

//----------------------------------- end employee training session area -----------------------

}