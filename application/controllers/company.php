<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Company extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model(array('company_model', 'zone_model'));

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
        $data['title']="Company";
        $data['content'] = $this->company_model->get_all_data();
        $this->load->view('company/index', $data);
    }
    
    
    public function add() {

        $this->load->library('form_validation');
       
        $this->form_validation->set_rules('CompanyName', 'Company Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ShortName', 'Short Name', 'trim|xss_clean');
        $this->form_validation->set_rules('Address', 'Address', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ContactPerson', 'Contact Person', 'trim|xss_clean');
        $this->form_validation->set_rules('ContactNo', 'Contact No', 'trim|xss_clean');
        $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('FromActiveDate', 'From ActiveDate', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ToActiveDate', 'To ActiveDate ID', 'trim|required|xss_clean');
        $this->form_validation->set_rules('Remarks', 'Remarks', 'trim|xss_clean');
        $this->form_validation->set_rules('ParentCompanyID', 'Parent Company', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ZoneID', 'ZoneID', 'trim|required|xss_clean');
        $this->form_validation->set_rules('IsOwner', 'IsOwner', 'trim|required|xss_clean');
      
        if ($this->form_validation->run() == FALSE) {
            $data['title']="Add Company";
            $this->load->view('company/add',$data);
        } else {
            
            $data['CompanyName'] = $this->input->post('CompanyName');
            $data['ShortName'] = $this->input->post('ShortName');
            $data['Address'] = $this->input->post('Address');
            $data['ContactPerson'] = $this->input->post('ContactPerson');
            $data['ContactNo'] = $this->input->post('ContactNo');
            $data['Email'] = $this->input->post('Email');
            $data['FromActiveDate'] = $this->input->post('FromActiveDate');
            $data['ToActiveDate'] = $this->input->post('ToActiveDate');
            $data['Remarks'] = $this->input->post('Remarks');
            $data['ZoneID'] = $this->input->post('ZoneID');
            $data['ParentCompanyID'] = $this->input->post('ParentCompanyID');
            $data['IsOwner'] = $this->input->post('IsOwner');
            
            $insert = $this->company_model->insert_data($data);

            if ($insert) {

                $this->session->set_flashdata("success", "New company " . "'{$data['CompanyName']}'" . " added successfully.");
                redirect('company/index');
            } else {
                $msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('company/add');
            }
        }
    }
    
    
    public function edit($lid) {

        $this->load->library('form_validation');

       $this->form_validation->set_rules('CompanyName', 'Company Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ShortName', 'Short Name', 'trim|xss_clean');
        $this->form_validation->set_rules('Address', 'Address', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ContactPerson', 'Contact Person', 'trim|xss_clean');
        $this->form_validation->set_rules('ContactNo', 'Contact No', 'trim|xss_clean');
        $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('FromActiveDate', 'From ActiveDate', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ToActiveDate', 'To ActiveDate ID', 'trim|required|xss_clean');
        $this->form_validation->set_rules('Remarks', 'Remarks', 'trim|xss_clean');
        $this->form_validation->set_rules('ParentCompanyID', 'Parent Company', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ZoneID', 'ZoneID', 'trim|required|xss_clean');
        $this->form_validation->set_rules('IsOwner', 'IsOwner', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $data['title']="Edit Company";
            $data['content'] = $this->company_model->get_data_by_id($lid);

            $this->load->view('company/edit', $data);
        } else {

            $data['CompanyName'] = $this->input->post('CompanyName');
            $data['ShortName'] = $this->input->post('ShortName');
            $data['Address'] = $this->input->post('Address');
            $data['ContactPerson'] = $this->input->post('ContactPerson');
            $data['ContactNo'] = $this->input->post('ContactNo');
            $data['Email'] = $this->input->post('Email');
            $data['FromActiveDate'] = $this->input->post('FromActiveDate');
            $data['ToActiveDate'] = $this->input->post('ToActiveDate');
            $data['Remarks'] = $this->input->post('Remarks');
            $data['ZoneID'] = $this->input->post('ZoneID');
            $data['ParentCompanyID'] = $this->input->post('ParentCompanyID');
            $data['IsOwner'] = $this->input->post('IsOwner');
            
            // Update data into manfa table

            $update = $this->company_model->update_data($data, $lid);

            if ($update) {

                $this->session->set_flashdata("success", "Company information " . "'{$data['CompanyName']}'" . " updated successfully.");

                redirect('company/index');
            }
        }
    }
    
    //delete function start here........
    
    public function delete($did) {

        $id = trim($did);
        $data['status'] = '13';
        $change = $this->company_model->update_data($data, $id);
        $content = $this->company_model->get_data_by_id($id);
        $name = $content->CompanyName;

        if ($change) {
            $this->session->set_flashdata("success", "Delete  company  '" . $name . "'  successfully.");
            redirect('company/index');
        }
    }

}
