<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Admin_login extends CI_Controller {

     public function __construct() {
        parent::__construct();

        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id != NULL) {
            redirect('super_admin', 'refresh');
        }
    }

    public function index() {
        $data = array();
        $data['title'] = 'Log In Form';
        $this->load->view('admin/admin_login');
    }

    public function check_login() {
       
            $email_address=$this->input->post('admin_email_address',true);
        $password=$this->input->post('admin_password',true);
        
        //echo '----'.$email_address.'-----'.$password;
        //exit();
        
        
        $this->load->model('admin_login_model','al_model',true);
        $result=$this->al_model->select_admin($email_address,$password);
       // echo '<pre>';
       // print_r($result);
        if($result)
        {
            $data=array();
            $data['admin_id']=$result->admin_id;
            $data['admin_name']=$result->admin_name;
            $this->session->set_userdata($data);
            redirect("super_admin");
        }
        else{
            $sdata=array();
            $sdata['exception']="User Email / Password Invalide ! ";
            $this->session->set_userdata($sdata);
            redirect("admin_login");
        }
      
         
    }
       public function login() {
        $data = array();
        $data['title'] = 'Header Details';
    
         $this->load->view('admin/admin_login', $data);}
         
public function change(){
    
     $data = array();
        $data['title'] = 'Header Details';
    
         $this->load->view('admin/change', $data);}



public function change_password() {
     $email_address = $this->input->post('admin_email_address', true);
        $old_password = $this->input->post('old_admin_password', true);
        $new_password = $this->input->post('new_admin_password', true);
 
        $this->load->model('admin_login_model', 'al_model', true);
        $result = $this->al_model->select_admin($email_address, $old_password);
 
        if ($result) {
            $data = array();
             
        $data['admin_password'] =($this->input->post('new_admin_password', true));
 
        $this->al_model->update_admin_info($data, $email_address);
            $this->session->set_userdata($data);
            redirect("admin_login");
        } else {
            $sdata = array();
            $sdata['exception'] = "Enter valid Email and Password!";
            $this->session->set_userdata($sdata);
            redirect("admin_login/change");
        }
    }
}


?>