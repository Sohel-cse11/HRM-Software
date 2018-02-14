 <?php
class Recruitment_model extends CI_Model {

//-------------------------- start employee type area -----------------------------------------
	
	public function get_all_data(){
		$this->db->select('*');	
		$this->db->from("recruit_employee_type");
		$query = $this->db->get()->result();
		return $query;
	}
	
	public function get_employee_type_data_by_id($id){
		$this->db->select('*');	
		$this->db->from("recruit_employee_type");
		$this->db->where("recruit_type_id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_data_employee_type($data){
		$this->db->insert("recruit_employee_type",$data);
		return $this->db->insert_id();
	}

	public function update_employee_type($data,$id){
		$this->db->where("recruit_type_id",$id);
		return $this->db->update("recruit_employee_type",$data);
	}	

	public function delete_employee_type($id){
		$this->db->where("recruit_type_id",$id);
		return $this->db->delete("recruit_employee_type");
	}

//-------------------------- end employee type area -----------------------------------------

//-------------------------- start experience area -----------------------------------------
	
	public function get_all_experience_level_data(){
		$this->db->select('*');	
		$this->db->from("recrui_experience_level");
		$query = $this->db->get()->result();
		return $query;
	}
	
	public function get_experience_level_by_id($id){
		$this->db->select('*');	
		$this->db->from("recrui_experience_level");
		$this->db->where("experience_id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_data_experience_level($data){
		$this->db->insert("recrui_experience_level",$data);
		return $this->db->insert_id();
	}

	public function update_experience_level($data,$id){
		$this->db->where("experience_id",$id);
		return $this->db->update("recrui_experience_level",$data);
	}	

	public function delete_experience_level($id){
		$this->db->where("experience_id",$id);
		return $this->db->delete("recrui_experience_level");
	}

//-------------------------- end experience area -----------------------------------------

//-------------------------- start Job Function area -----------------------------------------
	
	public function get_all_job_function_data(){
		$this->db->select('*');	
		$this->db->from("recrui_job_function");
		$query = $this->db->get()->result();
		return $query;
	}
	
	public function get_job_function_by_id($id){
		$this->db->select('*');	
		$this->db->from("recrui_job_function");
		$this->db->where("job_function_id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_data_job_function($data){
		$this->db->insert("recrui_job_function",$data);
		return $this->db->insert_id();
	}

	public function update_job_function($data,$id){
		$this->db->where("job_function_id",$id);
		return $this->db->update("recrui_job_function",$data);
	}	

	public function delete_job_function($id){
		$this->db->where("job_function_id",$id);
		return $this->db->delete("recrui_job_function");
	}

//-------------------------- start job function area -----------------------------------------


//-------------------------- start education_level area -----------------------------------------
	
	public function get_all_education_level_data(){
		$this->db->select('*');	
		$this->db->from("recruit_education_level");
		$query = $this->db->get()->result();
		return $query;
	}
	
	public function get_education_level_by_id($id){
		$this->db->select('*');	
		$this->db->from("recruit_education_level");
		$this->db->where("education_level_id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_data_education_level($data){
		$this->db->insert("recruit_education_level",$data);
		return $this->db->insert_id();
	}

	public function update_education_level($data,$id){
		$this->db->where("education_level_id",$id);
		return $this->db->update("recruit_education_level",$data);
	}	

	public function delete_education_level($id){
		$this->db->where("education_level_id",$id);
		return $this->db->delete("recruit_education_level");
	}

//-------------------------- end education_level area -----------------------------------------

//-------------------------- start benefits area -----------------------------------------
	
	public function get_all_benefit_data(){
		$this->db->select('*');	
		$this->db->from("recruit_benefits");
		$query = $this->db->get()->result();
		return $query;
	}
	
	public function get_benefit_by_id($id){
		$this->db->select('*');	
		$this->db->from("recruit_benefits");
		$this->db->where("benefit_id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_data_benefit($data){
		$this->db->insert("recruit_benefits",$data);
		return $this->db->insert_id();
	}

	public function update_benefit($data,$id){
		$this->db->where("benefit_id",$id);
		return $this->db->update("recruit_benefits",$data);
	}	

	public function delete_benefit($id){
		$this->db->where("benefit_id",$id);
		return $this->db->delete("recruit_benefits");
	}

//-------------------------- end benefits area -----------------------------------------

}