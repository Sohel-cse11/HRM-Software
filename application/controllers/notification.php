<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Notification extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('notification_model');
        if ( $this->session->userdata('admin_logged')) {
            if($this->session->userdata('user_roles')=='1') {
            
        }else{
             redirect('dashboard');
        } 
        }else{
            redirect('auth');
        }
	}

	public function index(){
        $data['title'] = "Notifications";
        $data['content'] = $this->notification_model->get_all_data();
        $this->load->view('notification/index',$data);
    }

    public function add(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("employee","employee","trim|required|xss_clean");
        $this->form_validation->set_rules("message_title","message_title","trim|required|xss_clean");
        $this->form_validation->set_rules("message","message","trim|required|xss_clean");

        if($this->form_validation->run() == FALSE){
            $data['title'] = "Add Notice";
            $data['emp'] = $this->notification_model->get_employee();
            $this->load->view("notification/add",$data);
        } else{
            $data['employee'] = $this->input->post('employee');
            $data['message_title'] = $this->input->post('message_title');
            $data['message'] = $this->input->post('message');
            $insert = $this->notification_model->insert_data($data);

            if($insert){
                $this->session->set_flashdata("success", "New Notification successfully.");
                redirect('notification/index');
            } else{
                $msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('notification/add');
            }
            
        }
    }

    public function edit ($id){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("employee","employee","trim|required|xss_clean");
        $this->form_validation->set_rules("message_title","message_title","trim|required|xss_clean");
        $this->form_validation->set_rules("message","message","trim|required|xss_clean");

        if($this->form_validation->run() == FALSE){
            $data['title'] = "Edit Notice";
           $data['emp'] = $this->notification_model->get_employee();
            $data['content'] = $this->notification_model->get_data_by_id($id);
            $this->load->view("notification/edit",$data);
        } else{
            $data['employee'] = $this->input->post('employee');
            $data['message_title'] = $this->input->post('message_title');
            $data['message'] = $this->input->post('message');
            $update = $this->notification_model->update_data($data,$id);

            if($update){
                $this->session->set_flashdata("success", "Updated Notice successfully.");
                redirect('notification/index');
            } 
        }
    }

    // delete data
    public function delete($did){
        $id = trim($did);
        $change = $this->notification_model->delete_data($id);

        if ($change) {
            $this->session->set_flashdata("Delete successfully.");
            redirect('notification/index');
        }
    }
}