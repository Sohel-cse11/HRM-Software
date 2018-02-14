<?php
class Notification_model extends CI_Model {

public function get_all_data(){
		$this->db->select('e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   a.n_id as n_id,
						   a.employee as employee,
						   a.message_title as message_title,
						   a.message as message,
						   a.time as time
						   ');
		$this->db->from('notifications as a');
		$this->db->join("employees as e","e.id=a.employee","inner");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_data_by_id($id){
		$this->db->select('e.id as id,
						  e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   a.n_id as n_id,
						   a.employee as employee,
						   a.message_title as message_title,
						   a.message as message,
						   a.time as time
						   ');
		$this->db->from('notifications as a');
		$this->db->join("employees as e","e.id=a.employee","inner");	
		$this->db->where("a.n_id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_data($data){
		$this->db->insert("notifications",$data);
		return $this->db->insert_id();
	}

	public function update_data($data,$id){
		$this->db->where("n_id",$id);
		return $this->db->update("notifications",$data);
	}

	public function delete_data($id){
		$this->db->where("n_id",$id);
		return $this->db->delete("notifications");
	}

	public function get_employee(){
		$this->db->select("*");
		$this->db->from("employees");
		$query = $this->db->get()->result();
		return $query;
	}

}	