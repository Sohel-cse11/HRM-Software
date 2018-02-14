<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
       
        $this->load->model('Login_model');
        $this->load->model('employee_model');
        if (!$this->session->userdata('admin_logged')) {
            redirect('auth');
        }
    }

	public function index()
	{
        $data['title'] = "Dashboard";
        $data['employee'] = $this->employee_model->total_employee();
		$this->load->view('dashboard/index',$data);
	}
        
}