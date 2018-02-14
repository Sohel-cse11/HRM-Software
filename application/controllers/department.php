<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Department extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('department_model');

      if ( $this->session->userdata('admin_logged')) {
            if($this->session->userdata('user_roles')=='1') {
            
        }else{
             redirect('dashboard');
        } 
        }else{
            redirect('auth');
        }
    }

    public function index() {
        $data['title']="Department";
        $data['content'] = $this->department_model->get_all_data();
        $this->load->view('department/index', $data);
    }

    public function add() {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('DepartmentName', 'Department Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('Remarks', 'Remarks', 'trim|xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            $data['title']="Add Zone";
            $this->load->view('department/add',$data);
        } else {

            $data['DepartmentName'] = $this->input->post('DepartmentName');
            $data['Remarks'] = $this->input->post('Remarks');
            // Insert data into doseage table
//dosageformid
//formname
//remarks
            $insert = $this->department_model->insert_data($data);

            if ($insert) {

                $this->session->set_flashdata("success", "New department" . "'{$data['DepartmentName']}'" . " added successfully.");
                redirect('department/index');
            } else {
                $msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('department/add');
            }
        }
    }

    public function edit($lid) {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('DepartmentName', 'Department Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('Remarks', 'Remarks', 'trim|xss_clean');
        

        if ($this->form_validation->run() == FALSE) {
            $data['title']="Edit Department";
            $data['content'] = $this->department_model->get_data_by_id($lid);
 
            $this->load->view('department/edit', $data);
        } else {

            $data['DepartmentName'] = $this->input->post('DepartmentName');
            $data['Remarks'] = $this->input->post('Remarks');

            $update = $this->department_model->update_data($data, $lid);

            if ($update) {

                $this->session->set_flashdata("success", " " . "'{$data['DepartmentName']}'" . " department updated successfully.");

                redirect('department/index');
            }
        }
    }
//delete function start here........
    
    public function delete($did) {

        $id = trim($did);
        $data['status'] = '13';
        $change = $this->department_model->update_data($data, $id);
        $content = $this->department_model->get_data_by_id($id);
        $name = $content->DepartmentName;

        if ($change) {
            $this->session->set_flashdata("success", "Delete Department  '" . $name . "'  successfully.");
            redirect('department/index');
        }
    }

 
}
