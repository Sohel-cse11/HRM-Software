<?php

class Daytype_model extends CI_Model {

    public function get_all_data($limit = NULL, $offset = NULL) {

        $this->db->from('daytype');
//        $this->db->where("status !=", 13);
        
        if ($limit != NULL) {
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_data_by_id($mid) {
        $this->db->from('daytype');
        $this->db->where("DayTypeID", $mid);
        $query = $this->db->get()->row();
        return $query;
    }

    public function insert_data($data) {
        $this->db->insert('daytype', $data);
        return $this->db->insert_id();
    }

    public function update_data($data, $mid) {
        $this->db->where('DayTypeID', $mid);
        return $this->db->update('daytype', $data);
    }

    public function get_all_daytype_list() {

        $sql = "SELECT * FROM daytype WHERE DayTypeID NOT IN (SELECT DayTypeId FROM officetiming)";
        $query = $this->db->query($sql)->result();
        return $query;
    }
    
}
