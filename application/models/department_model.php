<?php

class Department_model extends CI_Model {

    public function get_all_data($limit = NULL, $offset = NULL) {

        $this->db->from('department'); 
        $this->db->where("DepartmentName !=", "(none)");
        
        if ($limit != NULL) {
            $this->db->limit($limit, $offset);
        }
        $this->db->order_by('DepartmentName', 'ASC');
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_data_by_id($mid) {
        $this->db->from('department');
        $this->db->where("DepartmentID", $mid);
        $query = $this->db->get()->row();
        return $query;
    }

    public function insert_data($data) {
        $this->db->insert('department', $data);
        return $this->db->insert_id();
    }

    public function update_data($data, $mid) {
        $this->db->where('DepartmentID', $mid);
        return $this->db->update('department', $data);
    }

}
