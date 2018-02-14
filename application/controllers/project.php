<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('project_model');
        if ( $this->session->userdata('admin_logged')) {
        	if($this->session->userdata('user_roles')=='1'|| $this->session->userdata('user_roles')=='2') {
        	
        }else{
        	 redirect('dashboard');
        } 
        }else{
            redirect('auth');
        }
	}

//----------------------------------- start project area -----------------------------------------
	
	// read data
	public function index(){
		$data['title'] = "Projects";
		$data['content'] = $this->project_model->get_all_data();
		$this->load->view("project/index",$data);
	}

	// create data
	public function add(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("project_name","Project Name","trim|required|xss_clean");
		$this->form_validation->set_rules("client","Client Name","trim|required|xss_clean");
		$this->form_validation->set_rules("details","Details Name","trim|required|xss_clean");
		$this->form_validation->set_rules("status","Status Name","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Project";
			$data['client_list'] = $this->project_model->get_client();
			$data['status_list'] = $this->project_model->get_status();
			$this->load->view("project/add",$data);
		} else{
			$data['project_name'] = $this->input->post('project_name');
			$data['client'] = $this->input->post('client');
			$data['details'] = $this->input->post('details');
			$data['status'] = $this->input->post('status');
			$insert = $this->project_model->insert_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Project Added successfully.");
                redirect('project/index');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('project/add');
			}
		}
	}
	
	// update data 
	public function edit ($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("project_name","Project Name","trim|required|xss_clean");
		$this->form_validation->set_rules("client","Client Name","trim|required|xss_clean");
		$this->form_validation->set_rules("details","Details Name","trim|required|xss_clean");
		$this->form_validation->set_rules("status","Status Name","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Project";
			$data['client_list'] = $this->project_model->get_client();
			$data['status_list'] = $this->project_model->get_status();
			$data['content'] = $this->project_model->get_data_by_id($id);
			$this->load->view("project/edit",$data);
		} else{
			$data['project_name'] = $this->input->post('project_name');
			$data['client'] = $this->input->post('client');
			$data['details'] = $this->input->post('details');
			$data['status'] = $this->input->post('status');
			$update = $this->project_model->update_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Project successfully.");
                redirect('project/index');
			} 
		}
	}

    // delete data
	public function delete($did){
		$id = trim($did);
        $data['status'] = '13';
        $change = $this->project_model->update_data($data, $id);
        $content = $this->project_model->get_data_by_id($id);
        $name = $content->project_name;

        if ($change) {
            $this->session->set_flashdata("success", "Delete '" . $name . "'  successfully.");
            redirect('project/index');
        }
	}

//----------------------------------- end projects area ---------------------------------

//----------------------------------- start clients area --------------------------------

	// read data
	public function client_index(){
		$data['title'] = "Clients";
		$data['content'] = $this->project_model->get_all_client_data();
		$this->load->view('project/client_index',$data);
	}

	//create data
	public function add_client(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Client Name","trim|required|xss_clean");
		$this->form_validation->set_rules("address","Address","trim|required|xss_clean");
		$this->form_validation->set_rules("contact_number","Contact No","trim|required|xss_clean");
		$this->form_validation->set_rules("details","Details ","trim|required|xss_clean");
		$this->form_validation->set_rules("first_contact_date","First Contact Date","trim|required|xss_clean");
		$this->form_validation->set_rules("contact_number","Contact No","trim|required|xss_clean");
		$this->form_validation->set_rules("contact_email","Contact Email","trim|required|xss_clean");
		$this->form_validation->set_rules("company_url","Company Url","trim|required|xss_clean");
		$this->form_validation->set_rules("status","Status","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Client";
			$data['status_list'] = $this->project_model->get_status();
			$this->load->view("project/add_client",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['address'] = $this->input->post('address');
			$data['contact_number'] = $this->input->post('contact_number');
			$data['details'] = $this->input->post('details');
			$data['first_contact_date'] = $this->input->post('first_contact_date');
			$data['contact_number'] = $this->input->post('contact_number');
			$data['contact_email'] = $this->input->post('contact_email');
			$data['company_url'] = $this->input->post('company_url');
			$data['status'] = $this->input->post('status');
			$insert = $this->project_model->insert_client_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Client Added successfully.");
                redirect('project/client_index');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('project/add_client');
			}
		}
	}

	//update data
	public function edit_client($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Client Name","trim|required|xss_clean");
		$this->form_validation->set_rules("address","Address","trim|required|xss_clean");
		$this->form_validation->set_rules("contact_number","Contact No","trim|required|xss_clean");
		$this->form_validation->set_rules("details","Details ","trim|required|xss_clean");
		$this->form_validation->set_rules("first_contact_date","First Contact Date","trim|required|xss_clean");
		$this->form_validation->set_rules("contact_number","Contact No","trim|required|xss_clean");
		$this->form_validation->set_rules("contact_email","Contact Email","trim|required|xss_clean");
		$this->form_validation->set_rules("company_url","Company Url","trim|required|xss_clean");
		$this->form_validation->set_rules("status","Status","trim|required|xss_clean");


		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Client";
			$data['status_list'] = $this->project_model->get_status();
			$data['content'] = $this->project_model->get_client_data_by_id($id);
			$this->load->view("project/edit_client",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['address'] = $this->input->post('address');
			$data['contact_number'] = $this->input->post('contact_number');
			$data['details'] = $this->input->post('details');
			$data['first_contact_date'] = $this->input->post('first_contact_date');
			$data['contact_number'] = $this->input->post('contact_number');
			$data['contact_email'] = $this->input->post('contact_email');
			$data['company_url'] = $this->input->post('company_url');
			$data['status'] = $this->input->post('status');
			$update = $this->project_model->update_client_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Project successfully.");
                redirect('project/client_index');
			} 
		}
	}

	//delete data
	public function delete_client($did){
		$id = trim($did);
        $data['status'] = '13';
        $change = $this->project_model->update_client_data($data, $id);
        $content = $this->project_model->get_client_data_by_id($id);
        $name = $content->name;

        if ($change) {
            $this->session->set_flashdata("success", "Delete '" . $name . "'  successfully.");
            redirect('project/client_index');
        }
	}

//----------------------------------- end clients area --------------------------------

//----------------------------------- start employee project area --------------------------------
	//read data
	public function employee_project_index(){
		$data['title'] = "Employee Projects";
		$data['content'] = $this->project_model->get_all_employee_project_data();
		$this->load->view('project/employee_project_index',$data);
	}

	//create data
	public function add_employee_project(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("employee","Client Employee","trim|required|xss_clean");
		$this->form_validation->set_rules("project","Project","trim|required|xss_clean");
		$this->form_validation->set_rules("date_start","Contact No","trim|required|xss_clean");
		$this->form_validation->set_rules("date_end","Details ","trim|required|xss_clean");
		$this->form_validation->set_rules("status","Contact No","trim|required|xss_clean");
		$this->form_validation->set_rules("details","details","trim|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Employee Project";
			$data['employee_list'] = $this->project_model->get_employee();
			$data['project_list'] = $this->project_model->get_project();
			$data['status_list'] = $this->project_model->get_status();
			$this->load->view("project/add_employee_project",$data);
		} else{
			$data['employee'] = $this->input->post('employee');
			$data['project'] = $this->input->post('project');
			$data['date_start'] = $this->input->post('date_start');
			$data['date_end'] = $this->input->post('date_end');
			$data['status'] = $this->input->post('status');
			$data['details'] = $this->input->post('details');
			$insert = $this->project_model->insert_employee_project_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Employee Project Added successfully.");
                redirect('project/employee_project_index');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('project/add_employee_project');
			}
		}
	}

	//update data
	public function edit_employee_project($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("employee","Client Employee","trim|required|xss_clean");
		$this->form_validation->set_rules("project","Project","trim|required|xss_clean");
		$this->form_validation->set_rules("date_start","Contact No","trim|required|xss_clean");
		$this->form_validation->set_rules("date_end","Details ","trim|required|xss_clean");
		$this->form_validation->set_rules("status","Contact No","trim|required|xss_clean");
		$this->form_validation->set_rules("details","details","trim|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Employee Project";
			$data['employee_list'] = $this->project_model->get_employee();
			$data['project_list'] = $this->project_model->get_project();
			$data['status_list'] = $this->project_model->get_status();
			$data['content'] = $this->project_model->get_employee_project_data_by_id($id);
			$this->load->view("project/edit_employee_project",$data);
		} else{
			$data['employee'] = $this->input->post('employee');
			$data['project'] = $this->input->post('project');
			$data['date_start'] = $this->input->post('date_start');
			$data['date_end'] = $this->input->post('date_end');
			$data['status'] = $this->input->post('status');
			$data['details'] = $this->input->post('details');
			$update = $this->project_model->update_employee_project_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Employee Project successfully.");
                redirect('project/employee_project_index');
			} 
		}
	}

	//delete data
	public function delete_employee_project($did){
		$id = trim($did);
        $data['status'] = '13';
        $change = $this->project_model->update_employee_project_data($data, $id);
        $content = $this->project_model->get_employee_project_data_by_id($id);
        $name = $content->first_name;

        if ($change) {
            $this->session->set_flashdata("success", "Delete '" . $name . "'  successfully.");
            redirect('project/employee_project_index');
        }
	}
//----------------------------------- end employee project area --------------------------------

}
