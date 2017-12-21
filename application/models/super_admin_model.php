<?php

class super_admin_model extends CI_Model {

    //put your code herep



    public function save_header_info($data) {
        $this->db->insert('header', $data);
    }

    public function select_all_header() {
        $this->db->select('*');
        $this->db->from('header');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function delete_header_info_by_header_id($header_id) {
        $this->db->where('header_id', $header_id);
        $this->db->delete('header');
    }

    public function select_header_info_by_header_id($header_id) {
        $this->db->select('*');
        $this->db->from('header');
        $this->db->where('header_id', $header_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_header_info($data, $header_id) {
        $this->db->where('header_id', $header_id);
        $this->db->update('header', $data);
    } 
    
    public function save_about_info($data) {
        $this->db->insert('about', $data);
    }

    public function select_all_about() {
        $this->db->select('*');
        $this->db->from('about');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function delete_about_info_by_about_id($about_id) {
        $this->db->where('about_id', $about_id);
        $this->db->delete('about');
    }

    public function select_about_info_by_about_id($about_id) {
        $this->db->select('*');
        $this->db->from('about');
        $this->db->where('about_id', $about_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_about_info($data, $about_id) {
        $this->db->where('about_id', $about_id);
        $this->db->update('about', $data);
    }  
     public function save_service_info($data) {
        $this->db->insert('service', $data);
    }

     public function select_all_service() {
        $this->db->select('*');
        $this->db->from('service');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function delete_service_info_by_service_id($service_id) {
        $this->db->where('service_id', $service_id);
        $this->db->delete('service');
    }

    public function select_service_info_by_service_id($service_id) {
        $this->db->select('*');
        $this->db->from('service');
        $this->db->where('service_id', $service_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_service_info($data, $service_id) {
        $this->db->where('service_id', $service_id);
        $this->db->update('service', $data);
    } 
    
     public function delete_contact_info_by_contact_id($contact_id) {
        $this->db->where('contact_id', $contact_id);
        $this->db->delete('contact');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
       public function save_main_portfolio_info($data) {
        $this->db->insert('main_portfolio', $data);
    }

    public function display_main_portfolio_details_by_id($id) {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function delete_main_portfolio_info_by_id($id) {
        $this->db->where('id', $id);
        $this->db->delete('main_portfolio');
    }
    
   

    public function select_all_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_main_portfolio_info_by_id($id) {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
        
    }
    
    public function update_main_portfolio_info($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('main_portfolio', $data);
    }
      public function select_all_contact() {
        $this->db->select('*');
        $this->db->from('contact');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function save_footer_info($data) {
        $this->db->insert('footer', $data);
    }

    public function select_all_footer() {
        $this->db->select('*');
        $this->db->from('footer');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function delete_footer_info_by_footer_id($footer_id) {
        $this->db->where('footer_id', $footer_id);
        $this->db->delete('footer');
    }

    public function select_footer_info_by_footer_id($footer_id) {
        $this->db->select('*');
        $this->db->from('footer');
        $this->db->where('footer_id', $footer_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_footer_info($data, $footer_id) {
        $this->db->where('header_id', $footer_id);
        $this->db->update('footer', $data);
    } 
    
   
}

?>
