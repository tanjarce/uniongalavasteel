<?php
class Login_model extends CI_model{

  function can_login($user, $pass){

    $this->db->where('ug_r_users.user_name', $user);
    // $this->db->where('ug_r_users.user_password', $pass);
    $this->db->where('ug_r_users.user_active_tag', '1');
    $hash = $this->db->get('ug_r_users')->row('user_password');
    
    return password_verify($pass, $hash);
  }

  function fetch_user_data($user){
    $this->db->select('
                      ug_r_users.user_name,
                      ug_r_users.emp_id,
                      ug_r_users.role_id,
                      ug_r_employee.emp_firstname,
                      ug_r_employee.emp_lastname,
                      ');
    $this->db->from('ug_r_users');
    $this->db->join('ug_r_employee', 'ug_r_employee.emp_id = ug_r_users.emp_id');
    $this->db->where('user_name', $user);
    // $this->db->where('user_password', $pass);
    $this->db->where('ug_r_users.user_active_tag', '1');
    $qry = $this->db->get()->row_array();

    // $qry = $this->db->get('ug_r_users');

    return $qry;
  }


}

?>
