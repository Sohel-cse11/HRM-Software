<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class personal_expense extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('personal_expense_model');
        if (!$this->session->userdata('admin_logged')) {
            redirect('auth');
        }
	}

//----------------------------------- start salary components type area ---------------------------------
	public function index($id){
        $data['title'] = "Personal Expense";
        $data['content'] = $this->personal_expense_model->get_all_data($id);
        $this->load->view('personal_expense/index',$data);

    }

    public function my_salary($id){
        $data['title'] = "My Salary";
        $data['content'] = $this->personal_expense_model->personal_salary($id);
        $this->load->view('personal_expense/my_salary',$data);

    }
}