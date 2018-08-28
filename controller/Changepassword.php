<?php 
/**
* Blog
*
* @package		Profile
* @subpackage   controller
* @author		Ankit Jasoliya
* @copyright	Copyright (c) 2012 - 2013 
* @since		Version 1.0
*/
 

class Changepassword extends CI_Controller {

	/**
	* __construct
	*
	* Calls parent constructor
	* @author	Ankit Jasoliya
	* @access	public
	* @return	void
	*/
	function __construct()
	{
		parent::__construct();
		// $arrdata['middle'] = 'admin/changepassword';
		// $this->load->view('admin/template',$arrdata);
		
		if($this->session->userdata('logged_in') == FALSE) {
			redirect('admin/login');
		}
		$this->load->model('admin/admin_model');
	}

	

	

	function match_old($a){
	    
	    $login_data = $this->session->userdata();
	    
	    //echo '<pre>';
	    //print_r($login_data);
		$this->load->model('admin/admin_model');
	    //$data = $this->admin_model->get_admin_details($login_data['id'],'admin_login');
	    $data = $this->admin_model->get_admin_details($login_data['admin_id'],'admin_login');
	    // $data = $this->admin_model->get_admin_details(1,'admin_login');
	    if($data[0]['admin_password'] == $a){
	        return true;
        }else{
	        return false;
        }
        //echo "old password is ".$data['admin_password'];
        //echo "<br>";
        //echo "user pwd is ".$a;
	    //die;

    }

    public function index()
    {

        $data['middle']	= 'admin/changepassword';
        $login_data = $this->session->userdata('logged_in');
        $this->form_validation->set_rules('old_password','old_password','trim|required|callback_match_old');
        $this->form_validation->set_rules('new_password','new_password','required|differs[old_password]');
        $this->form_validation->set_rules('new_password_confirm','new_password_confirm','required|matches[new_password]');


        $this->form_validation->set_message('match_old','Old Password is Wrong');

        	//print_r($_POST);
        if(!$this->form_validation->run())
        {
            $arrdata['error'] = validation_errors();
            $arrdata['middle'] = 'admin/changepassword';
			$this->load->view('admin/template',$arrdata);
        }else{
            $arrdata['admin_password']	 = $_POST['new_password'];

            $updateFlag	= $this->admin_model->update_admin($login_data,$arrdata);
            session_destroy();
            redirect('admin/dashboard');
        }


    }
	
}
