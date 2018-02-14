<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Chart_model extends CI_Model {
 

   public function get_chart_data() {
        $this->db->select("e.id as id,
                           e.first_name as first_name,
                           e.middle_name as middle_name,
                           e.last_name as last_name,
                           a.employee as employee,
                           a.in_time as in_time,
                           a.out_time as out_time
                           ");
        $this->db->from("attendance as a");
        $this->db->join("employees as e","e.id=a.employee","inner");
        return $query=$this->db->get()->result();
    }

     public function get_chart_data_by_id($id) {
        $this->db->select("e.id as id,
                           e.first_name as first_name,
                           e.middle_name as middle_name,
                           e.last_name as last_name,
                           a.employee as employee,
                           a.in_time as in_time,
                           a.out_time as out_time
                           ");
        $this->db->from("attendance as a");
        $this->db->join("employees as e","e.id=a.employee","inner");
        $this->db->where("a.employee","$id");
        return $query=$this->db->get()->result();
    }
 
   public function insert_data(){
      $this->db->select("*");
      $this->db->from("employees");
      $query = $this->db->get()->result();
      return $query;
    }
}