<?php

class Admin_Login_Model extends CI_Model {

    public function select_admin($email_address, $password) {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email_address', $email_address);
        $this->db->where('admin_password', $password);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
     public function update_admin_info($data, $email_address) {
        $this->db->where('admin_email_address', $email_address);
        $this->db->update('tbl_admin', $data);
    }

}

?>