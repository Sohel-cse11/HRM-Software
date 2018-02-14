<?php

class Offtime_model extends CI_Model {

    public function get_all_data($limit = NULL, $offset = NULL) {

        $this->db->from('officetiming AS OT');
        $this->db->select('
            OT.*,
            DT.Description AS daytype_name
        ');
        
        $this->db->join('daytype AS DT', 'DT.DayTypeID = OT.DayTypeId', 'LEFT');
        
        if ($limit != NULL) {
            $this->db->limit($limit, $offset);
        }
        $this->db->order_by('OT.OfficeTimingID', 'ASC');
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_data_by_id($mid) {
        
        $this->db->from('officetiming AS OT');
        $this->db->select('
            OT.*,
            DT.Description AS daytype_name
        ');
        
        $this->db->join('daytype AS DT', 'DT.DayTypeID = OT.DayTypeId', 'LEFT');
        
        $this->db->where("OT.OfficeTimingID", $mid);
        $query = $this->db->get()->row();
        return $query;
    }

    public function insert_data($data) {
        $this->db->insert('officetiming', $data);
        return $this->db->insert_id();
    }

    public function update_data($data, $mid) {
        $this->db->where('OfficeTimingID', $mid);
        return $this->db->update('officetiming', $data);
    }

    public function check_day_type_existance($day_type_id, $id){
        
        $this->db->where('DayTypeId', $day_type_id);
        $this->db->where_not_in('OfficeTimingID', $id);

        $query = $this->db->get('officetiming');
        $norows = $query->num_rows();
        if ($norows > 0)
        {
            return false;
        } 
        else
        {
            return true;
        }
    }
}
