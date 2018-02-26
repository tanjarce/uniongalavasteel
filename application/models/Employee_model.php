<?php
class Employee_model extends CI_model {

  public function fetch_employee() {
    //  $qry = $this->db->get('ug_r_employee');
    //  return $qry;
    $this->db->select('
                      ug_r_employee.emp_id,
                      ug_r_employee.emp_lastname,
                      ug_r_employee.emp_firstname,
                      ug_r_employee.emp_middlename,
                      ug_r_departments.department_name,
                      ');
    $this->db->from('ug_r_employee');
    $this->db->join('ug_r_departments', 'ug_r_departments.department_id = ug_r_employee.department_id');
    $this->db->where('ug_r_employee.emp_archive', 1);
    $this->db->order_by('ug_r_employee.emp_id', 'DESC');
    $qry = $this->db->get();

    return $qry;
  }

  public function fetch_record_list($id) {
    $this->db->select('
                      ug_r_records.rec_id,
                      ug_r_records.rec_sender,
                      ug_r_records.rec_subject,
                      ug_r_records.rec_date,
                      ug_r_employee.emp_lastname,
                      ug_r_employee.emp_firstname,
                      ug_r_employee.emp_middlename,
                      ');
    $this->db->from('ug_r_records');
    $this->db->join('ug_r_employee', 'ug_r_employee.emp_id = ug_r_records.rec_sender');
    $this->db->where('ug_r_employee.emp_archive', 1);
    $this->db->where('ug_r_records.rec_archive', 1);
    $this->db->order_by('ug_r_records.rec_id', 'DESC');
    $this->db->where('ug_r_records.emp_id', $id);

    $qry = $this->db->get();

    return $qry;
    // return $qry = $this->db->get('ug_r_records');
  }

  public function fetch_record($id) {
    $this->db->select('
                      ug_r_records.rec_id,
                      ug_r_records.emp_id,
                      ug_r_records.rec_sender,
                      ug_r_records.rec_subject,
                      ug_r_records.rec_comment,
                      ug_r_records.rec_date,
                      ug_r_employee.emp_lastname,
                      ug_r_employee.emp_firstname,
                      ug_r_employee.emp_middlename,
                      ');
    $this->db->from('ug_r_records');
    $this->db->join('ug_r_employee', 'ug_r_employee.emp_id = ug_r_records.emp_id');
    $this->db->where('ug_r_employee.emp_archive', 1);
    $this->db->where('ug_r_records.rec_archive', 1);
    $this->db->where('ug_r_records.rec_id', $id);

    $qry = $this->db->get();

    return $qry;
  }

  public function fetch_name() {
    $this->db->where('emp_archive', 1);
    $qry = $this->db->get('ug_r_employee');

    return $qry;
  }

  public function fetch_info() {

  }


}
?>
