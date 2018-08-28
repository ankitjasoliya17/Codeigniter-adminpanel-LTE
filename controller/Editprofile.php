<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editprofile extends CI_Controller {

    function __construct() {
        parent::__construct();

        if($this->session->userdata('logged_in') == FALSE) {
            redirect('admin');

        }
        $this->load->model('admin/admin_model');

    }

    public function index(){
        $arrdata['editProfile'] = $this->admin_model->get_admin_details($this->session->userdata('admin_id'),'admin_login');
        //echo "<pre>"; print_r($arrdata); die;

        if($this->input->post('adminsubmit'))
        {
            $this->form_validation->set_rules('admin_firstname','admin_firstname','trim|required');
            $this->form_validation->set_rules('admin_lastname','admin_lastname','trim|required');
            $this->form_validation->set_rules('admin_email','admin_email','trim|required');
            $this->form_validation->set_rules('admin_mobile','admin_mobile','trim|required');

            if($this->form_validation->run() == TRUE){

                // Portfolio Upload Image START
                if ($_FILES['admin_image']['name'] != '')
                {
                    //$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/'.$this->config->item('PROJECT_ROOT_FOLDER').'assets/upload/portfolio/';
                    $config['upload_path'] = './assets/upload/admin/';
                    //echo "<pre>"; print_r($config); die;
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size']    = '10240';
                    //echo "<pre>"; print_r($config); die;
                    //echo"<pre>"; print_r($config);

                    //$info = getimagesize($source_url);
                    //load upload class library
                    $this->load->library('upload',$config);
                    //$this->upload->initialize($config2);

                    if (!$this->upload->do_upload('admin_image'))
                    {
                        // case - failure
                        $upload_error = array('error' => $this->upload->display_errors());
                        echo "<pre>"; print_r($upload_error);
                    }
                    else
                    {
                        // case - success
                        //$arrAddData["photo"]  = $this->upload->data();
                        $updatedata["admin_avatar"] = $this->upload->file_name;

                        // Deleting previous image.
                        $prev_file = $this->input->post('adminImage');

                        // Unlink the image from project and thumb folder
                        if( $prev_file !='' && file_exists($config['upload_path'].$prev_file)){

                            unlink($config['upload_path'].$prev_file);
                            unlink($config['upload_path']."thumb/".$prev_file);
                        }
                        $data = $this->upload->data();
                        //echo "<pre>"; print_r($data); die;
                        $upload_data = $this->upload->data();

                        $config = array(
                            'source_image'      => $data['full_path'], //get original image
                            'new_image'         => $data['file_path'].'thumb', //save as new image //need to create thumbs first
                            'maintain_ratio'    => true,
                            'width'             => 150
                        );

                        //print_r($config); die;

                        $this->load->library('image_lib',$config); //load library
                        //$this->image_lib->initialize('image_lib',$config2);
                        $this->image_lib->resize(); //do whatever specified in config

                    }

                }

                // Portfolio Upload Image END

                $updatedata["admin_firstname"] = $this->input->post('admin_firstname');
                $updatedata["admin_lastname"] = $this->input->post('admin_lastname');
                $updatedata["admin_email"] = $this->input->post('admin_email');
                $updatedata["admin_phone"] = $this->input->post('admin_mobile');

                $updateflag = $this->admin_model->update_admin($this->session->userdata('admin_id'),$updatedata);
                //echo "<pre>"; print_r($updateflag); die;

                if($updateflag)
                {
                    $this->session->set_flashdata('success','admin data updated successfully');
                    redirect('admin/dashboard');
                }
                else
                {
                    $this->session->set_flashdata('error','Failed To Update Value');
                    redirect('admin/editprofile');
                }
            }
        }
        $arrdata['middle'] = 'admin/editprofile';
        $this->load->view('admin/template',$arrdata);

    }

}
?>
