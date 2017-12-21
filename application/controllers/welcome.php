<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Welcome extends CI_Controller {
    
       public function __construct() {
        parent::__construct();
        static $data;
        
         $this->load->model('super_admin_model', 'sa_model', TRUE);
        $this->load->model('welcome_model', 'w_model', true);
      

        
    }

	
    public function index() {
        $data = array();
        $data['all_header'] = $this->w_model->select_all_header();
        $data['all_about'] = $this->w_model->select_all_about();
        $data['all_service'] = $this->w_model->select_all_service();
        $data['frist_service'] = $this->w_model->select_frist_service();
        $data['second_service'] = $this->w_model->select_second_service();
        $data['third_service'] = $this->w_model->select_third_service();
        $data['fourth_service'] = $this->w_model->select_fourth_service();
        $data['all_main_portfolio'] = $this->w_model->select_all_main_portfolio();
        $data['frist_main_portfolio'] = $this->w_model->select_frist_main_portfolio();
        $data['second_main_portfolio'] = $this->w_model->select_second_main_portfolio();
        $data['third_main_portfolio'] = $this->w_model->select_third_main_portfolio();
        $data['fourth_main_portfolio'] = $this->w_model->select_fourth_main_portfolio();
        $data['fifth_main_portfolio'] = $this->w_model->select_fifth_main_portfolio();
        $data['sixth_main_portfolio'] = $this->w_model->select_sixth_main_portfolio();
        $data['seventh_main_portfolio'] = $this->w_model->select_seventh_main_portfolio();
        $data['eight_main_portfolio'] = $this->w_model->select_eight_main_portfolio();
        $data['nine_main_portfolio'] = $this->w_model->select_nine_main_portfolio();
        $data['ten_main_portfolio'] = $this->w_model->select_ten_main_portfolio();
        $data['eleven_main_portfolio'] = $this->w_model->select_eleven_main_portfolio();
        $data['twelve_main_portfolio'] = $this->w_model->select_twelve_main_portfolio();
        $data['thirteen_main_portfolio'] = $this->w_model->select_thirteen_main_portfolio();
        $data['fourteen_main_portfolio'] = $this->w_model->select_fourteen_main_portfolio();
        $data['fifteen_main_portfolio'] = $this->w_model->select_fifteen_main_portfolio();
        $data['sixteen_main_portfolio'] = $this->w_model->select_sixteen_main_portfolio();
        $data['seventeen_main_portfolio'] = $this->w_model->select_seventeen_main_portfolio();
        $data['eighteen_main_portfolio'] = $this->w_model->select_eighteen_main_portfolio();
        $data['all_footer']=$this->w_model->select_all_footer();

        $this->load->view('index', $data);
    }
         
        public function save() {
        $data = array();
        $data['full_name'] = $this->input->post('full_name', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['subject'] = $this->input->post('subject', true);
        $data['date'] = date("Y-m-d h:i:sa");
        $data['message'] = $this->input->post('message', true);
        $this->w_model->save_contact_info($data);
        $sdata = array();
        $sdata['message'] = 'Message Send Successfully !';
        $this->session->set_userdata($sdata);
        redirect('welcome/index');
    }
       
        
         public function login() {
        $data = array();
        $data['title'] = 'Header Details';
    
        $this->load->view('login', $data);
    }
}
