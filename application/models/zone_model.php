<?php

class Zone_model extends CI_Model {

    public function get_all_data($limit = NULL, $offset = NULL) {

        $this->db->from('zone AS Z');
        $this->db->select('
            Z.*,
            ZN.ZoneName AS parent_zone
        ');
        $this->db->join('zone AS ZN', 'ZN.ZoneID = Z.ParentZoneID', 'LEFT');
        
        if ($limit != NULL) {
            $this->db->limit($limit, $offset);
        }
        $this->db->where("Z.ZoneID !=", 1);
        $this->db->order_by('Z.ParentZoneID', 'ASC');
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_data_by_id($mid) {
        $this->db->from('zone');
        $this->db->where("ZoneID", $mid);
        $this->db->where("ZoneID !=", 1);
        $query = $this->db->get()->row();
        return $query;
    }

    public function insert_data($data) {
        $this->db->insert('zone', $data);
        return $this->db->insert_id();
    }

    public function update_data($data, $mid) {
        $this->db->where('ZoneID', $mid);
        return $this->db->update('zone', $data);
    }
    
    
    
    //parent zone work
    
   public function getTreeCategory($parent, $level = 0, $parent_id = NULL) {
        $this->db->from('zone');
        $this->db->select('ZoneID, ZoneName');
        $this->db->where('ParentZoneID', $parent);
        $query = $this->db->get()->result_array();
        
        foreach ($query as $info) {
            
            $status = ($parent_id == $info['ZoneID']) ? 'selected' : '';
            echo "<option value='" . $info['ZoneID'] . "'" . " $status>" . str_repeat('---', $level) . " &rsaquo;" . $info['ZoneName'] . "</option>";

            $this->getTreeCategory($info['ZoneID'], $level + 1, $parent_id);
        }
    } 
    
}
