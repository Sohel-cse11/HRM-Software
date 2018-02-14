<?php

class Training_model extends CI_Model {

//-------------------------- start course area -----------------------------------------

	public function get_all_course_data(){
		$this->db->select("e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   t.course_id as course_id,
						   t.name as name,
						   t.trainer_details as trainer_details,
						   t.trainer as trainer,
		                   t.coordinator as coordinator
		                   ");
		$this->db->from("training_course as t");
		$this->db->join("employees as e","e.id = t.coordinator","inner");
		$query = $this->db->get();
		return $query->result();
	}

	public function get_course_data_by_id($id){
		$this->db->select("e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   t.course_id as course_id,
						   t.name as name,
						   t.trainer_details as trainer_details,
						   t.trainer as trainer,
		                   t.coordinator as coordinator
		                   ");
		$this->db->from("training_course as t");
		$this->db->join("employees as e","e.id = t.coordinator","inner");
		$this->db->where("t.course_id",$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_coordinator(){ // from employees table (employee name)
		$this->db->select("id,first_name,middle_name,last_name");
		$this->db->from("employees");
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_course_data($data){
		$this->db->insert("training_course",$data);
		return $this->db->insert_id();
	}

	public function update_course_data($data,$id){
		$this->db->where("course_id",$id);
		return $this->db->update("training_course",$data);
	}	

	public function delete_course_data($id){
		$this->db->where("course_id",$id);
		return $this->db->delete("training_course");
	}

//-------------------------- end course area -----------------------------------------

//-------------------------- start training session area -----------------------------------------

	public function get_all_training_session_data(){
		$this->db->select("t.session_id as session_id,
						   t.course_id as course_id,
						   t.session_name as session_name,
						   t.scheduled_time as scheduled_time,
						   c.course_id as course_id,
						   c.name as name,
						   a.id as id,
						   a.attendance_name as attendance_name,
						   d.id as id,
						   d.delivery_name as delivery_name
		                   ");
		$this->db->from("training_session as t");
		$this->db->join("training_course as c","c.course_id = t.course_id","inner");
		$this->db->join("training_session_attendance_type as a","a.id = t.attendance_id","inner");
		$this->db->join("training_session_delivery_method as d","d.id = t.delivery_id","inner");
		$query = $this->db->get();
		return $query->result();
	}

	public function get_training_session_data_by_id($id){
		$this->db->select("t.session_id as session_id,
						   t.course_id as course_id,
						   t.employee as employee,
						   t.session_name as session_name,
						   t.attendance_id as attendance_id,
						   t.delivery_id as delivery_id,
						   t.scheduled_time as scheduled_time,
						   t.details as details,
						   c.course_id as course_id,
						   c.name as name,
						   a.id as id,
						   a.attendance_name as attendance_name,
						   d.id as id,
						   d.delivery_name as delivery_name,
						   e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name
		                   ");
		$this->db->from("training_session as t");
		$this->db->join("training_course as c","c.course_id = t.course_id","inner");
		$this->db->join("training_session_attendance_type as a","a.id = t.attendance_id","inner");
		$this->db->join("training_session_delivery_method as d","d.id = t.delivery_id","inner");
		$this->db->join("employees as e","e.id = t.employee","inner");
		$this->db->where("t.session_id",$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_course(){ // from training_course table 
		$this->db->select("course_id,name");
		$this->db->from("training_course");
		$query = $this->db->get();
		return $query->result();
	}
	public function get_attendance(){ // from training_session_attendance_type table 
		$this->db->select("*");
		$this->db->from("training_session_attendance_type");
		$query = $this->db->get();
		return $query->result();
	}

	public function get_delivery(){ // from training_session_delivery_method table 
		$this->db->select("*");
		$this->db->from("training_session_delivery_method");
		$query = $this->db->get();
		return $query->result();
	}


	public function insert_training_session_data($data){
		$this->db->insert("training_session",$data);
		return $this->db->insert_id();
	}

	public function update_training_session_data($data,$id){
		$this->db->where("session_id",$id);
		return $this->db->update("training_session",$data);
	}	

	public function delete_training_session_data($id){
		$this->db->where("session_id",$id);
		return $this->db->delete("training_session");
	}

//-------------------------- end training_session area -----------------------------------------

//-------------------------- start employee training session area ------------------------------

	public function get_all_employee_training_session_data(){
		$this->db->select("e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   et.et_id as et_id,
						   et.course_id as course_id,
						   et.employee_id as employee_id,
						   c.course_id as course_id,
						   c.name as name
		                   ");
		$this->db->from("employeetraining as et");
		$this->db->join("training_course as c","c.course_id = et.course_id","inner");
		$this->db->join("employees as e","e.id = et.employee_id","inner");
		$query = $this->db->get();
		return $query->result();
	}

	public function get_employee_training_session_data_by_id($id){
		$this->db->select("e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   et.et_id as et_id,
						   et.course_id as course_id,
						   et.employee_id as employee_id,
						   c.course_id as course_id,
						   c.name as name
		                   ");
		$this->db->from("employeetraining as et");
		$this->db->join("training_course as c","c.course_id = et.course_id","inner");
		$this->db->join("employees as e","e.id = et.employee_id","inner");
		$this->db->where("et.et_id",$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_employee(){ // from employees table 
		$this->db->select("id,first_name,middle_name,last_name");
		$this->db->from("employees");
		$query = $this->db->get();
		return $query->result();
	}
	
	public function insert_employee_training_session_data($data){
		$this->db->insert("employeetraining",$data);
		return $this->db->insert_id();
	}

	public function update_employee_training_session_data($data,$id){
		$this->db->where("et_id",$id);
		return $this->db->update("employeetraining",$data);
	}	

	public function delete_employee_training_session_data($id){
		$this->db->where("et_id",$id);
		return $this->db->delete("employeetraining");
	}

//-------------------------- end employee training session area -----------------------------------------
}