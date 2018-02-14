<?php

class Company_model extends CI_Model {

    public function get_all_data($limit = NULL, $offset = NULL) {

        $this->db->from('company AS BC');
        $this->db->select('
            BC.*,
            C.CompanyName AS parent_company,
            Z.ZoneName AS zone_name
        ');
        $this->db->join('company AS C', 'C.CompanyID = BC.ParentCompanyID', 'LEFT');
        $this->db->join('zone AS Z', 'Z.ZoneID = BC.ZoneID', 'LEFT');
        
        if ($limit != NULL) {
            $this->db->limit($limit, $offset);
        }
        $this->db->order_by('BC.ParentCompanyID', 'ASC');
        $this->db->order_by('BC.CompanyName', 'ASC');
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_data_by_id($mid) {
        $this->db->from('company');
        $this->db->where("CompanyID", $mid);
        $query = $this->db->get()->row();
        return $query;
    }

    public function insert_data($data) {
        $this->db->insert('company', $data);
        return $this->db->insert_id();
    }

    public function update_data($data, $mid) {
        $this->db->where('CompanyID', $mid);
        return $this->db->update('company', $data);
    }
    
    //parent company
    public function getTreeCategory($parent, $level = 0, $parent_id = NULL) {
        $this->db->from('company');
        $this->db->select('CompanyID, CompanyName');
        $this->db->where('ParentCompanyID', $parent);
        $query = $this->db->get()->result_array();
        
        foreach ($query as $info) {
            
            $status = ($parent_id == $info['CompanyID']) ? 'selected' : '';
            echo "<option value='" . $info['CompanyID'] . "'" . " $status>" . str_repeat('---', $level) . " &rsaquo;" . $info['CompanyName'] . "</option>";

            $this->getTreeCategory($info['CompanyID'], $level + 1, $parent_id);
        }
    } 
    
    
    

}
