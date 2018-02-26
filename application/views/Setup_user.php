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
<?php
if ($this->uri->segment(2) == 'user_inserted') {
  echo "User Successfully Inserted.";
}
if ($this->uri->segment(2) == 'user_updated') {
  echo "User Successfully Updated.";
}
if ($this->uri->segment(2) == 'user_deleted') {
  echo "User Successfully Deleted.";
}
if ($this->uri->segment(3) == "" &&
    $this->uri->segment(2) != 'user' &&
    $this->uri->segment(2) != 'user_deleted' &&
    $this->uri->segment(2) != 'user_updated' &&
    $this->uri->segment(2) != 'update_user' &&
    $this->uri->segment(2) != 'user_deleted') {
    echo "Error occured, Please try again.";
}
?>

<?php if (!isset($fetch_single_user)) { ?>
  <form action="<?php echo base_url(); ?>Setup/user_validation" method="post">
    Username: <input type="text" name="user" value="<?php echo $this->session->flashdata('err_user'); ?>" placeholder="Username">
    <?php echo form_error('user'); ?>
    <br>
    Password: <input type="text" name="pass" value="<?php echo $this->session->flashdata('err_pass'); ?>" placeholder="Password">
    <?php echo form_error('pass'); ?>
    <br>
    Employee:
    <select name="emp">
      <option value=""></option>
      <?php $selected = $this->session->flashdata('err_emp'); ?>
      <?php foreach ($fetch_name->result() as $row1) { ?>
        <option <?php if ($selected === $row1->emp_id){ echo 'selected'; }  ?> value="<?php echo $row1->emp_id; ?>"><?php echo $row1->emp_lastname.', '.$row1->emp_firstname.' '.$row1->emp_middlename.'.' ?></option>
      <?php } ?>
    </select>
    <?php echo form_error('emp'); ?>
    <br>
    Role:
    <select name="role">
      <option value=""></option>
      <?php $selected = $this->session->flashdata('err_role'); ?>
      <?php foreach ($fetch_user_role->result() as $row1) { ?>
        <option <?php if ($selected === $row1->role_id) { echo 'selected'; } ?> value="<?php echo $row1->role_id; ?>"><?php echo $row1->role_name; ?></option>
      <?php } ?>
    </select>
    <?php echo form_error('role'); ?>
    <br>
    Active Tag:
    <select name="tag">
      <?php $selected = $this->session->flashdata('err_tag'); ?>
      <option <?php if ($selected === '1') { echo 'selected'; } ?> value="1">Acitve</option>
      <option <?php if ($selected === '0') { echo 'selected'; } ?> value="0">Not Active</option>
    </select>
    <?php echo form_error('tag'); ?>
    <br>
    <br>
    <input type="submit" name="insert" value="Insert">
  </form>
<?php } ?>
<?php if (isset($fetch_single_user)) { ?>
  <?php foreach ($fetch_single_user->result() as $row) { ?>
    <form action="<?php echo base_url(); ?>Setup/user_validation" method="post">
      Username: <input type="text" name="user" value="<?php echo $row->user_name; ?>" placeholder="Username">
      <br>
      Password: <input type="text" name="pass" value="<?php echo $row->user_password; ?>" placeholder="Password">
      <br>
      Employee:
      <select name="emp">
        <option value=""></option>
        <?php $selected = $row->emp_id; ?>
        <?php foreach ($fetch_name->result() as $row1) { ?>
          <option <?php if ($selected === $row1->emp_id){ echo 'selected'; }  ?> value="<?php echo $row1->emp_id; ?>"><?php echo $row1->emp_lastname.', '.$row1->emp_firstname.' '.$row1->emp_middlename.'.' ?></option>
        <?php } ?>
      </select>
      <br>
      Role:
      <select name="role">
        <option value=""></option>
        <?php $selected = $row->role_id; ?>
        <?php foreach ($fetch_user_role->result() as $row1) { ?>
          <option <?php if($selected === $row1->role_id){ echo 'selected';} ?> value="<?php echo $row1->role_id; ?>"><?php echo $row1->role_name; ?></option>
        <?php } ?>
      </select>
      <br>
      Active Tag:
      <select name="tag">
        <?php $selected = $row->user_active_tag; ?>
        <option <?php if($selected === '1'){ echo 'selected';} ?> value="1">Acitve</option>
        <option <?php if($selected === '0'){ echo 'selected';} ?> value="0">Not Active</option>
      </select>
      <br>
      <br>
      <input type="hidden" name="id" value="<?php echo $row->user_id; ?>">
      <input type="submit" name="update" value="Save">
      <input type="submit" name="cancel" value="Cancel">
  </form>
  <?php } ?>
<?php } ?>


<br><br>
<table>
  <thead>
    <tr>
      <th>Username</th>
      <th>Password</th>
      <th>Employee</th>
      <th>Role</th>
      <th>Active Tag</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($fetch_user->num_rows() > 0) { ?>
      <?php foreach ($fetch_user->result() as $row) { ?>
        <tr>
          <td><?php echo $row->user_name; ?></td>
          <td><?php echo $row->user_password; ?></td>
          <td><?php echo $row->emp_lastname.', '.$row->emp_firstname.' '.$row->emp_middlename.'.'; ?></td>
          <td><?php echo $row->role_name; ?></td>
          <td>
            <?php if ($row->user_active_tag == '1') { ?>
              Active
            <?php } else { ?>
              Not Active
            <?php } ?>
          </td>
          <td>
            <form action="<?php echo base_url(); ?>Setup/update_user" method="post">
              <input type="hidden" name="id" value="<?php echo $row->user_id; ?>">
              <input type="submit" name="update" value="Edit">
            </form>
            <form action="<?php echo base_url(); ?>Setup/delete_user" method="post">
              <input type="hidden" name="id" value="<?php echo $row->user_id; ?>">
              <input type="submit" name="delete" value="Delete"
              onclick="return confirm('Do you really want to delete this?');">
            </form>
          </td>
        </tr>
      <?php } ?>
    <?php } else { ?>
      <tr>
        <td></td><td></td>
        <td>No Data Found.</td>
        <td></td><td></td>
      </tr>
    <?php } ?>
  </tbody>
</table>


