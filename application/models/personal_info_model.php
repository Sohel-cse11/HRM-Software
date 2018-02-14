<?php

class Personal_info_model extends CI_Model {

//-------------------------- start employee area -----------------------------------------
	public function get_all_data($id){
		$this->db->select("*");
		$this->db->from("employees");
		$this->db->where("employee_status != ",'13');
		$this->db->where("id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function education($id){
		$this->db->select("e.id as id,
						   ee.ed_id as ed_id,
						   ee.education_id as education_id,
						   ee.employee as employee,
						   ee.institute as institute,
						   ee.date_start as date_start,
						   ee.date_end as date_end,
						   ed.id as id,
						   ed.name as name
						   ");
		$this->db->from("employeeeducations as ee");
		$this->db->join("employees as e","e.id=ee.employee","inner");
		$this->db->join("educations as ed","ed.id=ee.education_id","inner");
		$this->db->where("employee_status != ",'13');
		$this->db->where("e.id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function job_details($id){
		$this->db->select("e.id as id,
						   e.pay_grade as pay_grade,
						   e.job_title as job_title,
						   e.department as department,
						   p.p_id as p_id,
						   p.name as name,
						   d.DepartmentId as DepartmentId,
						   d.DepartmentName as DepartmentName,
						   jt.jt_id as jt_id,
						   jt.jt_name as jt_name
						   ");
		$this->db->from("employees as e");
		$this->db->join("paygrades as p","p.p_id=e.pay_grade","inner");
		$this->db->join("department as d","d.DepartmentId=e.department","inner");
		$this->db->join("jobtitles as jt","jt.jt_id=e.job_title","inner");
		$this->db->where("employee_status != ",'13');
		$this->db->where("id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function skill($id){
		$this->db->select("e.id as id,
						   s.id as id,
						   s.skill_id as skill_id,
						   s.employee as employee,
						   s.details as details,
						   es.id as id,
						   es.name as name
						   ");
		$this->db->from("employeeskills as s");
		$this->db->join("employees as e","e.id=s.employee","inner");
		$this->db->join("skills as es","es.id=s.skill_id","inner");
		$this->db->where("employee_status != ",'13');
		$this->db->where("e.id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function certification($id){
		$this->db->select("e.id as id,
						   ec.id as id,
						   ec.certification_id as certification_id,
						   ec.employee as employee,
						   ec.institute as institute,
						   ec.date_start as date_start,
						   ec.date_end as date_end,
						   c.id as id,
						   c.name as name
						   ");
		$this->db->from("employeecertifications as ec");
		$this->db->join("employees as e","e.id=ec.employee","inner");
		$this->db->join("certifications as c","c.id=ec.certification_id","inner");
		$this->db->where("e.id",$id);
		$query = $this->db->get()->result();
		return $query;
	}

	public function language($id){
		$this->db->select("e.id as id,
						   el.id as id,
						   el.language_id as language_id,
						   el.employee as employee,
						   el.reading as reading,
						   el.writing as writing,
						   el.speaking as speaking,
						   l.id as id,
						   l.name as name
						   ");
		$this->db->from("employeelanguages as el");
		$this->db->join("employees as e","e.id=el.employee","inner");
		$this->db->join("languages as l","l.id=el.language_id","inner");
		$this->db->where("e.id",$id);
		$query = $this->db->get()->result();
		return $query;
	}

	public function dependents($id){
		$this->db->select("e.id as id,
						   d.id as id,
						   d.name as name,
						   d.employee as employee,
						   d.relationship as relationship,
						   d.dob as dob,
						   d.id_number as id_number,
						   ");
		$this->db->from("employeedependents as d");
		$this->db->join("employees as e","e.id=d.employee","inner");
		$this->db->where("e.id",$id);
		$query = $this->db->get()->result();
		return $query;
	}

	public function contact($id){
		$this->db->select("e.id as id,
						   d.id as id,
						   d.name as name,
						   d.employee as employee,
						   d.relationship as relationship,
						   d.home_phone as home_phone,
						   d.mobile_phone as mobile_phone,
						   ");
		$this->db->from("emergencycontacts as d");
		$this->db->join("employees as e","e.id=d.employee","inner");
		$this->db->where("e.id",$id);
		$query = $this->db->get()->result();
		return $query;
	}

}