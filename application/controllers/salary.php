<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Salary extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('salary_model');
        if ( $this->session->userdata('admin_logged')) {
            if($this->session->userdata('user_roles')=='1') {
            
        }else{
             redirect('dashboard');
        } 
        }else{
            redirect('auth');
        }
	}

//----------------------------------- start salary components type area ---------------------------------
	public function index(){
        $data['title'] = "Salary Componenets Types";
        $data['content'] = $this->salary_model->get_all_data();
        $this->load->view('salary/index',$data);
    }

    public function add(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("sct_name"," Name","trim|required|xss_clean");
        $this->form_validation->set_rules("code","Code","trim|required|xss_clean");

        if($this->form_validation->run() == FALSE){
            $data['title'] = "Add Salary Componenets Types";
            $this->load->view("salary/add",$data);
        } else{
            $data['sct_name'] = $this->input->post('sct_name');
            $data['code'] = $this->input->post('code');
            $insert = $this->salary_model->insert_data($data);

            if($insert){
                $this->session->set_flashdata("success", "New Salary Componenet Types Added successfully.");
                redirect('salary/index');
            } else{
                $msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('salary/add');
            }
        }
    }

    // update data
    public function edit($id){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("sct_name","Skill Name","trim|required|xss_clean");
        $this->form_validation->set_rules("code","Code","trim|required|xss_clean");

        if($this->form_validation->run() == FALSE){
            $data['title'] = "Edit Salary Componenets Types";
            $data['content'] = $this->salary_model->get_data_by_id($id);
            $this->load->view("salary/edit",$data);
        } else{
            $data['sct_name'] = $this->input->post('sct_name');
            $data['code'] = $this->input->post('code');
            $update = $this->salary_model->update_data($data,$id);

            if($update){
                $this->session->set_flashdata("success", "update successfully.");
                redirect('salary/index');
            } 
        }
    }

    // delete data
    public function delete($did){
        $id = trim($did);
        $change = $this->salary_model->delete_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('salary/index');
        }
    }

//----------------------------------- end salary components type area ---------------------------------

//----------------------------------- start salary components type area ---------------------------------
    public function salary_component(){
        $data['title'] = "Salary Componenets";
        $data['content'] = $this->salary_model->get_salary_component_all_data();
        $this->load->view('salary/salary_component',$data);
    }

    public function add_salary_component(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("name"," Name","trim|required|xss_clean");
         $this->form_validation->set_rules("details"," Details","trim|required|xss_clean");
        $this->form_validation->set_rules("componentType","componentType","trim|required|xss_clean");

        if($this->form_validation->run() == FALSE){
            $data['title'] = "Add Salary Componenets";
            $data['sct_list'] = $this->salary_model->get_all_data();
            $this->load->view("salary/add_salary_component",$data);
        } else{
            $data['name'] = $this->input->post('name');
            $data['details'] = $this->input->post('details');
            $data['componentType'] = $this->input->post('componentType');
            $insert = $this->salary_model->insert_salary_component_data($data);

            if($insert){
                $this->session->set_flashdata("success", "New Salary Componenets Added successfully.");
                redirect('salary/salary_component');
            } else{
                $msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('salary/add_salary_component');
            }
        }
    }

    // update data
    public function edit_salary_component($id){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("name"," Name","trim|required|xss_clean");
        $this->form_validation->set_rules("details","Details","trim|required|xss_clean");
        $this->form_validation->set_rules("componentType","ComponentType","trim|required|xss_clean");

        if($this->form_validation->run() == FALSE){
            $data['title'] = "Edit Salary Componenets";
            $data['sct_list'] = $this->salary_model->get_all_data();
            $data['content'] = $this->salary_model->get_salary_component_data_by_id($id);
            $this->load->view("salary/edit_salary_component",$data);
        } else{
            $data['name'] = $this->input->post('name');
            $data['details'] = $this->input->post('details');
            $data['componentType'] = $this->input->post('componentType');
            $update = $this->salary_model->update_salary_component_data($data,$id);

            if($update){
                $this->session->set_flashdata("success", "update successfully.");
                redirect('salary/salary_component');
            } 
        }
    }

    // delete data
    public function delete_salary_component($did){
        $id = trim($did);
        $change = $this->salary_model->delete_salary_component_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('salary/salary_component');
        }
    }

//----------------------------------- end salary components type area ---------------------------------

//----------------------------------- start employee salary components type area --------------------
    public function employee_salary_component(){
        $data['title'] = " Employee Salary Componenets";
        $data['content'] = $this->salary_model->get_employee_salary_component_all_data();
        $this->load->view('salary/employee_salary_component',$data);
    }

    public function add_employee_salary_component(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("amount"," Amount","trim|required|xss_clean");
        $this->form_validation->set_rules("employee"," Employee Name","trim|required|xss_clean");
        $this->form_validation->set_rules("details"," Details","trim|required|xss_clean");
        $this->form_validation->set_rules("component","component","trim|required|xss_clean");

        if($this->form_validation->run() == FALSE){
            $data['title'] = "Add Salary Componenets";
            $data['emp_list'] = $this->salary_model->get_employee();
            $data['com_list'] = $this->salary_model->get_component();
            $this->load->view("salary/add_employee_salary_component",$data);
        } else{
            $data['amount'] = $this->input->post('amount');
            $data['employee'] = $this->input->post('employee');
            $data['details'] = $this->input->post('details');
            $data['component'] = $this->input->post('component');
            $insert = $this->salary_model->insert_employee_salary_component_data($data);

            if($insert){
                $this->session->set_flashdata("success", "New Employee Salary Componenets Added successfully.");
                redirect('salary/employee_salary_component');
            } else{
                $msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('salary/add_employee_salary_component');
            }
        }
    }

    // update data
    public function edit_employee_salary_component($id){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("amount"," Amount","trim|required|xss_clean");
        $this->form_validation->set_rules("employee"," Employee Name","trim|required|xss_clean");
        $this->form_validation->set_rules("details"," Details","trim|required|xss_clean");
        $this->form_validation->set_rules("component","component","trim|required|xss_clean");

        if($this->form_validation->run() == FALSE){
            $data['title'] = "Edit Employee Salary Componenets";
            $data['emp_list'] = $this->salary_model->get_employee();
            $data['com_list'] = $this->salary_model->get_component();
            $data['content'] = $this->salary_model->get_employee_salary_component_data_by_id($id);
            $this->load->view("salary/edit_employee_salary_component",$data);
        } else{
            $data['amount'] = $this->input->post('amount');
            $data['employee'] = $this->input->post('employee');
            $data['details'] = $this->input->post('details');
            $data['component'] = $this->input->post('component');
            $update = $this->salary_model->update_employee_salary_component_data($data,$id);

            if($update){
                $this->session->set_flashdata("success", "update successfully.");
                redirect('salary/employee_salary_component');
            } 
        }
    }

    // delete data
    public function delete_employee_salary_component($did){
        $id = trim($did);
        $change = $this->salary_model->delete_salary_component_data($id);

        if ($change) {
            $this->session->set_flashdata("success", "Delete successfully.");
            redirect('salary/employee_salary_component');
        }
    }

//----------------------------------- end employee salary components type area ----------

}