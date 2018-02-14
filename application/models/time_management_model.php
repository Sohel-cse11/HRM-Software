<?php
class Time_management_model extends CI_Model {

	public function project($id){
		$this->db->select("e.id as id,
			               ep.employee as employee,
			               ep.project as project,
			               ep.date_end as date_end,
			               ep.date_start as date_start,
			               p.p_id as p_id,
			               p.project_name as project_name
			                ");
		$this->db->from("employeeprojects as ep");
		$this->db->join("employees as e","e.id=ep.employee","inner");
		$this->db->join("projects as p","p.p_id=ep.project","inner");
		$this->db->where("e.id",$id);
		return $query = $this->db->get()->result();
	}

	public function attendance($id){
		$this->db->select("e.id as id,
			               a.employee as employee,
			               a.in_time as in_time,
			               a.out_time as out_time			               
			                ");
		$this->db->from("attendance as a");
		$this->db->join("employees as e","e.id=a.employee","inner");
		$this->db->where("e.id",$id);
		return $query = $this->db->get()->result();
	}
}

