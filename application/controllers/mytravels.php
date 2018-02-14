<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Mytravels extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('travel_model');
        if (!$this->session->userdata('admin_logged')) {
            redirect('auth');
        }
	}

	public function mytravel($id){
		$data['title'] = "My Travel";
		$data['content'] = $this->travel_model->mytravel($id);
		$this->load->view('travel/travel',$data);
	}
	
}
