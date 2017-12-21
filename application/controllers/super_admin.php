<?php
session_start();
class Super_admin extends CI_Controller {
    
    
     public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model', 'sa_model', true);
        $this->load->model('welcome_model', 'w_model', true);
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            echo $admin_id;
            exit();
            redirect('admin_login', 'refresh');
        }
       
    }

    private static $maincontent = null;

    public function index() {
        $data = array();
        $data['test'] = "test text";
        $this->load->view('admin/admin_master',$data);
        
    }
    public function header() {
        $data = array();
        $data['title'] = 'Header Details';
        $data['all_header'] = $this->sa_model->select_all_header();
        $data['all_header'] = $this->w_model->select_all_header();
        $data['maincontent'] = $this->load->view('admin/header', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_header() {
        $data = array();
        $data['header_id'] = $this->input->post('header_id', true);
        $data['logo'] = $this->input->post('logo', true);
        $data['title'] = $this->input->post('title', true);
       
        $this->sa_model->save_header_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/header');
    }

    public function delete_header($header_id) {
        $this->sa_model->delete_header_info_by_header_id($header_id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/header');
    }

    public function edit_header($header_id) {
        $data = array();
        $data['title'] = 'Edit Welcome Message Dtails';
       $data['header_info'] = $this->sa_model->select_header_info_by_header_id($header_id);
        $data['maincontent'] = $this->load->view('admin/edit_header', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_header() {
        $data = array();
        
        
        //this was an error
        //$data['header_id'] = $this->input->post('header_id', true);
        
        
         $header_id = $this->input->post('header_id', true);
        $data['logo'] = $this->input->post('logo', true);
        $data['title'] = $this->input->post('title', true);
        $this->sa_model->update_header_info($data, $header_id);
        $sdata = array();
        $sdata['message'] = "Updated Data Successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_header/' . $header_id);
    }
    
    
         public function about() {
        $data = array();
        $data['title'] = 'about Details';
        $data['all_about'] = $this->sa_model->select_all_about();
        $data['all_about'] = $this->w_model->select_all_about();
        $data['maincontent'] = $this->load->view('admin/about', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_about() {
         $data = array();
        /* Uplod start */
        $config['upload_path'] = 'assets/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '50000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/about');
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['title'] = $this->input->post('title', true);
            $data['description'] = $this->input->post('description', true);
            $this->sa_model->save_about_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/about');
        }
    }

    public function delete_about($about_id) {
        $this->sa_model->delete_about_info_by_about_id($about_id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/about');
    }

    public function edit_about($about_id) {
        $data = array();
        $data['title'] = 'Edit Welcome Message Dtails';
       $data['about_info'] = $this->sa_model->select_about_info_by_about_id($about_id);
        $data['maincontent'] = $this->load->view('admin/edit_about', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_about() {
        $data = array();
        
        
        //this was an error
        //$data['header_id'] = $this->input->post('header_id', true);
        
        
         $about_id = $this->input->post('about_id', true);
          $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['title'] = $this->input->post('title', true);
            $data['description'] = $this->input->post('description', true);
        $this->sa_model->update_about_info($data, $about_id);
        $sdata = array();
        $sdata['message'] = "Updated Data Successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_about/' . $about_id);
    }
    
    public function service() {
        $data = array();
        $data['title'] = 'service Details';
        $data['all_service'] = $this->sa_model->select_all_service();
      
        $data['maincontent'] = $this->load->view('admin/service', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_service() {
        $data = array();
        $data['service_id'] = $this->input->post('service_id', true);
        $data['title'] = $this->input->post('title', true);
        $data['description'] = $this->input->post('description', true);
       
        $this->sa_model->save_service_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/service');
    }

    public function delete_service($service_id) {
        $this->sa_model->delete_service_info_by_service_id($service_id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/service');
    }

    public function edit_service($service_id) {
        $data = array();
        $data['title'] = 'Edit Welcome Message Dtails';
       $data['service_info'] = $this->sa_model->select_service_info_by_service_id($service_id);
        $data['maincontent'] = $this->load->view('admin/edit_service', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_service() {
        $data = array();
        
        
        //this was an error
        //$data['header_id'] = $this->input->post('header_id', true);
        
        
         $service_id = $this->input->post('service_id', true);
        $data['title'] = $this->input->post('title', true);
        $data['description'] = $this->input->post('description', true);

        $this->sa_model->update_service_info($data, $service_id);
        $sdata = array();
        $sdata['message'] = "Updated Data Successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_service/' . $service_id);
    }
    
     public function main_portfolio() {
        $data = array();
        $data['title'] = 'portfolio';
        $data['all_main_portfolio'] = $this->sa_model->select_all_main_portfolio();
        $data['all_main_portfolio'] = $this->w_model->select_all_main_portfolio();
        $data['maincontent'] = $this->load->view('admin/main_portfolio', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

   public function save_main_portfolio() {
        $data = array();
        /* Uplod start */
        $config['upload_path'] = 'assets/img/portfolio/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('main_portfolio_photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/main_portfolio');
        } else {
            $fdata = $this->upload->data();
            $data['main_portfolio_photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $this->sa_model->save_main_portfolio_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/main_portfolio');
        }
    }
    public function delete_main_portfolio($id) {
        $this->sa_model->delete_main_portfolio_info_by_id($id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
       redirect('super_admin/main_portfolio');
    
    }

    public function edit_main_portfolio($id) {
        $data = array();
        $data['title'] = 'Edit Slide';
        $data['main_portfolio_info'] = $this->sa_model->select_main_portfolio_info_by_id($id);
        $data['maincontent'] = $this->load->view('admin/edit_main_protfolio', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_main_portfolio() {
        $data = array();
        $config['upload_path'] = 'images/work/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '3000';
        $config['max_width'] = '';
        $config['max_height'] = '';
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('main_portfolio_photo')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();


            $data['main_portfolio_photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $id = $this->input->post('id', true);

         $data['main_portfolio_photo'] = $this->input->post('main_portfolio_photo', true);
        $this->sa_model->update_main_portfolio_info($data, $id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_main_portfolio/' . $id);
    }
    
        
    
      public function contact() {
        $data = array();
        $data['title'] = 'Header Details';
        $data['all_contact'] = $this->sa_model->select_all_contact();
        $data['maincontent'] = $this->load->view('admin/contact', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
       public function delete_contact($contact_id) {
        $this->sa_model->delete_contact_info_by_contact_id($contact_id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/contact');
    }
    
    
     public function footer() {
        $data = array();
        $data['title'] = 'Header Details';
        $data['all_footer'] = $this->sa_model->select_all_footer();
        $data['all_footer'] = $this->w_model->select_all_footer();
        $data['maincontent'] = $this->load->view('admin/footer', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_footer() {
        $data = array();
        $data['footer_id'] = $this->input->post('footer_id', true);
        $data['address'] = $this->input->post('address', true);
        $data['email'] = $this->input->post('email', true);
        $data['number'] = $this->input->post('number', true);
        $data['description'] = $this->input->post('description', true);
       $this->sa_model->save_footer_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/footer');
    }

    public function delete_footer($footer_id) {
        $this->sa_model->delete_footer_info_by_footer_id($footer_id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/footer');
    }

    public function edit_footer($footer_id) {
        $data = array();
        $data['title'] = 'Edit Welcome Message Dtails';
       $data['footer_info'] = $this->sa_model->select_footer_info_by_footer_id($footer_id);
        $data['maincontent'] = $this->load->view('admin/edit_footer', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_footer() {
        $data = array();
        
        
        //this was an error
        //$data['header_id'] = $this->input->post('header_id', true);
        
        
         $footer_id = $this->input->post('footer_id', true);
        $data['address'] = $this->input->post('address', true);
        $data['email'] = $this->input->post('email', true);
         $data['number'] = $this->input->post('number', true);
        $data['description'] = $this->input->post('description', true);
        $this->sa_model->update_footer_info($data, $footer_id);
        $sdata = array();
        $sdata['message'] = "Updated Data Successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_footer/' . $footer_id);
    }
    
      
    
    public  function logout()
    {
        session_destroy();
        $this->session->unset_userdata('admin_id');
        $data=array();
        $data['message']='You Are Successfully Logout !';
        $this->session->set_userdata($data);
        redirect('admin_login/login');
    }
    
    
    
    
    
    
}
   ?>