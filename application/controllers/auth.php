<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();  
      $this->load->model('login_model');
  }

  public function index()
  {
    if ($this->session->userdata('admin_logged')) {
      redirect('dashboard');
      } else{
      $data['title'] = "Login";
      $this->load->view('auth/login',$data);
    }
  }
  public function validate()
   {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'Email', 'required|xss_clean|trim');
            $this->form_validation->set_rules('password', 'Password', 'required|xss_clean|trim|md5');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('auth/login');
            }
            else
            {
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $auth_check = $this->login_model->index($email, $password);

                if ($auth_check == FALSE)
                {
                    $this->session->set_flashdata('error', 'Authentication Failed');
                    redirect('login');
                }
                else
                {
                    $session_data = array(
                        'id' => $auth_check->id,
                        'username' => $auth_check->username,
                        'user_level' => $auth_check->user_level,
                        'user_roles' => $auth_check->user_roles,
                        'email' => $auth_check->email,
                        'profileimage' => $auth_check->profileimage,
                        'admin_logged' => TRUE
                    );
                    $this->session->set_userdata($session_data);
                    redirect('dashboard');
                }
            }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
?>