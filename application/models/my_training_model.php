<?php

class My_training_model extends CI_Model {

	public function get_all_data($id){
		$this->db->select("t.session_id as session_id,
						   t.course_id as course_id,
						   t.employee as employee,
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
		$this->db->where("t.employee",$id);
		$query = $this->db->get();
		return $query->result();
	}

}

