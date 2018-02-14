<?php

class Employee_model extends CI_Model {

//-------------------------- start employee area -----------------------------------------
	public function get_all_data(){
		$this->db->select("*");
		$this->db->from("employees");
		$this->db->where("employee_status != ",'13');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_data_by_id($id){
		$this->db->select("*");
		$this->db->from("employees");
		$this->db->where("id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function total_employee(){		
		$query = $this->db->count_all('employees');
		return $query;
	}

	public function insert_data($data){
		$this->db->insert("employees",$data);
		return $this->db->insert_id();
	}

	public function update_data($data,$id){
		$this->db->where("id",$id);
		return $this->db->update("employees",$data);
	}	

	public function get_department(){
		$this->db->select("*");
		$this->db->from("department");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_paygrade(){
		$this->db->select("*");
		$this->db->from("paygrades");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_jobtitle(){
		$this->db->select("*");
		$this->db->from("jobtitles");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_userrole(){
		$this->db->select("*");
		$this->db->from("userroles");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_status(){
		$this->db->select("*");
		$this->db->from("tbl_status");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_supervisor(){
		$this->db->select("id,first_name,middle_name,last_name");
		$this->db->from("employees");
		$this->db->where("employee_level !=","3");
		$query = $this->db->get()->result();
		return $query;
	}

}