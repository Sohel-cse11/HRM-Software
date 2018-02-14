<?php

class Job_model extends CI_Model {

//-------------------------- start job title area -----------------------------------------

	//read data
	public function get_all_data(){
		$this->db->select("*");
		$this->db->from("jobtitles");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_data_by_id($id){
		$this->db->select("*");
		$this->db->from("jobtitles");
		$this->db->where("jt_id",$id);
		$query = $this->db->get()->row();
		return $query;	
	}

	public function insert_data($data){
		$this->db->insert("jobtitles",$data);
		return $this->db->insert_id();
	}

	public function update_data($data,$id){
		$this->db->where("jt_id",$id);
		return $this->db->update("jobtitles",$data);
	}	

	public function delete_data($id){
		$this->db->where("jt_id",$id);
		return $this->db->delete("jobtitles");
	}

//-------------------------- end job title area -------------------------------------------

//-------------------------- start pay grade area -------------------------------------------

    public function get_all_pay_grade_data(){
    	$this->db->select("c.code as code,
		                   c.currency_name as currency_name,
		                   p.p_id as p_id,
		                   p.name as name,
		                   p.currency as currency,
		                   p.min_salary as min_salary,
		                   p.max_salary as max_salary
		                   ");
		$this->db->from("paygrades as p");
		$this->db->join("currencytypes as c","c.code = p.currency","inner");
		$query = $this->db->get();
		return $query->result();
    }

    public function get_pay_grade_by_id($id){
    	$this->db->select("c.code as code,
		                   c.currency_name as currency_name,
		                   p.p_id as p_id,
		                   p.name as name,
		                   p.currency as currency,
		                   p.min_salary as min_salary,
		                   p.max_salary as max_salary
		                   ");
		$this->db->from("paygrades as p");
		$this->db->join("currencytypes as c","c.code = p.currency","inner");
		$this->db->where("p.p_id",$id);
		$query = $this->db->get();
		return $query->row();
    }

    public function get_currency(){
		$this->db->select("*");
		$this->db->from("currencytypes");
		$query = $this->db->get()->result();
		return $query;
	}

	public function insert_pay_grade_data($data){
		$this->db->insert("paygrades",$data);
		return $this->db->insert_id();
	}

	public function update_pay_grade_data($data,$id){
		$this->db->where("p_id",$id);
		return $this->db->update("paygrades",$data);
	}	

	public function delete_pay_grade_data($id){
		$this->db->where("p_id",$id);
		return $this->db->delete("paygrades");
	}
}