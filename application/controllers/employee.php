<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('employee_model');
         if ( $this->session->userdata('admin_logged')) {
            if($this->session->userdata('user_roles')=='1'||$this->session->userdata('user_roles')=='2') {
            
        }else{
             redirect('dashboard');
        } 
        }else{
            redirect('auth');
        }
	}

	public function employees(){
        $data['title'] = "Employee";
        $data['content'] = $this->employee_model->get_all_data();
        $this->load->view('employee/employee',$data);
    }

    // create data
    public function add(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("first_name","first name","trim|required|xss_clean");
       /* $this->form_validation->set_rules("middle_name","middle name","trim|required|xss_clean");
        $this->form_validation->set_rules("last_name","last name","trim|required|xss_clean");
        $this->form_validation->set_rules("birthday","birthday","trim|required|xss_clean");
        $this->form_validation->set_rules("blood","blood name","trim|required|xss_clean");
        $this->form_validation->set_rules("gender","gender name","trim|required|xss_clean");
        $this->form_validation->set_rules("marital_status","marital status","trim|required|xss_clean");
        $this->form_validation->set_rules("NID","NID","trim|required|xss_clean");
        $this->form_validation->set_rules("passport_id","passport no","trim|required|xss_clean");
        $this->form_validation->set_rules("city","city","trim|required|xss_clean");
        $this->form_validation->set_rules("postal_code","postal code","trim|required|xss_clean");
        $this->form_validation->set_rules("mobile_phone","mobile phone","trim|required|xss_clean");
        $this->form_validation->set_rules("work_phone","work_phone","trim|required|xss_clean");
        $this->form_validation->set_rules("emergencycontactperson","emergencycontactperson","trim|required|xss_clean");
        $this->form_validation->set_rules("emergencycontactno","emergencycontactno","trim|required|xss_clean");
        $this->form_validation->set_rules("private_email","private email","trim|required|xss_clean");
        $this->form_validation->set_rules("work_email","work email","trim|required|xss_clean");
        $this->form_validation->set_rules("present_address","present address","trim|required|xss_clean");
        $this->form_validation->set_rules("permanent_address","permanent address","trim|required|xss_clean");
        $this->form_validation->set_rules("joined_date","joined date","trim|required|xss_clean");
        $this->form_validation->set_rules("confirmation_date","confirmation date","trim|required|xss_clean");
        $this->form_validation->set_rules("department","department","trim|required|xss_clean");
        $this->form_validation->set_rules("pay_grade","pay grade","trim|required|xss_clean");
        $this->form_validation->set_rules("job_title","job title","trim|required|xss_clean");
        $this->form_validation->set_rules("supervisor","supervisor","trim|required|xss_clean");
        $this->form_validation->set_rules("employee_status","employee status","trim|required|xss_clean");
        $this->form_validation->set_rules("employee_level","employee_level","trim|required|xss_clean");*/
        //$this->form_validation->set_rules("profileimage","profileimage","trim|xss_clean");

        if($this->form_validation->run() == FALSE){
            $data['title'] = "Add Employee";
            $data['department'] = $this->employee_model->get_department();
            $data['paygrade'] = $this->employee_model->get_paygrade();
            $data['jobtitle'] = $this->employee_model->get_jobtitle();
            $data['userrole'] = $this->employee_model->get_userrole();
            $data['status_list'] = $this->employee_model->get_status();
            $data['supervisor'] = $this->employee_model->get_supervisor();
            $this->load->view("employee/add",$data);
        } else{
           $data['employee_level'] = $this->input->post('employee_level');
            $data['first_name'] = $this->input->post('first_name');
            $data['middle_name'] = $this->input->post('middle_name');
            $data['last_name'] = $this->input->post('last_name');
            $data['birthday'] = $this->input->post('birthday');
            $data['blood'] = $this->input->post('blood');
            $data['gender'] = $this->input->post('gender');
            $data['marital_status'] = $this->input->post('marital_status');
            $data['NID'] = $this->input->post('NID');
            $data['passport_id'] = $this->input->post('passport_id');
            $data['city'] = $this->input->post('city');
            $data['postal_code'] = $this->input->post('postal_code');
            $data['mobile_phone'] = $this->input->post('mobile_phone');
            $data['work_phone'] = $this->input->post('work_phone');
            $data['emergencycontactperson'] = $this->input->post('emergencycontactperson');
            $data['emergencycontactno'] = $this->input->post('emergencycontactno');
            $data['private_email'] = $this->input->post('private_email');
            $data['work_email'] = $this->input->post('work_email');
            $data['present_address'] = $this->input->post('present_address');
            $data['permanent_address'] = $this->input->post('permanent_address');
            $data['joined_date'] = $this->input->post('joined_date');
            $data['confirmation_date'] = $this->input->post('confirmation_date');
            $data['department'] = $this->input->post('department');
            $data['pay_grade'] = $this->input->post('pay_grade');
            $data['job_title'] = $this->input->post('job_title');
            $data['supervisor'] = $this->input->post('supervisor');
            $data['employee_status'] = $this->input->post('employee_status');
           // $data['profileimage'] = $this->input->post('profileimage');
            
             $file_name = $this->_upload();
            $data['profileimage'] = ($file_name != NULL) ? $file_name : '';


            $insert = $this->employee_model->insert_data($data);

            if($insert){
                $this->session->set_flashdata("success", "New Employee Added successfully.");
                redirect('employee/employees');
            } else{
                $msg = "An error occured. Please try again later.";
                $this->session->set_flashdata('error', $msg);
                redirect('employee/add');
            }
            
        }
    }

    // update data
    public function edit($id){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("first_name","first name","trim|required|xss_clean");
        $this->form_validation->set_rules("middle_name","middle name","trim|xss_clean");
        $this->form_validation->set_rules("last_name","last name","trim|required|xss_clean");
        $this->form_validation->set_rules("birthday","birthday","trim|required|xss_clean");
        $this->form_validation->set_rules("blood","blood name","trim|required|xss_clean");
        $this->form_validation->set_rules("gender","gender name","trim|required|xss_clean");
        $this->form_validation->set_rules("marital_status","marital status","trim|required|xss_clean");
        $this->form_validation->set_rules("NID","NID","trim|required|xss_clean");
        $this->form_validation->set_rules("passport_id","passport no","trim|required|xss_clean");
        $this->form_validation->set_rules("city","city","trim|required|xss_clean");
        $this->form_validation->set_rules("postal_code","postal code","trim|required|xss_clean");
        $this->form_validation->set_rules("mobile_phone","mobile phone","trim|required|xss_clean");
        $this->form_validation->set_rules("work_phone","work_phone","trim|required|xss_clean");
        $this->form_validation->set_rules("emergencycontactperson","emergencycontactperson","trim|required|xss_clean");
        $this->form_validation->set_rules("emergencycontactno","emergencycontactno","trim|required|xss_clean");
        $this->form_validation->set_rules("private_email","private email","trim|required|xss_clean");
        $this->form_validation->set_rules("work_email","work email","trim|required|xss_clean");
        $this->form_validation->set_rules("present_address","present address","trim|required|xss_clean");
        $this->form_validation->set_rules("permanent_address","permanent address","trim|required|xss_clean");
        $this->form_validation->set_rules("joined_date","joined date","trim|required|xss_clean");
        $this->form_validation->set_rules("confirmation_date","confirmation date","trim|required|xss_clean");
        $this->form_validation->set_rules("department","department","trim|required|xss_clean");
        $this->form_validation->set_rules("pay_grade","pay grade","trim|required|xss_clean");
        $this->form_validation->set_rules("job_title","job title","trim|required|xss_clean");
        $this->form_validation->set_rules("supervisor","supervisor","trim|required|xss_clean");
        $this->form_validation->set_rules("employee_status","employee status","trim|required|xss_clean");
        $this->form_validation->set_rules("employee_level","employee_level","trim|required|xss_clean");
        $this->form_validation->set_rules("profileimage","profileimage","trim|required|xss_clean");

        if($this->form_validation->run() == FALSE){
            $data['title'] = "Edit Employee";
            $data['content'] = $this->employee_model->get_data_by_id($id);
            $data['department'] = $this->employee_model->get_department();
            $data['paygrade'] = $this->employee_model->get_paygrade();
            $data['jobtitle'] = $this->employee_model->get_jobtitle();
            $data['userrole'] = $this->employee_model->get_userrole();
            $data['status_list'] = $this->employee_model->get_status();
            $data['supervisor'] = $this->employee_model->get_supervisor();
            $this->load->view("employee/edit",$data);
        } else{
            $data['employee_level'] = $this->input->post('employee_level');
            $data['first_name'] = $this->input->post('first_name');
            $data['middle_name'] = $this->input->post('middle_name');
            $data['last_name'] = $this->input->post('last_name');
            $data['birthday'] = $this->input->post('birthday');
            $data['blood'] = $this->input->post('blood');
            $data['gender'] = $this->input->post('gender');
            $data['marital_status'] = $this->input->post('marital_status');
            $data['NID'] = $this->input->post('NID');
            $data['passport_id'] = $this->input->post('passport_id');
            $data['city'] = $this->input->post('city');
            $data['postal_code'] = $this->input->post('postal_code');
            $data['mobile_phone'] = $this->input->post('mobile_phone');
            $data['work_phone'] = $this->input->post('work_phone');
            $data['emergencycontactperson'] = $this->input->post('emergencycontactperson');
            $data['emergencycontactno'] = $this->input->post('emergencycontactno');
            $data['private_email'] = $this->input->post('private_email');
            $data['work_email'] = $this->input->post('work_email');
            $data['present_address'] = $this->input->post('present_address');
            $data['permanent_address'] = $this->input->post('permanent_address');
            $data['joined_date'] = $this->input->post('joined_date');
            $data['confirmation_date'] = $this->input->post('confirmation_date');
            $data['department'] = $this->input->post('department');
            $data['pay_grade'] = $this->input->post('pay_grade');
            $data['job_title'] = $this->input->post('job_title');
            $data['supervisor'] = $this->input->post('supervisor');
            $data['employee_status'] = $this->input->post('employee_status');
            $data['profileimage'] = $this->input->post('profileimage');

            $update = $this->employee_model->update_data($data,$id);

            if($update){
                $this->session->set_flashdata("success", "Updated Employee successfully.");
                redirect('employee/employees');
            } 
        }
    }

    // delete data
    public function delete($did){
        $id = trim($did);
        $data['employee_status'] = '13';
        $change = $this->employee_model->update_data($data, $id);
        //$content = $this->employee_model->get_data_by_id($id);
        $name = $content->first_name;

        if ($change) {
            $this->session->set_flashdata("success", "Delete '" . $name . "'  successfully.");
            redirect('employee/employees');
        }
    }

    public function _upload() {
        
       $this->load->library('image_lib');
        $config['upload_path'] = './uploads/profile_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '10485760';
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = TRUE;
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;

        $this->load->library('upload', $config);

        $this->upload->do_upload('profileimage');
        $data_upload_files = $this->upload->data();

        //echo $this->upload->display_errors('<p>', '</p>');

        if (!empty($data_upload_files['file_name'])) {

            $file_name = $data_upload_files['file_name'];
            $image_width = $data_upload_files['image_width'];
            $image_height = $data_upload_files['image_height'];

            $config = array();

            $config['source_image'] = $data_upload_files['full_path'];
            $config['new_image'] = './uploads/profile_image/thumbs/' . $file_name;
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = TRUE;
            $config['encrypt_name'] = TRUE;
            $config['remove_spaces'] = TRUE;
            $config['quality'] = "100%";
            if ($image_width > 130 || $image_height > 300) {
                $config['width'] = 130;
                $config['height'] = 300;
            }
            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            if ($this->image_lib->resize()) {
                return $file_name;
            } else {
                echo $this->image_lib->display_errors();
                return NULL;
            }
            $this->image_lib->clear();
        }
    }

}