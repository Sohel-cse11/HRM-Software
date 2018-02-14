<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Offtime extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model(array('Offtime_model', 'Daytype_model'));

        if (!$this->session->userdata('admin_logged')) {
            redirect('auth');
        }
    }

    public function index() {

        $data['content'] = $this->Offtime_model->get_all_data();
        $this->load->view('offtime/index', $data);
    }
    public function add() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('DayTypeId', 'Day Type ', 'trim|required|xss_clean|is_unique[officetiming.DayTypeId]');
        $this->form_validation->set_rules('InTime', 'InTime ', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ConsiderableInTime', 'Considerable In-Time', 'trim|required|xss_clean');
        $this->form_validation->set_rules('OutTime', 'Out Time', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ConsiderableOutTime', 'Considerable Out-Time', 'trim|required|xss_clean');
        $this->form_validation->set_rules('Remarks', 'Remarks', 'trim|xss_clean');
        $this->form_validation->set_message('is_unique', 'This Day Type is already exists.');
        if ($this->form_validation->run() == FALSE) {
            
            $data['daytype_list'] = $this->Daytype_model->get_all_daytype_list();
            $this->load->view('offtime/add', $data);
        } else {

            $data['DayTypeId'] = $this->input->post('DayTypeId');
            $data['InTime'] = $this->input->post('InTime');
            $data['ConsiderableInTime'] = $this->input->post('ConsiderableInTime');
            $data['OutTime'] = $this->input->post('OutTime');
            $data['ConsiderableOutTime'] = $this->input->post('ConsiderableOutTime');
            $data['Remarks'] = $this->input->post('Remarks');
 
            $insert = $this->Offtime_model->insert_data($data);

            if ($insert) {

                $daytype_details = $this->Daytype_model->get_data_by_id($data['DayTypeId']);
                
                $this->session->set_flashdata("success", "New timing" . "'{$daytype_details->Description}'" .  " added successfully.");
                redirect('offtime/index');
            } else {
                $msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('offtime/add');
            }
        }
    }   

    public function edit($id) {

        $this->load->library('form_validation');

        //$this->form_validation->set_rules('DayTypeId', 'Day Type ', "trim|required|xss_clean|callback__check_day_type[$id]");
        $this->form_validation->set_rules('InTime', 'InTime ', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ConsiderableInTime', 'Considerable In-Time', 'trim|required|xss_clean');
        $this->form_validation->set_rules('OutTime', 'Out Time', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ConsiderableOutTime', 'Considerable Out-Time', 'trim|required|xss_clean');
        $this->form_validation->set_rules('Remarks', 'Remarks', 'trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $ds['content'] = $this->Offtime_model->get_data_by_id($id);
            $ds['selected_daytype'] = $this->Daytype_model->get_data_by_id($ds['content']->DayTypeId);
            $this->load->view('offtime/edit', $ds);
         } else {
            
            //$data['DayTypeId'] = $this->input->post('DayTypeId');
            $data['InTime'] = $this->input->post('InTime');
            $data['ConsiderableInTime'] = $this->input->post('ConsiderableInTime');
            $data['OutTime'] = $this->input->post('OutTime');
            $data['ConsiderableOutTime'] = $this->input->post('ConsiderableOutTime');
            $data['Remarks'] = $this->input->post('Remarks');

            $update = $this->Offtime_model->update_data($data, $id);

            if ($update) {
                
                $daytype_details = $this->Daytype_model->get_data_by_id($data['DayTypeId']);
                
                $this->session->set_flashdata("success", "Office time " . "'{$daytype_details->Description}'" . " updated successfully.");
                redirect('offtime/index');
            }
        }
    }
    
    public function delete($did) {

        $id = trim($did);
        $data['status'] = '13';
        $change = $this->Offtime_model->update_data($data, $id);
        $content = $this->Offtime_model->get_data_by_id($id);
        $name = $content->DepartmentName;

        if ($change) {
            $this->session->set_flashdata("success", "Delete Department  '" . $name . "'  successfully.");
            redirect('offtime/index');
        }
    }
        public function _check_day_type($day_type_id, $id) {
        return $this->Offtime_model->check_day_type_existance($day_type_id, $id);
    }
}
