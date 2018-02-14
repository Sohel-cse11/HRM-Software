<?php

class Project_model extends CI_Model {
	
//-------------------------- start project area -----------------------------------------
	public function get_all_data(){
		$this->db->select("p.project_name as project_name,
		                   p.client as client,
		                   p.status as status,
		                   p.details as details,
		                   p.p_id as p_id,
		                   c.name as name,
		                   c.id as id,
		                   s.id as id,
		                   s.status_name as status_name
		                   ");
		$this->db->from("projects as p");
		$this->db->join("clients as c","c.id = p.client","inner");
		$this->db->join("tbl_status as s","s.id = p.status","inner");
		$this->db->where("p.status !=", '13');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_data_by_id($id){
		$this->db->select("p.project_name as project_name,
		                   p.client as client,
		                   p.status as status,
		                   p.details as details,
		                   p.p_id as p_id,
		                   c.name as name,
		                   c.id as id,
		                   s.id as id,
		                   s.status_name as status_name
		                   ");
		$this->db->from("projects as p");
		$this->db->join("clients as c","c.id = p.client","inner");
		$this->db->join("tbl_status as s","s.id = p.status","inner");
		$this->db->where("p.p_id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_data($data){
		$this->db->insert("projects",$data);
		return $this->db->insert_id();
	}

	public function update_data($data,$id){
		$this->db->where("p_id",$id);
		return $this->db->update("projects",$data);
	}

	public function get_client(){
		$this->db->select("id,name");
		$this->db->from("clients");
		$query = $this->db->get()->result();
		return $query;
	}
	
	public function get_status(){
		$this->db->select("id,status_name");
		$this->db->from("tbl_status");
		$query = $this->db->get()->result();
		return $query;
	}

//-------------------------- end project area -----------------------------------------

//-------------------------- start client area -----------------------------------------
	public function get_all_client_data(){
		$this->db->select('*');
		$this->db->from('clients');
		$this->db->where("status !=", '13');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_client_data_by_id($id){
		$this->db->select('*');
		$this->db->from('clients');
		$this->db->where('id',$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_client_data($data){
		$this->db->insert("clients",$data);
		return $this->db->insert_id();
	}

	public function update_client_data($data,$id){
		$this->db->where("id",$id);
		return $this->db->update("clients",$data);
	}

//-------------------------- end client area -----------------------------------------

//-------------------------- start employee project area -----------------------------------------

	public function get_all_employee_project_data(){

		$this->db->select("e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   ep.ep_id as ep_id,
						   ep.project as project,
						   ep.employee as employee,
						   ep.status as status,
						   p.p_id as p_id,
						   p.project_name as project_name
						   ");
		$this->db->from("employeeprojects as ep");
		$this->db->join("projects as p","p.p_id = ep.project","inner");
		$this->db->join("employees as e","e.id = ep.employee","inner");
		$this->db->where("ep.status !=", "13");
		$query = $this->db->get();
		return $query->result();
	}

	public function get_employee_project_data_by_id($id){

		$this->db->select("e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   ep.ep_id as ep_id,
						   ep.project as project,
						   ep.employee as employee,
						   ep.status as status,
						   ep.details as details,
						   p.p_id as p_id,
						   p.project_name as project_name
						   ");
		$this->db->from("employeeprojects as ep");
		$this->db->join("projects as p","p.p_id = ep.project","inner");
		$this->db->join("employees as e","e.id = ep.employee","inner");
		$this->db->where("ep.ep_id", $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function insert_employee_project_data($data){
		$this->db->insert("employeeprojects",$data);
		return $this->db->insert_id();
	}

	public function update_employee_project_data($data,$id){
		$this->db->where("ep_id",$id);
		return $this->db->update("employeeprojects",$data);
	}

	public function get_employee(){
		$this->db->select("id,first_name,middle_name,last_name");
		$this->db->from("employees");
		$query = $this->db->get()->result();
		return $query;
	}
	public function get_project(){
		$this->db->select("p_id,project_name");
		$this->db->from("projects");
		$query = $this->db->get()->result();
		return $query;
	}

//-------------------------- end employee project area -----------------------------------------
}