<?php

class Expense_model extends CI_Model{

//-------------------------- start category area -----------------------------------------

	public function get_all_category_data(){
		$this->db->select('*');
		$this->db->from('expensescategories');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_category_data_by_id($id){
		$this->db->select('*');
		$this->db->from('expensescategories');
		$this->db->where("id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_category_data($data){
		$this->db->insert("expensescategories",$data);
		return $this->db->insert_id();
	}

	public function update_category_data($data,$id){
		$this->db->where("id",$id);
		return $this->db->update("expensescategories",$data);
	}

	public function delete_category_data($id){
		$this->db->where("id",$id);
		return $this->db->delete("expensescategories");
	}
//-------------------------- end category area -----------------------------------------

//-------------------------- start payment method area -----------------------------------------

	public function get_all_method_data(){
		$this->db->select('*');
		$this->db->from('expensespaymentmethods');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_method_data_by_id($id){
		$this->db->select('*');
		$this->db->from('expensespaymentmethods');
		$this->db->where("id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_method_data($data){
		$this->db->insert("expensespaymentmethods",$data);
		return $this->db->insert_id();
	}

	public function update_method_data($data,$id){
		$this->db->where("id",$id);
		return $this->db->update("expensespaymentmethods",$data);
	}

	public function delete_method_data($id){
		$this->db->where("id",$id);
		return $this->db->delete("expensespaymentmethods");
	}
//-------------------------- end payment method area -----------------------------------------

//-------------------------- start employee expenses area -----------------------------------------

	public function get_all_employee_expense_data(){
		$this->db->select('e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   c.id as id,
						   c.category_name as category_name,
						   m.id as id,
						   m.method_name as method_name,
						   ee.ee_id as ee_id,
						   ee.employee as employee,
						   ee.expense_date as expense_date,
						   ee.payment_method as payment_method,
						   ee.transaction_no as transaction_no,
						   ee.payee as payee,
						   ee.category as category,
						   ee.notes as notes,
						   ee.amount as amount,
						   ee.currency as currency,
						   ee.status as status,
						   t.id as id,
						   t.code as code
						   ');
		$this->db->from('employeeexpenses as ee');
		$this->db->join("expensescategories as c","c.id=ee.category","inner");
		$this->db->join("expensespaymentmethods as m","m.id=ee.payment_method","inner");
		$this->db->join("currencytypes as t","t.id=ee.currency","inner");
		$this->db->join("employees as e","e.id=ee.employee","inner");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_employee_expense_data_by_id($id){
		$this->db->select('e.id as id,
						   e.first_name as first_name,
						   e.middle_name as middle_name,
						   e.last_name as last_name,
						   c.id as id,
						   c.category_name as category_name,
						   m.id as id,
						   m.method_name as method_name,
						   ee.ee_id as ee_id,
						   ee.employee as employee,
						   ee.expense_date as expense_date,
						   ee.payment_method as payment_method,
						   ee.transaction_no as transaction_no,
						   ee.payee as payee,
						   ee.category as category,
						   ee.notes as notes,
						   ee.amount as amount,
						   ee.currency as currency,
						   ee.status as status,
						   t.id as id,
						   t.code as code
						   ');
		$this->db->from('employeeexpenses as ee');
		$this->db->join("expensescategories as c","c.id=ee.category","inner");
		$this->db->join("expensespaymentmethods as m","m.id=ee.payment_method","inner");
		$this->db->join("employees as e","e.id=ee.employee","inner");
		$this->db->join("currencytypes as t","t.id=ee.currency","inner");
		$this->db->where("ee.ee_id",$id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function insert_employee_expense_data($data){
		$this->db->insert("employeeexpenses",$data);
		return $this->db->insert_id();
	}

	public function update_employee_expense_data($data,$id){
		$this->db->where("ee_id",$id);
		return $this->db->update("employeeexpenses",$data);
	}

	public function delete_employee_expense_data($id){
		$this->db->where("ee_id",$id);
		return $this->db->delete("employeeexpenses");
	}

	public function get_employee(){
		$this->db->select("*");
		$this->db->from("employees");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_method(){
		$this->db->select("*");
		$this->db->from("expensespaymentmethods");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_category(){
		$this->db->select("*");
		$this->db->from("expensescategories");
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_currency(){
		$this->db->select("*");
		$this->db->from("currencytypes");
		$query = $this->db->get()->result();
		return $query;
	}

//-------------------------- end employee expenses area -----------------------------------------

}