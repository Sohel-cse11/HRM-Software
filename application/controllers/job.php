<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Job extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('job_model');
        if ( $this->session->userdata('admin_logged')) {
        	if($this->session->userdata('user_roles')=='1') {
        	
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
		$data['title'] = "Jobs Title";
		$data['content'] = $this->job_model->get_all_data();
		$this->load->view("job/index",$data);
	}

	// create data
	public function add(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("code","Job code","trim|required|xss_clean");
		$this->form_validation->set_rules("jt_name","Job Name","trim|required|xss_clean");
		$this->form_validation->set_rules("description","Description","trim|required|xss_clean");
		$this->form_validation->set_rules("specification","Specification","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Job Details";
			$this->load->view("job/edit",$data);
		} else{
			$data['code'] = $this->input->post('code');
			$data['jt_name'] = $this->input->post('jt_name');
			$data['description'] = $this->input->post('description');
			$data['specification'] = $this->input->post('specification');
			$insert = $this->job_model->insert_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Job Added successfully.");
                redirect('job/index');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('job/add');
			}
			
	    }
	}

		// update data
	public function edit($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("code","Job code","trim|required|xss_clean");
		$this->form_validation->set_rules("jt_name","Job Name","trim|required|xss_clean");
		$this->form_validation->set_rules("description","Description","trim|required|xss_clean");
		$this->form_validation->set_rules("specification","Specification","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Job Details";
			$data['content'] = $this->job_model->get_data_by_id($id);
			$this->load->view("job/edit",$data);
		} else{
			$data['code'] = $this->input->post('code');
			$data['jt_name'] = $this->input->post('jt_name');
			$data['description'] = $this->input->post('description');
			$data['specification'] = $this->input->post('specification');
			$update = $this->job_model->update_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Job Details successfully.");
                redirect('job/index');
		    }
		}
	}

	// delete data
	public function delete($id){
		$did = trim($id);
        $change = $this->job_model->delete_data($id);
        $content = $this->job_model->get_data_by_id($did);
        $name = $content->name;

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('job');
        }
	}
//----------------------------------- end job details area -----------------------------------------

//----------------------------------- start pay grade area -----------------------------------------

	// read data
	public function pay_grade_index(){
		$data['title'] = "Pay Grade";
		$data['content'] = $this->job_model->get_all_pay_grade_data();
		$this->load->view("job/pay_grade_index",$data);
	}

	//create data
	public function add_pay_grade(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Name","trim|required|xss_clean");
		$this->form_validation->set_rules("currency","Currency","trim|required|xss_clean");
		$this->form_validation->set_rules("min_salary","min salary","trim|required|xss_clean");
		$this->form_validation->set_rules("max_salary","max salary ","trim|required|xss_clean");
		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Pay Grade";
			$data['currency_list'] = $this->job_model->get_currency();
			$this->load->view("job/add_pay_grade",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['currency'] = $this->input->post('currency');
			$data['min_salary'] = $this->input->post('min_salary');
			$data['max_salary'] = $this->input->post('max_salary');
			$insert = $this->job_model->insert_pay_grade_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Pay Grade Added successfully.");
                redirect('job/pay_grade_index');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('job/add_pay_grade');
			}
		}
	}

	//update data
	public function edit_pay_grade($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Name","trim|required|xss_clean");
		$this->form_validation->set_rules("currency","Currency","trim|required|xss_clean");
		$this->form_validation->set_rules("min_salary","min salary","trim|required|xss_clean");
		$this->form_validation->set_rules("max_salary","max salary ","trim|required|xss_clean");
		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Pay Grade";
			$data['currency_list'] = $this->job_model->get_currency();
			$data['content'] = $this->job_model->get_pay_grade_by_id($id);
			$this->load->view("job/edit_pay_grade",$data);
		} else{
			$data['name'] = $this->input->post('name');
			$data['currency'] = $this->input->post('currency');
			$data['min_salary'] = $this->input->post('min_salary');
			$data['max_salary'] = $this->input->post('max_salary');
			$update = $this->job_model->update_pay_grade_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Updated Pay Grade successfully.");
                redirect('job/pay_grade_index');
		    }
		}
	}
	

	// delete data
	public function delete_pay_grade($id){
		$did = trim($id);
        $change = $this->job_model->delete_pay_grade_data($id);
        $content = $this->job_model->get_pay_grade_by_id($did);
        $name = $content->name;

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('job/pay_grade_index');
        }
	}
//----------------------------------- end pay grad area -----------------------------------------	
}