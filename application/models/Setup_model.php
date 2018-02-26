<?php
class Setup_model extends CI_model {

// ========================================================================
// ==========================  E M P L O Y E E  ===========================
// ========================================================================
  public function fetch_employee() {
    $this->db->select('
                      ug_r_employee.emp_id,
                      ug_r_employee.emp_lastname,
                      ug_r_employee.emp_firstname,
                      ug_r_employee.emp_middlename,
                      ug_r_employee.emp_contact_no,
                      ug_r_employee.emp_email,
                      ug_r_employee.emp_address,
                      ug_r_departments.department_name,
                      ug_r_employee.emp_active_tag,
                      ');
    $this->db->from('ug_r_employee');
    $this->db->join('ug_r_departments', 'ug_r_departments.department_id = ug_r_employee.department_id');
    $this->db->where('ug_r_employee.emp_archive', 1);
    $this->db->order_by('ug_r_employee.emp_id', 'DESC');
    $qry = $this->db->get();

    return $qry;
  }

  public function fetch_department() {
    $qry = $this->db->get('ug_r_departments');
    return $qry;
  }

  public function insert_employee($data) {
    $this->db->insert('ug_r_employee', $data);
  }

  public function fetch_single_employee($id) {
    $this->db->where('emp_id', $id);
    $this->db->where('emp_archive', 1);
    $qry = $this->db->get('ug_r_employee');

    return $qry;
  }

  public function update_employee($data, $id) {
    $this->db->where('emp_id', $id);
    $this->db->update('ug_r_employee', $data);
  }

  public function delete_employee($data, $id) {
    $this->db->where('emp_id', $id);
    $this->db->update('ug_r_employee', $data);
  }

// ========================================================================
// ============================  R E C O R D  =============================
// ========================================================================
  public function fetch_name() {
    $this->db->where('emp_archive', 1);
    $qry = $this->db->get('ug_r_employee');

    return $qry;
  }

  public function insert_record($data) {
    $this->db->insert('ug_r_records', $data);
  }

  public function fetch_records() {
    $this->db->select('
                      ug_r_records.rec_id,
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
    $this->db->order_by('rec_date', 'DESC');
    $qry = $this->db->get();

    return $qry;
  }

  public function record_view($id) {
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

  public function update_record($data, $id) {
    $this->db->where('rec_id', $id);
    $this->db->where('ug_r_records.rec_archive', 1);
    $this->db->update('ug_r_records', $data);
  }

  public function delete_record($data, $id) {
    $this->db->where('rec_id', $id);
    $this->db->update('ug_r_records', $data);
  }

// ========================================================================
// ==========================  U S E R R O L E  ===========================
// ========================================================================
  public function fetch_user_role() {
    $qry = $this->db->get('ug_r_user_roles');

    return $qry;
  }

  public function insert_role($data) {
    $this->db->insert('ug_r_user_roles', $data);
  }

  public function single_role($id) {
    $this->db->where('role_id', $id);
    $qry = $this->db->get('ug_r_user_roles');

    return $qry;
  }

  public function update_role($data, $id) {
    $this->db->where('role_id', $id);
    $this->db->update('ug_r_user_roles', $data);
  }

  public function delete_role($id) {
    $this->db->where('role_id', $id);
    $this->db->delete('ug_r_user_roles');
  }

// ========================================================================
// ========================  D E P A R T M E N T  =========================
// ========================================================================
  public function fetch_departments() {
    $this->db->order_by('department_id', 'DESC');
    $qry = $this->db->get('ug_r_departments');
    return $qry;
  }

  public function insert_department($data) {
    $this->db->insert('ug_r_departments', $data);
  }

  public function single_department($id) {
    $this->db->where('department_id', $id);
    $qry = $this->db->get('ug_r_departments');
    return $qry;
  }

  public function update_department($data, $id) {
    $this->db->where('department_id', $id);
    $this->db->update('ug_r_departments', $data);
  }

  public function delete_department($id) {
    $this->db->where('department_id', $id);
    $this->db->delete('ug_r_departments');
  }

// ========================================================================
// ==============================  U S E R  ===============================
// ========================================================================
  public function fetch_user() {
    $this->db->select('
                      ug_r_users.user_id,
                      ug_r_users.user_name,
                      ug_r_users.user_password,
                      ug_r_employee.emp_lastname,
                      ug_r_employee.emp_firstname,
                      ug_r_employee.emp_middlename,
                      ug_r_user_roles.role_name,
                      ug_r_users.user_active_tag,
                      ');
    $this->db->from('ug_r_users');
    $this->db->join('ug_r_employee', 'ug_r_employee.emp_id = ug_r_users.emp_id');
    $this->db->join('ug_r_user_roles', 'ug_r_user_roles.role_id = ug_r_users.role_id');
    $this->db->order_by('ug_r_users.user_id', 'DESC');
    $qry = $this->db->get();

    return $qry;
  }

  public function insert_user($data) {
    $this->db->insert('ug_r_users', $data);
  }

  public function fetch_single_user($id) {
    $this->db->where('user_id', $id);
    $qry = $this->db->get('ug_r_users');

    return $qry;
  }

  public function update_user($data, $id) {
    $this->db->where('user_id', $id);
    $this->db->update('ug_r_users', $data);
  }

  public function delete_user($id) {
    $this->db->where('user_id', $id);
    $this->db->delete('ug_r_users');
  }


}
?>
