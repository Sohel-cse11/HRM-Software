<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class My_training extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('my_training_model');
        if (!$this->session->userdata('admin_logged')) {
            redirect('auth');
        }
	}

//----------------------------------- start course area -----------------------------------------

	// read data
	public function index($id){
		$data['title'] = "My Training Session";
		$data['content'] = $this->my_training_model->get_all_data($id);
		$this->load->view("my_training/index",$data);
	}

 }
