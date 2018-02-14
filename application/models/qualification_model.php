<?php

class Qualification_model extends CI_Model{

//-------------------------- start skills area -----------------------------------------

	public function get_all_skills_data(){
		$this->db->select('*');
		$this->db->from('skills');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_skill_data_by_id($id){
		$this->db->select('*');
		$this->db->from('skills');
		$this->db->where("id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_skill_data($data){
		$this->db->insert("skills",$data);
		return $this->db->insert_id();
	}

	public function update_skill_data($data,$id){
		$this->db->where("id",$id);
		return $this->db->update("skills",$data);
	}

	public function delete_skill_data($id){
		$this->db->where("id",$id);
		return $this->db->delete("skills");
	}
//-------------------------- start skills area -----------------------------------------


//-------------------------- start education area -----------------------------------------

	public function get_all_education_data(){
		$this->db->select('*');
		$this->db->from('educations');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_education_data_by_id($id){
		$this->db->select('*');
		$this->db->from('educations');
		$this->db->where("id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_education_data($data){
		$this->db->insert("educations",$data);
		return $this->db->insert_id();
	}

	public function update_education_data($data,$id){
		$this->db->where("id",$id);
		return $this->db->update("educations",$data);
	}

	public function delete_education_data($id){
		$this->db->where("id",$id);
		return $this->db->delete("educations");
	}
//-------------------------- end education area -----------------------------------------

//-------------------------- start certification area -----------------------------------------

	public function get_all_certification_data(){
		$this->db->select('*');
		$this->db->from('certifications');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_certification_data_by_id($id){
		$this->db->select('*');
		$this->db->from('certifications');
		$this->db->where("id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_certification_data($data){
		$this->db->insert("certifications",$data);
		return $this->db->insert_id();
	}

	public function update_certification_data($data,$id){
		$this->db->where("id",$id);
		return $this->db->update("certifications",$data);
	}

	public function delete_certification_data($id){
		$this->db->where("id",$id);
		return $this->db->delete("certifications");
	}
//-------------------------- end education area -----------------------------------------

//-------------------------- start language area -----------------------------------------

	public function get_all_language_data(){
		$this->db->select('*');
		$this->db->from('languages');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_language_data_by_id($id){
		$this->db->select('*');
		$this->db->from('languages');
		$this->db->where("id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_language_data($data){
		$this->db->insert("languages",$data);
		return $this->db->insert_id();
	}

	public function update_language_data($data,$id){
		$this->db->where("id",$id);
		return $this->db->update("languages",$data);
	}

	public function delete_language_data($id){
		$this->db->where("id",$id);
		return $this->db->delete("languages");
	}
//-------------------------- end language area -----------------------------------------


}