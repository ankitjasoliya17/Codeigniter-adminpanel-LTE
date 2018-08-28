<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();

        if($this->session->userdata('logged_in') == FALSE) {
            redirect('admin');

        }
        $this->load->model('admin/admin_model');
    }

    public function index()
    {
        $arrData['middle']  = 'admin/dashboard';
        $this->load->view('admin/template',$arrData);
    }
}
?>
