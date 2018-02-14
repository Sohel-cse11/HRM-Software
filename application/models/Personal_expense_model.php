<?php
class Personal_expense_model extends CI_Model {

//-------------------------- start employee area -----------------------------------------
	public function get_all_data($id){
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
		$this->db->where("e.id",$id);
		$query = $this->db->get()->result();
		return $query;
	}

//-------------------------------------salary----------------------------------------------

	public function personal_salary($id){
		$this->db->select("e.employee as employee,
						   e.amount as amount,
						   e.component as component,
						   c.sc_id as sc_id,
						   c.name as name,
						   ee.id as id,
						   ee.first_name as first_name,
						   ee.middle_name as middle_name,
						   ee.last_name as last_name,
						   ");
		$this->db->from("employeesalary as e");
		$this->db->join("salarycomponent as c","c.sc_id=e.component","inner");
		$this->db->join("employees as ee","ee.id=e.employee","inner");
		$this->db->where("e.employee",$id);
		$query = $this->db->get()->result();
		return $query;
	}

}