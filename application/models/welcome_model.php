<?php


class Welcome_model extends CI_Model {
    //put your code here
    public function select_all_header() {
        $this->db->select('*');
        $this->db->from('header');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_all_service() {
        $this->db->select('*');
        $this->db->from('service');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      
     public function select_frist_service() {
        $this->db->select('*');
        $this->db->from('service');
        $this->db->order_by('service_id','desc');
        $this->db->limit(1,0);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_second_service() {
        $this->db->select('*');
        $this->db->from('service');
        $this->db->order_by('service_id','desc');
        $this->db->limit(1,1);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_third_service() {
        $this->db->select('*');
        $this->db->from('service');
        $this->db->order_by('service_id','desc');
        $this->db->limit(1,2);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_fourth_service() {
        $this->db->select('*');
        $this->db->from('service');
        $this->db->order_by('service_id','desc');
        $this->db->limit(1,3);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        
          public function select_all_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      
     public function select_frist_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,0);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_second_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,1);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_third_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,2);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_fourth_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,3);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_fifth_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,4);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_sixth_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,5);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_seventh_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,6);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_eight_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,7);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_nine_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,8);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_ten_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,9);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_eleven_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,10);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_twelve_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,11);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
          public function select_thirteen_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,12);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
          public function select_fourteen_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,13);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
          public function select_fifteen_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,14);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_sixteen_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,14);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
          public function select_seventeen_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,15);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
          public function select_eighteen_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->order_by('id','desc');
        $this->db->limit(1,16);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    
        public function select_all_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_first_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,0);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_second_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,1);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_third_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,2);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_fourth_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,3);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_fifth_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,4);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_sixth_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,5);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_seventh_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,6);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_eight_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,7);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_nine_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,8);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_ten_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,9);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_eleven_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,10);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_twelve_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,11);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
          public function select_thirteen_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,12);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
          public function select_fourteen_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,13);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
          public function select_fifteen_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,14);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_sixteen_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,14);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
          public function select_seventeen_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,15);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
          public function select_eighteen_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->order_by('id','desc');
        $this->db->limit(1,16);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    
        public function select_all_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_first_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->order_by('id','desc');
        $this->db->limit(1,0);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_second_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->order_by('id','desc');
        $this->db->limit(1,1);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_third_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->order_by('id','desc');
        $this->db->limit(1,2);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_fourth_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->order_by('id','desc');
        $this->db->limit(1,3);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_fifth_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->order_by('id','desc');
        $this->db->limit(1,4);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_sixth_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->order_by('id','desc');
        $this->db->limit(1,5);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_seventh_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->order_by('id','desc');
        $this->db->limit(1,6);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_eight_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->order_by('id','desc');
        $this->db->limit(1,7);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_nine_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->order_by('id','desc');
        $this->db->limit(1,8);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_ten_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->order_by('id','desc');
        $this->db->limit(1,9);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
        public function select_eleven_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->order_by('id','desc');
        $this->db->limit(1,10);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
         public function select_twelve_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->order_by('id','desc');
        $this->db->limit(1,11);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    
        public function select_all_about() {
        $this->db->select('*');
        $this->db->from('about');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function save_contact_info($data) {
        $this->db->insert('contact', $data);
    }
 public function select_all_footer() {
        $this->db->select('*');
        $this->db->from('footer');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

}


?>
