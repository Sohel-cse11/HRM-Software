<?php

class Job_require_model extends CI_Model {
	
//-------------------------- start job_require area -----------------------------------------
	public function get_all_data(){
		$this->db->select("j.jt_id as jt_id,						   
						   j.jt_name as jt_name,
						   d.DepartmentID as DepartmentID,
						   d.DepartmentName as DepartmentName,
						   r.job_require_id as job_require_id,
						   r.job_title as job_code,
						   r.department as department,
						   r.job_description as job_description
			               ");
		$this->db->from("recruit_job_require as r");
		$this->db->join("jobtitles as j","j.jt_id = r.job_title","inner");
		$this->db->join("department as d","d.DepartmentID = r.department","inner");
		$query = $this->db->get();
		return $query->result();
	}

	public function get_data_by_id($id){
		$this->db->select("j.jt_id as jt_id,						   
						   j.jt_name as jt_name,
						   d.DepartmentID as DepartmentID,
						   d.DepartmentName as DepartmentName,
						   r.job_require_id as job_require_id,
						   r.job_title as job_title,
						   r.department as department,
						   r.job_description as job_description,
						   r.requirement as requirement,
						   r.education_level as education_level,
						   r.job_function as job_function,
						   r.employee_type as employee_type,
						   r.benefit as benefit,
						   r.experience as experience,
						   r.max_salary as max_salary,
						   r.min_salary as min_salary,
						   r.deadline as deadline
			               ");
		$this->db->from("recruit_job_require as r");
		$this->db->join("jobtitles as j","j.jt_id = r.job_title","inner");
		$this->db->join("department as d","d.DepartmentID = r.department","inner");
		$this->db->where("r.job_require_id",$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function insert_data($data){
		$this->db->insert("recruit_job_require",$data);
		return $this->db->insert_id();
	}

	public function get_job_code(){
		$this->db->select("*");
		$this->db->from("jobtitles");
		$query = $this->db->get()->result();
		return $query;
	}
	public function benefit(){
		$this->db->select("*");
		$this->db->from("recruit_benefits");
		$query = $this->db->get()->result();
		return $query;
	}
	public function salary(){
		$this->db->select("*");
		$this->db->from("paygrades");
		$query = $this->db->get()->result();
		return $query;
	}
	public function education(){
		$this->db->select("*");
		$this->db->from("recruit_education_level");
		$query = $this->db->get()->result();
		return $query;
	}
	public function employee_type(){
		$this->db->select("*");
		$this->db->from("recruit_employee_type");
		$query = $this->db->get()->result();
		return $query;
	}
	public function job_function(){
		$this->db->select("*");
		$this->db->from("recrui_job_function");
		$query = $this->db->get()->result();
		return $query;
	}
	public function experience(){
		$this->db->select("*");
		$this->db->from("recrui_experience_level");
		$query = $this->db->get()->result();
		return $query;
	}
	public function department(){
		$this->db->select("*");
		$this->db->from("department");
		$query = $this->db->get()->result();
		return $query;
	}
	public function update_data($data,$id){
		$this->db->where("job_require_id",$id);
		return $this->db->update("recruit_job_require",$data);
	}	

	public function delete_data($id){
		$this->db->where("job_require_id",$id);
		return $this->db->delete("recruit_job_require");
	}

}