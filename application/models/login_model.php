<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
class Login_model extends CI_Model
{
	
	public function index($email,$password) {
	    $this->db->select("p.profileimage as profileimage,
	    	           p.id as id,
	    	           u.id as id,
	    	           u.user_roles as user_roles,
	    	           u.user_level as user_level,
	    	           u.username as username,
	    	           u.email as email,
	    	           u.password as password,
	    	           u.user_status
	    	           ");
	    $this->db->from('users as u');
	    $this->db->join("employees as p","p.id=u.id","inner");
             $this->db->where('u.email',$email );
             $this->db->where('u.password',$password );
             $this->db->where('u.user_status',1 );
             $query = $this->db->get()->row();
             $num_rows = $this->db->count_all_results();
		 
		if($num_rows > 0) {
		   return $query;
		 
		} else{
		   return false;
		 }
         		 
	}
}