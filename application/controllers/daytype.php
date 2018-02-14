<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Daytype extends CI_Controller 
{

    public function __construct() {
        parent::__construct();

        $this->load->model('daytype_model');

        if (!$this->session->userdata('admin_logged')) {
            redirect('auth');
        }
    }

    public function index() {

        $data['content'] = $this->daytype_model->get_all_data();
        $this->load->view('daytype/index', $data);
    }
    
    
    public function add() {

        $this->load->library('form_validation');
       
        $this->form_validation->set_rules('Description', 'Description', 'trim|required|xss_clean');
        $this->form_validation->set_rules('Remarks', 'Remarks', 'trim|xss_clean');
        $this->form_validation->set_rules('IsHolyDay', 'IsHolyDay', 'trim|required|xss_clean');
        
       
        if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('daytype/add');
        } else {
            
            $data['Description'] = $this->input->post('Description');
            $data['Remarks'] = $this->input->post('Remarks');
            $data['IsHolyDay'] = $this->input->post('IsHolyDay');
          
            
            $insert = $this->daytype_model->insert_data($data);

            if ($insert) {

                $this->session->set_flashdata("success", "New Zone " . "'{$data['Description']}'" . " added successfully.");
                redirect('daytype/index');
            } else {
                $msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('daytype/add');
            }
        }
    }
    
    
    public function edit($lid) {

        $this->load->library('form_validation');

       
        $this->form_validation->set_rules('Description', 'Description', 'trim|required|xss_clean');
        $this->form_validation->set_rules('Remarks', 'Remarks', 'trim|xss_clean');
        $this->form_validation->set_rules('IsHolyDay', 'IsHolyDay', 'trim|required|xss_clean');
       

        if ($this->form_validation->run() == FALSE) {

            $data['content'] = $this->daytype_model->get_data_by_id($lid);

            $this->load->view('daytype/edit', $data);
        } else {

            $data['Description'] = $this->input->post('Description');
            $data['Remarks'] = $this->input->post('Remarks');
            $data['IsHolyDay'] = $this->input->post('IsHolyDay');

            $update = $this->daytype_model->update_data($data, $lid);

              if ($update) {
                
                $this->session->set_flashdata("success", " Update " . "'{$data['Description']}'" . " successfully.");

                redirect('daytype/index');
            }
        }
    }
    
    //delete function start here........
    
    public function delete($did) {

        $id = trim($did);
        $data['status'] = '13';
        $change = $this->daytype_model->update_data($data, $id);
        $content = $this->daytype_model->get_data_by_id($id);
        $name = $content->Description;

        if ($change) {
            $this->session->set_flashdata("success", "Delete  company  '" . $name . "'  successfully.");
            redirect('daytype/index');
        }
    }

}
