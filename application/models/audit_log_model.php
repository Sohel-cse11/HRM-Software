<?php

class Audit_log_model extends CI_Model {

	public function get_all_data(){
		$this->db->select("a.time as time,
						   a.type as type,
						   a.user as user,
						   a.employee as employee,
						   e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   u.id as id,
						   u.user_level as user_level  
		                   ");
		$this->db->from("auditlog as a");
		$this->db->join("employees as e","e.id = a.employee","inner");
		$this->db->join("users as u","u.id = a.user","inner");
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_data($data) {
        $this->db->insert('auditlog', $data);
        return $this->db->insert_id();
    }

}