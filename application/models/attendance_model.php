<?php
class Attendance_model extends CI_Model {

public function get_all_data(){
		$this->db->select('e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   a.id as id,
						   a.employee as employee,
						   a.in_time as in_time,
						   a.out_time as out_time,
						   a.note as note
						   ');
		$this->db->from('attendance as a');
		$this->db->join("employees as e","e.id=a.employee","inner");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_all_data_by_id($id){
		$this->db->select('e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   a.id as id,
						   a.employee as employee,
						   a.in_time as in_time,
						   a.out_time as out_time,
						   a.note as note
						   ');
		$this->db->from('attendance as a');
		$this->db->join("employees as e","e.id=a.employee","inner");	
		$this->db->where("a.id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_data($data){
		$this->db->insert("attendance",$data);
		return $this->db->insert_id();
	}

	public function update_data($data,$id){
		$this->db->where("id",$id);
		return $this->db->update("attendance",$data);
	}

	public function delete_data($id){
		$this->db->where("id",$id);
		return $this->db->delete("attendance");
	}

	public function get_employee(){
		$this->db->select("*");
		$this->db->from("employees");
		$query = $this->db->get()->result();
		return $query;
	}

	
}