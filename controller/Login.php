<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();


        $this->load->model('admin/admin_model');
    }

    public function index()
    {
        if($this->input->post('Submit'))
        {
            $this->form_validation->set_rules('Email','Email','trim|required');
            $this->form_validation->set_rules('Password','Password','trim|required');

            if($this->form_validation == TRUE)
            {
                $email = $this->input->post('Email');
                $password = $this->input->post('Password');

                $this->admin_model->verifyuser($email,$password);

                if($this->session->userdata('logged_in') === TRUE){
                    redirect('admin/dashboard','refresh');
                }
                else
                {
                    $arrData["error_message"] = 'Invalid Username or Password';
                    $this->load->view('admin/login', $arrData);
                }
            }
            else
            {
                $arrdata["error_message"] = 'username and password incorrect';
                $this->load->view('admin/login',$arrdata);
            }
        }
        else
        {
            $arrdata["error_message"] = '';
            $this->load->view('admin/login',$arrdata);
        }

    }


}
