<?php
class Salary_model extends CI_Model {

//-------------------------- start salary components type area -----------------------------------------
	public function get_all_data(){
		$this->db->select('*');
		$this->db->from('salarycomponenttype');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_data_by_id($id){
		$this->db->select('*');
		$this->db->from('salarycomponenttype');
		$this->db->where("sct_id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_data($data){
		$this->db->insert("salarycomponenttype",$data);
		return $this->db->insert_id();
	}

	public function update_data($data,$id){
		$this->db->where("sct_id",$id);
		return $this->db->update("salarycomponenttype",$data);
	}

	public function delete_data($id){
		$this->db->where("sct_id",$id);
		return $this->db->delete("salarycomponenttype");
	}
//-------------------------- end salary components type area -----------------------------------------

//-------------------------- start salary components area -----------------------------------------
	public function get_salary_component_all_data(){
		$this->db->select('sct.sct_name as sct_name,
						   sct.sct_id as sct_id,
						   sc.sc_id as sc_id,
						   sc.name as name,
						   sc.details as details,
						   sc.componentType as componentType
						   ');
		$this->db->from('salarycomponent as sc');
		$this->db->join("salarycomponenttype as sct","sct.sct_id=sc.componentType","inner");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_salary_component_data_by_id($id){
		$this->db->select('sct.sct_name as sct_name,
						   sct.sct_id as sct_id,
						   sc.sc_id as sc_id,
						   sc.name as name,
						   sc.details as details,
						   sc.componentType as componentType
						   ');
		$this->db->from('salarycomponent as sc');
		$this->db->join("salarycomponenttype as sct","sct.sct_id=sc.componentType","inner");
		$this->db->where("sc.sc_id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_salary_component_data($data){
		$this->db->insert("salarycomponent",$data);
		return $this->db->insert_id();
	}

	public function update_salary_component_data($data,$id){
		$this->db->where("sc_id",$id);
		return $this->db->update("salarycomponent",$data);
	}

	public function delete_salary_component_data($id){
		$this->db->where("sc_id",$id);
		return $this->db->delete("salarycomponent");
	}
//-------------------------- end salary components area -----------------------------------------

//-------------------------- start employee salary components area ---------------------------------

	public function get_employee_salary_component_all_data(){
		$this->db->select('e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   es.employee as employee,
						   es.es_id as es_id,
						   es.component as component,
						   es.amount as amount,
						   es.details as details,
						   sc.sc_id as sc_id,
						   sc.name as name
						   ');
		$this->db->from('employeesalary as es');
		$this->db->join("salarycomponent as sc","sc.sc_id=es.component","inner");
		$this->db->join("employees as e","e.id=es.employee","inner");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_employee_salary_component_data_by_id($id){
		$this->db->select('e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   es.employee as employee,
						   es.es_id as es_id,
						   es.component as component,
						   es.amount as amount,
						   es.details as details,
						   sc.sc_id as sc_id,
						   sc.name as name
						   ');
		$this->db->from('employeesalary as es');
		$this->db->join("salarycomponent as sc","sc.sc_id=es.component","inner");
		$this->db->join("employees as e","e.id=es.employee","inner");
		$this->db->where("es.es_id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function get_employee(){
		$this->db->select('*');
		$this->db->from('employees');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_component(){
		$this->db->select('*');
		$this->db->from('salarycomponent');
		$query = $this->db->get()->result();
		return $query;
	}

	public function insert_employee_salary_component_data($data){
		$this->db->insert("employeesalary",$data);
		return $this->db->insert_id();
	}

	public function update_employee_salary_component_data($data,$id){
		$this->db->where("es_id",$id);
		return $this->db->update("employeesalary",$data);
	}

	public function delete_employee_salary_component_data($id){
		$this->db->where("es_id",$id);
		return $this->db->delete("employeesalary");
	}
//-------------------------- end employee salary components area -----------------------------------------
}
