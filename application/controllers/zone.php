<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Zone extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('zone_model');

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
        $data['title']="Zone";
        $data['content'] = $this->zone_model->get_all_data();
        $this->load->view('zone/index', $data);
    }
    
    
    public function add() {

        $this->load->library('form_validation');
       
        $this->form_validation->set_rules('ZoneName', 'ZoneName', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ZoneCode', 'Zone Code', 'trim|xss_clean');
        $this->form_validation->set_rules('ParentZoneID', 'ParentZoneID', 'trim|required|xss_clean');
       
        if ($this->form_validation->run() == FALSE) {
            $data['title']="Add Zone";
            $this->load->view('zone/add',$data);
        } else {
            
            $data['ZoneName'] = $this->input->post('ZoneName');
            $data['ZoneCode'] = $this->input->post('ZoneCode');
            $data['ParentZoneID'] = $this->input->post('ParentZoneID');
          
            
            $insert = $this->zone_model->insert_data($data);

            if ($insert) {

                $this->session->set_flashdata("success", "New Zone " . "'{$data['ZoneName']}'" . " added successfully.");
                redirect('zone/index');
            } else {
                $msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('zone/add');
            }
        }
    }
    
    
    public function edit($lid) {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('ZoneName', 'Zone Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ZoneCode', 'Zone Code', 'trim|xss_clean');
        $this->form_validation->set_rules('ParentZoneID', 'Parent ZoneID', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $data['title']="Edit Zone";
            $data['content'] = $this->zone_model->get_data_by_id($lid);

            $this->load->view('zone/edit', $data);
        } else {

            $data['ZoneName'] = $this->input->post('ZoneName');
            $data['ZoneCode'] = $this->input->post('ZoneCode');
            $data['ParentZoneID'] = $this->input->post('ParentZoneID');
          

            $update = $this->zone_model->update_data($data, $lid);

            if ($update) {

                $this->session->set_flashdata("success", " " . "'{$data['ZoneName']}'" . " zone updated successfully.");

                redirect('zone/index');
            }
          
        }
    }
    
    //delete function start here........
    
    public function delete($did) {

        $id = trim($did);
        $data['status'] = '13';
        $change = $this->zone_model->update_data($data, $id);
        $content = $this->zone_model->get_data_by_id($id);
        $name = $content->ZoneName;

        if ($change) {
            $this->session->set_flashdata("success", "Delete  company  '" . $name . "'  successfully.");
            redirect('zone/index');
        }
    }

}
