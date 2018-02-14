<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Travel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('travel_model');
        if ( $this->session->userdata('admin_logged')) {
        	if($this->session->userdata('user_roles')=='1'||$this->session->userdata('user_roles')=='2') {
        	
        }else{
        	 redirect('dashboard');
        } 
        }else{
            redirect('auth');
        }
	}

	//read data
	public function index(){
		$data['title'] = "Travel";
		$data['content'] = $this->travel_model->get_all_data();
		$this->load->view('travel/index',$data);
	}

	// create data
	public function add(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("employee","Employee Name","trim|required|xss_clean");
		$this->form_validation->set_rules("purpose","Purpose","trim|required|xss_clean");
		$this->form_validation->set_rules("travel_from","Travel from","trim|required|xss_clean");
		$this->form_validation->set_rules("travel_to","travel to","trim|required|xss_clean");
		$this->form_validation->set_rules("travel_date","travel date","trim|required|xss_clean");
		$this->form_validation->set_rules("return_date","return date","trim|required|xss_clean");
		$this->form_validation->set_rules("details","details","trim|xss_clean");
		$this->form_validation->set_rules("funding","funding","trim|required|xss_clean");
		$this->form_validation->set_rules("status","status","trim|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Travel";
			$data['employee_list'] = $this->travel_model->get_employee();
			$this->load->view("travel/add",$data);
		} else{
			$data['employee'] = $this->input->post('employee');
			$data['purpose'] = $this->input->post('purpose');
			$data['travel_from'] = $this->input->post('travel_from');
			$data['travel_to'] = $this->input->post('travel_to');
			$data['travel_date'] = $this->input->post('travel_date');
			$data['return_date'] = $this->input->post('return_date');
			$data['details'] = $this->input->post('details');
			$data['funding'] = $this->input->post('funding');
			$data['status'] = $this->input->post('status');
			$insert = $this->travel_model->insert_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Travel Added successfully.");
                redirect('travel/index');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('travel/add');
			}
		}
	}

	// update data
	public function edit($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("employee","Employee Name","trim|required|xss_clean");
		$this->form_validation->set_rules("purpose","Purpose","trim|required|xss_clean");
		$this->form_validation->set_rules("travel_from","Travel from","trim|required|xss_clean");
		$this->form_validation->set_rules("travel_to","travel to","trim|required|xss_clean");
		$this->form_validation->set_rules("travel_date","travel date","trim|required|xss_clean");
		$this->form_validation->set_rules("return_date","return date","trim|required|xss_clean");
		$this->form_validation->set_rules("details","details","trim|xss_clean");
		$this->form_validation->set_rules("funding","funding","trim|required|xss_clean");
		$this->form_validation->set_rules("status","status","trim|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Travel";
			$data['employee_list'] = $this->travel_model->get_employee();
			$data['content'] = $this->travel_model->get_data_by_id($id);
			$this->load->view("travel/edit",$data);
		} else{
			$data['employee'] = $this->input->post('employee');
			$data['purpose'] = $this->input->post('purpose');
			$data['travel_from'] = $this->input->post('travel_from');
			$data['travel_to'] = $this->input->post('travel_to');
			$data['travel_date'] = $this->input->post('travel_date');
			$data['return_date'] = $this->input->post('return_date');
			$data['details'] = $this->input->post('details');
			$data['funding'] = $this->input->post('funding');
			$data['status'] = $this->input->post('status');
			$update = $this->travel_model->update_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "Travel Updated successfully.");
                redirect('travel');
			} 
		}
	}

	// delete data
	public function delete($id){
		$did = trim($id);
        $change = $this->travel_model->delete_data($id);
       // $content = $this->job_model->get_data_by_id($did);
        //$name = $content->name;

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('travel');
        }
	}

	
}
