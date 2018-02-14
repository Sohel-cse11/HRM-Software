<?php

class Travel_model extends CI_Model {

	public function get_all_data(){
		$this->db->select("e.id as id,
			               e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   t.id as id,
						   t.employee as employee,
		                   t.purpose as purpose,
		                   t.travel_from as travel_from,
		                   t.travel_to as travel_to,
		                   t.travel_date as travel_date,
		                   t.return_date as return_date,
		                   t.details as details,
		                   t.funding as funding,
		                   t.status as status
		                   ");
		$this->db->from("employeetravelrecords as t");
		$this->db->join("employees as e","e.id = t.employee","inner");		
		$query = $this->db->get();
		return $query->result();
	}

	public function get_data_by_id($id){
		$this->db->select("e.id as id,
			               e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   t.id as id,
						   t.employee as employee,
		                   t.purpose as purpose,
		                   t.travel_from as travel_from,
		                   t.travel_to as travel_to,
		                   t.travel_date as travel_date,
		                   t.return_date as return_date,
		                   t.details as details,
		                   t.funding as funding,
		                   t.status as status
		                   ");
		$this->db->from("employeetravelrecords as t");
		$this->db->join("employees as e","e.id = t.employee","inner");	
		$this->db->where("t.id",$id);	
		$query = $this->db->get();
		return $query->row();
	}

	public function get_employee(){
		$this->db->select("id,first_name,middle_name,last_name");
		$this->db->from("employees");
		$query = $this->db->get()->result();
		return $query;
	}

	public function insert_data($data){
		$this->db->insert("employeetravelrecords",$data);
		return $this->db->insert_id();
	}

	public function update_data($data,$id){
		$this->db->where("id",$id);
		return $this->db->update("employeetravelrecords",$data);
	}

	public function delete_data($id){
		$this->db->where("id",$id);
		return $this->db->delete("employeetravelrecords");
	}

	public function mytravel($id){
		$this->db->select("e.id as id,
						   t.employee as employee,
		                   t.purpose as purpose,
		                   t.travel_from as travel_from,
		                   t.travel_to as travel_to,
		                   t.travel_date as travel_date,
		                   t.return_date as return_date,
		                   t.details as details,
		                   t.funding as funding,
		                   t.status as status
		                   ");
		$this->db->from("employeetravelrecords as t");
		$this->db->join("employees as e","e.id = t.employee","inner");	
		$this->db->where("e.id",$id);	
		$query = $this->db->get();
		return $query->result();
	}
}