<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Audit_log extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('audit_log_model');
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
        $data['title'] = "Audit Log";
        $data['content'] = $this->audit_log_model->get_all_data();
        $this->load->view('audit_log/index',$data);
    }
    
    public function add(){
        $data['user'] = $this->input->post( $this->session->userdata('id'));
        $data['employee'] = $this->input->post($this->session->userdata('id'));
            
        $insert = $this->audit_log_model->insert_data($data);
    }
}