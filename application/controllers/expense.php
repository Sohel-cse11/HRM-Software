<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Expense extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('expense_model');
        if ( $this->session->userdata('admin_logged')) {
        	if($this->session->userdata('user_roles')=='1'||$this->session->userdata('user_roles')=='2') {
        	
        }else{
        	 redirect('dashboard');
        } 
        }else{
            redirect('auth');
        }
	}

//----------------------------------- start category area -----------------------------------------
	
	// read data
	public function category(){
		$data['title'] = "Expense Category";
		$data['content'] = $this->expense_model->get_all_category_data();
		$this->load->view("expense/category",$data);
	}

	// create data
	public function add_category(){
		$this->load->library("form_validation");
        $this->form_validation->set_rules("category_name","category name","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Category";
			$this->load->view("expense/add_category",$data);
		} else{
			$data['category_name'] = $this->input->post('category_name');
			$insert = $this->expense_model->insert_category_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Category Added successfully.");
                redirect('expense/category');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('expense/add_category');
			}
		}
	}

	// update data
	public function edit_category($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("category_name","category name","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Category";
			$data['content'] = $this->expense_model->get_category_data_by_id($id);
			$this->load->view("expense/edit_category",$data);
		} else{
			$data['category_name'] = $this->input->post('category_name');
			$update = $this->expense_model->update_category_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "update successfully.");
                redirect('expense/category');
			} 
		}
	}

	// delete data
	public function delete_category($did){
		$id = trim($did);
        $change = $this->expense_model->delete_category_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('expense/category');
        }
	}

//----------------------------------- end category area -----------------------------------------

//----------------------------------- start payment method area -----------------------------------------
	
	// read data
	public function method(){
		$data['title'] = "Payment Method";
		$data['content'] = $this->expense_model->get_all_method_data();
		$this->load->view("expense/method",$data);
	}

	// create data
	public function add_method(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("method_name","payment method","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Method";
			$this->load->view("expense/add_method",$data);
		} else{
			$data['method_name'] = $this->input->post('method_name');
			$insert = $this->expense_model->insert_method_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Payment Method Added successfully.");
                redirect('expense/method');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('expense/add_method');
			}
		}
	}

	// update data
	public function edit_method($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("method_name","payment method","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Method";
			$data['content'] = $this->expense_model->get_method_data_by_id($id);
			$this->load->view("expense/edit_method",$data);
		} else{
			$data['method_name'] = $this->input->post('method_name');
			$update = $this->expense_model->update_method_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "update successfully.");
                redirect('expense/method');
			} 
		}
	}

	// delete data
	public function delete_method($did){
		$id = trim($did);
        $change = $this->expense_model->delete_method_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('expense/method');
        }
	}

//----------------------------------- end payment method area -----------------------------------------


//----------------------------------- start employee expense area ------------------------------------
	
	// read data
	public function employee_expense(){
		$data['title'] = "Payment Employee Expense";
		$data['content'] = $this->expense_model->get_all_employee_expense_data();
		$this->load->view("expense/employee_expense",$data);
	}

	// create data
	public function add_employee_expense(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("employee","employee name","trim|required|xss_clean");
        $this->form_validation->set_rules("expense_date","expense date","trim|required|xss_clean");
        $this->form_validation->set_rules("payment_method","payment method","trim|required|xss_clean");
        $this->form_validation->set_rules("transaction_no","transaction no","trim|required|xss_clean");
        $this->form_validation->set_rules("payee","payee","trim|required|xss_clean");
        $this->form_validation->set_rules("category","category","trim|required|xss_clean");
        $this->form_validation->set_rules("notes","notes","trim|required|xss_clean");
        $this->form_validation->set_rules("amount","amount","trim|required|xss_clean");
        $this->form_validation->set_rules("currency","currency","trim|required|xss_clean");
        $this->form_validation->set_rules("status","status","trim|required|xss_clean");
		    
		if($this->form_validation->run() == FALSE){
			$data['title'] = "Add Employee Expense";
			$data['employees'] = $this->expense_model->get_employee();
			$data['currency'] = $this->expense_model->get_currency();
			$data['category'] = $this->expense_model->get_category();
			$data['method'] = $this->expense_model->get_method();
			$this->load->view("expense/add_employee_expense",$data);
		} else{
			$data['employee'] = $this->input->post('employee');
			$data['expense_date'] = $this->input->post('expense_date');
			$data['payment_method'] = $this->input->post('payment_method');
			$data['transaction_no'] = $this->input->post('transaction_no');
			$data['payee'] = $this->input->post('payee');
			$data['category'] = $this->input->post('category');
			$data['notes'] = $this->input->post('notes');
			$data['amount'] = $this->input->post('amount');
			$data['currency'] = $this->input->post('currency');
			$data['status'] = $this->input->post('status');
			$insert = $this->expense_model->insert_employee_expense_data($data);

			if($insert){
				$this->session->set_flashdata("success", "New Employee Expense Added successfully.");
                redirect('expense/employee_expense');
			} else{
				$msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('expense/add_employee_expense');
			}
		}
	}

	// update data
	public function edit_employee_expense($id){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("employee","employee name","trim|required|xss_clean");
        $this->form_validation->set_rules("expense_date","expense date","trim|required|xss_clean");
        $this->form_validation->set_rules("payment_method","payment method","trim|required|xss_clean");
        $this->form_validation->set_rules("transaction_no","transaction no","trim|required|xss_clean");
        $this->form_validation->set_rules("payee","payee","trim|required|xss_clean");
        $this->form_validation->set_rules("category","category","trim|required|xss_clean");
        $this->form_validation->set_rules("notes","notes","trim|required|xss_clean");
        $this->form_validation->set_rules("amount","amount","trim|required|xss_clean");
        $this->form_validation->set_rules("currency","currency","trim|required|xss_clean");
        $this->form_validation->set_rules("status","status","trim|required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Edit Employee Expense";
			$data['employees'] = $this->expense_model->get_employee();
			$data['currency'] = $this->expense_model->get_currency();
			$data['category'] = $this->expense_model->get_category();
			$data['method'] = $this->expense_model->get_method();
			$data['content'] = $this->expense_model->get_employee_expense_data_by_id($id);
			$this->load->view("expense/edit_employee_expense",$data);
		} else{
			$data['employee'] = $this->input->post('employee');
			$data['expense_date'] = $this->input->post('expense_date');
			$data['payment_method'] = $this->input->post('payment_method');
			$data['transaction_no'] = $this->input->post('transaction_no');
			$data['payee'] = $this->input->post('payee');
			$data['category'] = $this->input->post('category');
			$data['notes'] = $this->input->post('notes');
			$data['amount'] = $this->input->post('amount');
			$data['currency'] = $this->input->post('currency');
			$data['status'] = $this->input->post('status');
			$update = $this->expense_model->update_employee_expense_data($data,$id);

			if($update){
				$this->session->set_flashdata("success", "update successfully.");
                redirect('expense/employee_expense');
			} 
		}
	}

	// delete data
	public function delete_employee_expense($did){
		$id = trim($did);
        $change = $this->expense_model->delete_employee_expense_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('expense/employee_expense');
        }
	}

//----------------------------------- end employee expense area --------------------------------

}