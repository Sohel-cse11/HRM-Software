<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Chart extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('chart_model');
         if (!$this->session->userdata('admin_logged')) {
            redirect('auth');
        }
    }
 
    public function index() {
       $data['title'] = "Performance";
        $this->load->view('chart/index',$data);
    }

    public function filter_employee() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("employee","employee","trim|required|xss_clean");

        if($this->form_validation->run() == FALSE){
        $data['title'] = "Select Employee";
        $data['emp'] = $this->chart_model->insert_data();
        $this->load->view('chart/filter_employee',$data);
        } else{
            $data['employee'] = $this->input->post('employee');
            $data2['id']=$data['employee'];
            $insert = $this->chart_model->insert_data($data);

            if($insert){
                $this->session->set_flashdata("success", "Select Employee successfully.");
                redirect('chart/index2/'.$data2['id']);
            } else{
                $msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('chart/filter_employee');
            }
            
        }
    }

    public function index2($id) {
       $data['title'] = "Performance";
       $data['content'] = $this->chart_model->get_chart_data_by_id($id);
        $this->load->view('chart/index2',$data);
    }

 
}