<div class="nav">
  <a class="logo" href="<?php echo base_url(); ?>">
      <span class="logo-icon"></span>
      <span class="logo-text"></span>
  </a>
  <div class="menu">
      <div class="bar one"></div>
      <div class="bar two"></div>
      <div class="bar three"></div>
  </div>
  <div class="main-nav">
      <a href="<?php echo base_url(); ?>Employee">Employee</a>
      <a class="active" href="<?php echo base_url(); ?>Setup">Setting</a>
      <a href="<?php echo base_url(); ?>login/logout" class="user_logout">Logout</a>
  </div>
</div>
<div class="details_tab">
  <div class="tab">
    <ul>
        <li class="active"><a href="#">System</a></li>
        <li><a href="#">Account</a></li>
    </ul>
  </div>
</div>
<?php
if ($this->uri->segment(2) == 'employee_inserted') {
  echo "Employee Seccessfully Inserted";
}
if ($this->uri->segment(2) == 'employee_updated') {
  echo "Employee Seccessfully Updated";
}
if ($this->uri->segment(2) == 'employee_deleted') {
  echo "Employee Seccessfully Deleted";
}
if ($this->uri->segment(3) == '' &&
    $this->uri->segment(2) != 'employee' &&
    $this->uri->segment(2) != 'employee_inserted' &&
    $this->uri->segment(2) != 'employee_updated' &&
    $this->uri->segment(2) != 'employee_deleted' )  {
  echo "Error Occured, please try again.";
}
?>

<?php if(!isset($single_employee)) { ?>
<!-- =============================================================== -->
<!-- ========================  ADD EMPLOYEE  ======================= -->
<!-- =============================================================== -->
<div class="top_form">
<form action="<?php echo base_url(); ?>Setup/employee_validation" method="post">
  <input type="text" name="l_name" value="<?php echo $this->session->flashdata('err_lname'); ?>" placeholder="Last Name">
  <?php echo form_error('l_name'); ?>
  <input type="text" name="f_name" value="<?php echo $this->session->flashdata('err_fname'); ?>" placeholder="First Name">
  <?php echo form_error('f_name'); ?>
  <input type="text" name="m_name" size="1%" maxlength="1" value="<?php echo $this->session->flashdata('err_fname'); ?>" placeholder="M.I.">
  <input type="text" name="cp" size="8%" maxlength="10" minlength="10" value="<?php echo $this->session->flashdata('err_cp'); ?>" placeholder="Cellphone No.">
  <?php echo form_error('cp'); ?>
  <input type="text" name="email" value="<?php echo $this->session->flashdata('err_email'); ?>" placeholder="Email">
  <?php echo form_error('email'); ?>
  <input type="text" name="address" value="<?php echo $this->session->flashdata('err_address'); ?>" placeholder="Address">
  <?php echo form_error('address'); ?>
  Department:
  <select name="dept">
    <option value=""></option>
    <?php foreach ($fetch_department->result() as $row) { ?>
      <option value="<?php echo $row->department_id; ?>"><?php echo $row->department_name; ?></option>
    <?php } ?>
  </select>
  <?php echo form_error('dept'); ?>
  <br>
  Active Tag:
  <select name="active_tag">
    <?php $selected = $this->session->flashdata('err_active_tag'); ?>
    <option <?php if ($selected === "1"){ echo "selected";} ?> value="1">Active</option>
    <option <?php if ($selected === "0"){ echo "selected";} ?> value="0">Not Active</option>
  </select>
  <?php echo form_error('active_tag'); ?>
  <br><br>
  <input type="hidden" name="archive" value="1">
  <input type="submit" name="insert" value="Insert">
</form>
</div>
<?php } ?>
<?php if(isset($single_employee)) { ?>
<!-- =============================================================== -->
<!-- ======================  UPDATE EMPLOYEE  ====================== -->
<!-- =============================================================== -->
  <?php foreach($single_employee->result() as $row) { ?>
    <form action="<?php echo base_url(); ?>Setup/employee_validation" method="post">
      Last Name: <input type="text" name="l_name" value="<?php echo $row->emp_lastname; ?>" placeholder="Last Name"> <br>
      <?php echo form_error('l_name'); ?>
      First Name: <input type="text" name="f_name" value="<?php echo $row->emp_firstname; ?>" placeholder="First Nam"> <br>
      <?php echo form_error('f_name'); ?>
      Middle Initial: <input type="text" name="m_name" size="1%" maxlength="1" value="<?php echo $row->emp_middlename; ?>" placeholder="M.I."> <br>
      Cellphone No.: +63<input type="text" name="cp" size="7%" maxlength="10" minlength="10" value="<?php echo substr($row->emp_contact_no, 3, 10); ?>" placeholder="Cellphone No."> <br>
      <?php echo form_error('cp'); ?>
      Email: <input type="text" name="email" value="<?php echo $row->emp_email; ?>" placeholder="Email"> <br>
      <?php echo form_error('email'); ?>
      Address: <input type="text" name="address" value="<?php echo $row->emp_address; ?>" placeholder="Address"> <br>
      <?php echo form_error('address'); ?>
      Department:
      <select name="dept">
        <option value=""></option>
        <?php $selected = $row->department_id; ?>
        <?php foreach ($fetch_department->result() as $row1) { ?>
          <option <?php if ($selected === $row1->department_id){ echo "selected"; } ?> value="<?php echo $row1->department_id; ?>"><?php echo $row1->department_name; ?></option>
        <?php } ?>
      </select>
      <?php echo form_error('dept'); ?>
      <br>
      Active Tag:
      <select name="active_tag">
        <?php $selected = $row->emp_active_tag; ?>
        <option <?php if ($selected === "1"){ echo "selected";} ?> value="1">Active</option>
        <option <?php if ($selected === "0"){ echo "selected";} ?> value="0">Not Active</option>
      </select>
      <?php echo form_error('active_tag'); ?>
      <br><br>
      <input type="hidden" name="id" value="<?php echo $row->emp_id; ?>">
      <input type="hidden" name="archive" value="<?php echo $row->emp_archive; ?>">
      <input type="submit" name="update" value="Save">
    </form>
    <form action='<?php echo base_url(); ?>Setup/employee' method="post">
      <input type="submit" name="cancel" value="Cancel">
    </form>
  <?php } ?>
<?php } ?>

<!-- =============================================================== -->
<!-- =======================  EMPLOYEE TABLE  ====================== -->
<!-- =============================================================== -->
<table>
  <thead>
    <tr>
      <th>Last Name</th>
      <th>First Name</th>
      <th>M.I.</th>
      <th>Cellphone Number</th>
      <th>Email</th>
      <th>Address</th>
      <th>Department</th>
      <th>Active tag</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      <?php if ($fetch_employee->num_rows() > 0) { ?>
        <?php foreach($fetch_employee->result() as $row) { ?>
          <tr>
            <td><?php echo $row->emp_lastname; ?></td>
            <td><?php echo $row->emp_firstname; ?></td>
            <td><?php echo $row->emp_middlename; ?>.</td>
            <td><?php echo $row->emp_contact_no; ?></td>
            <td><?php echo $row->emp_email; ?></td>
            <td><?php echo $row->emp_address; ?></td>
            <td><?php echo $row->department_name; ?></td>
            <td>
              <?php if ($row->emp_active_tag == "0") { ?>
                Not Active
              <?php } ?>
              <?php if ($row->emp_active_tag == "1") { ?>
                Active
              <?php } ?>
            </td>
            <td>
              <form action="<?php echo base_url(); ?>Setup/update_employee/<?php echo $row->emp_id; ?>" method="post">
                <input type="submit" name="update" value="Edit">
              </form>
              <form action="<?php echo base_url(); ?>Setup/delete_employee/<?php echo $row->emp_id; ?>" method="post">
                <input type="submit" name="delete" value="Delete"
                onclick="return confirm('Do you really want to remove this employee');" >
              </form>
            </td>
          </tr>
        <?php } ?>
      <?php } else { ?>
        <tr>
          <td></td><td></td>
          <td>No</td><td>Data</td><td>Found.</td>
          <td></td><td></td>
        </tr>
      <?php } ?>
  </tbody>
</table>


