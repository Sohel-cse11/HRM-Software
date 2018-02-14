<?php

class leave_model extends CI_Model {

//-------------------------- start leave area -----------------------------------------

	//read data
	public function get_all_data(){
		$this->db->select("*");
		$this->db->from("leave");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_data_by_id($id){
		$this->db->select('*');
		$this->db->from('leave');
		$this->db->where("leave_id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_data($data){
		$this->db->insert("leave",$data);
		return $this->db->insert_id();
	}

	public function update_data($data,$id){
		$this->db->where("leave_id",$id);
		return $this->db->update("leave",$data);
	}

	public function delete_data($id){
		$this->db->where("leave_id",$id);
		return $this->db->delete("leave");
	}
//-------------------------- end leave area -----------------------------------------

	public function get_all_employee_leave_data(){
		$this->db->select("e.first_name as first_name,
						   e.id as id,
			               e.middle_name as middle_name,
			               e.last_name as last_name,
			               m.emp_leave_id as emp_leave_id,
			               m.emp_name as emp_name,
			               m.start_date as start_date,
			               m.end_date as end_date,
			               m.reason as reason,
			               m.leave_type as leave_type, 
			               m.status as status,
			               s.leave_status_id as leave_status_id,
			               s.status_name as status_name,
			               l.leave_id as leave_id,
			               l.leave_name as leave_name,
			               m.day as day
			               ");
		$this->db->from("leave-employee as m");
		$this->db->join("employees as e","e.id = m.emp_name","inner");
		$this->db->join("leave as l","l.leave_id = m.leave_type","inner");
		$this->db->join("leave_status as s","s.leave_status_id = m.status","inner");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_all_employee_leave_data_by_id($id){
		$this->db->select("e.first_name as first_name,
						   e.id as id,
			               e.middle_name as middle_name,
			               e.last_name as last_name,
			               m.emp_leave_id as emp_leave_id,
			               m.emp_name as emp_name,
			               m.start_date as start_date,
			               m.end_date as end_date,
			               m.reason as reason,
			               m.leave_type as leave_type, 
			               m.status as status,
			               s.leave_status_id as leave_status_id,
			               s.status_name as status_name,
			               l.leave_id as leave_id,
			               l.leave_name as leave_name,
			               m.day as day
			               ");
		$this->db->from("leave-employee as m");
		$this->db->join("employees as e","e.id = m.emp_name","inner");
		$this->db->join("leave as l","l.leave_id = m.leave_type","inner");
		$this->db->join("leave_status as s","s.leave_status_id = m.status","inner");
		$this->db->where("m.emp_leave_id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_emp_data($data){
		$this->db->insert("leave-employee",$data);
		return $this->db->insert_id();
	}

	public function update_emp_data($data,$id){
		$this->db->where("emp_leave_id",$id);
		return $this->db->update("leave-employee",$data);
	}

	public function delete_emp_data($id){
		$this->db->where("emp_leave_id",$id);
		return $this->db->delete("leave-employee");
	}
	public function employee(){
		$this->db->select("*");
		$this->db->from("employees");
		$query = $this->db->get()->result();
		return $query;
	}
	public function status(){
		$this->db->select("*");
		$this->db->from("leave_status");
		$query = $this->db->get()->result();
		return $query;
	}
	public function leave(){
		$this->db->select("*");
		$this->db->from("leave");
		$query = $this->db->get()->result();
		return $query;
	}

	public function my_leaves($id){
		$this->db->select("e.first_name as first_name,
						   e.id as id,
			               e.middle_name as middle_name,
			               e.last_name as last_name,
			               m.emp_leave_id as emp_leave_id,
			               m.emp_name as emp_name,
			               m.start_date as start_date,
			               m.end_date as end_date,
			               m.reason as reason,
			               m.leave_type as leave_type, 
			               m.status as status,
			               s.leave_status_id as leave_status_id,
			               s.status_name as status_name,
			               l.leave_id as leave_id,
			               l.leave_name as leave_name,
			               m.day as day
			               ");
		$this->db->from("leave-employee as m");
		$this->db->join("employees as e","e.id = m.emp_name","inner");
		$this->db->join("leave as l","l.leave_id = m.leave_type","inner");
		$this->db->join("leave_status as s","s.leave_status_id = m.status","inner");
		$this->db->where("e.id",$id);
		$query = $this->db->get()->result();
		return $query;
	}

	
}