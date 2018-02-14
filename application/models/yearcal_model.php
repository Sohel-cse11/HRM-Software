<?php

class Yearcal_model extends CI_Model {

    public function get_all_data($limit = NULL, $offset = NULL) {
        
        $this->db->select('YD.*, DT.Description AS daytype_desc, DT.Color AS Color');
        $this->db->from('yearday AS YD');
        $this->db->join('daytype AS DT', 'DT.DayTypeID = YD.DayTypeID', 'LEFT');
        
        $this->db->order_by('YD.YearDay', 'ASC');
        
        if ($limit != NULL) {
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_data_by_id($id) {
        $this->db->from('yearday');
        $this->db->where("YearDayID", $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function insert_all_holiday($data) {
        return $this->db->insert_batch('yearday', $data);
    }

    public function update_data($data, $mid) {
        $this->db->where('YearDayID', $mid);
        return $this->db->update('yearday', $data);
    }

    public function get_all_daytype($limit = NULL, $offset = NULL) {
        $this->db->from('daytype');

        if ($limit != NULL) {
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_all_exist_year_in_yearcalendar() {
        $sql = "SELECT 
                    DATE_FORMAT(YearDay, '%Y') AS year 
                FROM 
                    (yearday) 
                GROUP BY 
                    DATE_FORMAT(YearDay, '%Y')";
        
        return $this->db->query($sql)->result();
    }
}
