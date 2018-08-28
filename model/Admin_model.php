<?php
defined('BASEPATH') OR exit('No direct script access allowed');

   Class Admin_model extends CI_Model {

       function verifyuser($email,$pass)
       {
           $this->db->select('*');
           $this->db->where('admin_email',$email);
           $this->db->where('admin_password',$pass);
           $this->db->limit('1');
           $query = $this->db->get('admin_login');
           //echo $this->db->last_query(); die;
           if($query->num_rows() > 0 )
           {
               $row = $query->row_array();
               //echo"<pre>"; print_r($row); die;
               $ses_user = array(
                   "authority_id" => $row['admin_id'],
                   "authority_email" => $row['admin_email'],
                   "authority_avatar" => $row['admin_avatar'],
                   "authority_firstname" => $row['admin_firstname'],
                   "authority_lastname" => $row['admin_lastname'],
                   "logged_in" =>TRUE
               );
               $this->session->set_userdata($ses_user);
           }
           else
           {
               $ses_user = array(
                   "logged_in" => FALSE
               );
               $this->session->set_userdata($ses_user);
               //$this->session->set_flashdata('error','Sorry,Your Email And Password Incorrect!');
           }
       }

       function get_admin_details($iadminid,$table){

           $arrdata = array();

           $objQuery = $this->db->get_where($table,array('admin_id'=>$iadminid))->result_array();

           return $objQuery;
       }

       function update_admin($iadminid,$arrdata)
       {
           $this->db->where('admin_id',$iadminid);
           if($this->db->update('admin_login',$arrdata))
           {
               return true;
           }
           else
           {
               return false;
           }
       }

   }
 ?>
