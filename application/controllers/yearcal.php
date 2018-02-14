<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Yearcal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        if (!$this->session->userdata('admin_logged')) {
            redirect('login');
        }
        
        $this->load->model('Yearcal_model');
        
        //$this->output->enable_profiler();
    }
 
    public function index()
    {
        $data['content'] = $this->Yearcal_model->get_all_data();
        $this->load->view('yearcal/index', $data);
    }

    public function add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('year', 'Select Year', 'trim|required|xss_clean');
        $this->form_validation->set_rules('values', 'Week End', 'required|xss_clean');

        if ($this->form_validation->run() == FALSE)
        {
            $data['all_exist_year'] = $this->Yearcal_model->get_all_exist_year_in_yearcalendar();
            $this->load->view('yearcal/add', $data);
        }
        else
        {
            $year = $this->input->post('year');
            $beginning_date = $year - 1 . "-12-31";
            $ending_date = $year . "-12-31";
            $week_ends = $this->input->post('values');
            
            $data['year_calender_list'] = $this->createDateRangeArray($beginning_date, $ending_date, $week_ends);

            $this->load->view('yearcal/add_week_ends', $data);
        }

    }

    public function edit($id)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('DayTypeID', 'Holyday Type', 'trim|required|xss_clean');
        
        $ds['content'] = $this->Yearcal_model->get_data_by_id($id);
        $ds['daytype_list'] = $this->Yearcal_model->get_all_daytype();
        
        if ($this->form_validation->run() == FALSE)
        {   
            $this->load->view('yearcal/edit', $ds);
        }
        else
        {
            
            if (strtotime($ds['content']->YearDay) < strtotime(date('Y-m-d')))
            {
                $this->session->set_flashdata('error', 'You can\'t modify the past day.');
                redirect('yearcal/edit/'. $id);
            }

            $data['DayTypeID'] = $this->input->post('DayTypeID');
            $data['IsHoliday'] = $this->input->post('IsHoliday');

            $update = $this->Yearcal_model->update_data($data, $id);

            if ($update) {
                $this->session->set_flashdata('success', 'Year Calendar updated successfully.');
                redirect('yearcal/index');
            } else {
                $this->session->set_flashdata('error', 'An error occured. Please try again later.');
                redirect('yearcal/index');
            }
        }

    }
    
    public function add_week_ends()
    {
        if($this->input->post())
        {
            $YearDay = $this->input->post('YearDay');
            $DayName = $this->input->post('DayName');
            $IsHoliday = $this->input->post('IsHoliday');
            $HolidayTypeID = $this->input->post('HolidayTypeID');
            
            $holiday_array = $this->input->post('is_holiday');
            
            // If holiday is empty then add only week ends
            if(empty($holiday_array))
            {
                $list = array();
                for ($i = 0; $i < count($YearDay); $i++) {
                    $list[$i] = array(
                        'DayTypeID' => $HolidayTypeID[$i],
                        'YearDay' => $YearDay[$i],
                        'YearDate' => str_replace("-", "", $YearDay[$i]),
                        'IsHoliday' => $IsHoliday[$i],
                        'Remarks' => $DayName[$i],
                    );
                }

                $this->Yearcal_model->insert_all_holiday($list);
                
                $this->session->set_flashdata("success", "Year Calendar added successfully.");
                redirect('yearcal/index');
            }

            
            //
            $list = array();
            for ($i = 0; $i < count($YearDay); $i++) {
                
                $check_is_holiday = $this->is_val_exists($YearDay[$i], $holiday_array);
                
                $list[$i] = array(
                    'YearDay' => $YearDay[$i],
                    'DayName' => $DayName[$i],
                    'IsHoliday' => $IsHoliday[$i],
                    'HolidayTypeID' => ($check_is_holiday) ? 3 : $HolidayTypeID[$i],
                );
            }
            
            $data['holiday_list'] = $list;
            $data['daytype_list'] = $this->Yearcal_model->get_all_daytype();
            
            $this->load->view('yearcal/add_holiday', $data);
        }
        else
        {
            redirect('yearcal/add');
        }
    }
    
    public function add_holiday()
    {
        if($this->input->post())
        {
            $YearDay = $this->input->post('YearDay');
            $DayName = $this->input->post('DayName');
            $IsHoliday = $this->input->post('IsHoliday');
            $HolidayTypeID = $this->input->post('HolidayTypeID');
            
            $HolidayTypeDate = $this->input->post('HolidayTypeDate');
            $HolidayTypeDateID = $this->input->post('HolidayTypeDateID');
            
            // Holy Day Type array
            $DayTypeList = $this->Yearcal_model->get_all_daytype();
            if (!empty($DayTypeList)) {
                foreach ($DayTypeList as $val) {
                    $IsHolidayArray[$val->DayTypeID] = $val->IsHolyDay;
                }
            }
            
            $list = array();
            for ($i = 0; $i < count($YearDay); $i++) {
                
                $key = array_search($YearDay[$i], $HolidayTypeDate);
                $DayTypeID = !empty($key) ? $HolidayTypeDateID[$key] : $HolidayTypeID[$i];
                
                $list[$i] = array(
                    'DayTypeID' => $DayTypeID,
                    'YearDay' => $YearDay[$i],
                    'YearDate' => str_replace("-", "", $YearDay[$i]),
                    'IsHoliday' => !empty($IsHolidayArray) ? $IsHolidayArray[$DayTypeID] : $IsHoliday[$i],
                    'Remarks' => $DayName[$i],
                );
            }
            
            // dd($list); exit();
            if(!empty($list)) {
                $this->Yearcal_model->insert_all_holiday($list);
                
                $this->session->set_flashdata("success", "Year Calendar added successfully.");
                redirect('yearcal/index');
                
            } else {
                
                $this->session->set_flashdata("success", "An error occured. Please add year calendar correctly.");
                redirect('yearcal/add');
            }
        }
        else
        {
            redirect('yearcal/add');
        }
    }

    function createDateRangeArray($strDateFrom, $strDateTo, $weekEnds) 
    {
        // takes two dates formatted as YYYY-MM-DD and creates an
        // inclusive array of the dates between the from and to dates.
        // could test validity of dates here but I'm already doing
        // that in the main script

        $aryRange = array();

        $iDateFrom = mktime(1, 0, 0, substr($strDateFrom, 5, 2), substr($strDateFrom, 8, 2), substr($strDateFrom, 0, 4));
        $iDateTo = mktime(1, 0, 0, substr($strDateTo, 5, 2), substr($strDateTo, 8, 2), substr($strDateTo, 0, 4));

        $sl = 0;
        if ($iDateTo >= $iDateFrom)
        {   
            // Add the first element
            $aryRange[$sl]['YearDay'] = date('Y-m-d', $iDateFrom);
            $dayName = date('l', $iDateFrom);
            $aryRange[$sl]['DayName'] = $dayName;

            $checkWeekends = $this->is_val_exists($dayName, $weekEnds);
            $aryRange[$sl]['IsHoliday'] = ($checkWeekends) ? 1 : 0;
            $aryRange[$sl]['HolidayTypeID'] = ($checkWeekends) ? 2 : 1; // 2 = Week Ends; 1 = Regular Day

            while ($iDateFrom < $iDateTo)
            {
                $iDateFrom += 86400; // add 24 hours
                $aryRange[$sl]['YearDay'] = date('Y-m-d', $iDateFrom);
                $dayName = date('l', $iDateFrom);
                $aryRange[$sl]['DayName'] = $dayName;

                $checkWeekends = $this->is_val_exists($dayName, $weekEnds);
                $aryRange[$sl]['IsHoliday'] = ($checkWeekends) ? 1 : 0;
                $aryRange[$sl]['HolidayTypeID'] = ($checkWeekends) ? 2 : 1; // 2 = Week Ends; 1 = Regular Day

                $sl++;
            }
        }
        return $aryRange;
    }

    public function is_val_exists($value, $givenArray)
    {
        if (in_array($value, $givenArray)) {
            return true;
        }
        foreach ($givenArray as $element) {
            if (is_array($element) && is_val_exists($value, $element))
                return true;
        }
        return false;
    }

}
