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
if ($this->uri->segment(2) == 'department_inserted') {
  echo "Department Successfully Inserted.";
}
if ($this->uri->segment(2) == 'department_updated') {
  echo "Department Successfully Updated.";
}
if ($this->uri->segment(2) == 'department_deleted') {
  echo "Department Successfully Deleted.";
}
if ($this->uri->segment(3) == "" &&
    $this->uri->segment(2) != 'department' &&
    $this->uri->segment(2) != 'department_deleted' &&
    $this->uri->segment(2) != 'department_updated' &&
    $this->uri->segment(2) != 'update_department' &&
    $this->uri->segment(2) != 'department_deleted') {
    echo "Error occured, Please try again.";
}
?>

<?php if (!isset($single_department)) { ?>
  <form action="<?php echo base_url(); ?>Setup/department_validation" method="post">
    Name: <input type="text" name="name" value="<?php echo $this->session->flashdata('err_name'); ?>" placeholder="Department Name">
    <?php echo form_error('name'); ?>
    <br>
    Description: <input type="text" name="desc" value="<?php echo $this->session->flashdata('err_desc'); ?>" placeholder="Department Description">
    <?php echo form_error('desc'); ?>
    <br>
    <input type="submit" name="insert" value="Insert">
  </form>
<?php } ?>
<?php if (isset($single_department)) { ?>
  <?php foreach ($single_department->result() as $row) { ?>
    <form action="<?php echo base_url(); ?>Setup/department_validation" method="post">
      Name: <input type="text" name="name" value="<?php echo $row->department_name; ?>" placeholder="Department Name">
      <?php echo form_error('name'); ?>
      <br>
      Description: <input type="text" name="desc" value="<?php echo $row->department_description; ?>" placeholder="Department Description">
      <?php echo form_error('desc'); ?>
      <br>

      <input type="hidden" name="id" value="<?php echo $row->department_id; ?>">
      <input type="submit" name="update" value="Save">
      <input type="submit" name="cancel" value="Cancel">
    </form>
  <?php } ?>
<?php } ?>
<br><br>

<table>
  <thead>
    <tr>
      <th>Department Name</th>
      <th>Department Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($fetch_departments->num_rows() > 0) { ?>
      <?php foreach ($fetch_departments->result() as $row) { ?>
        <tr>
          <td><?php echo $row->department_name; ?></td>
          <td><?php echo $row->department_description; ?></td>
          <td>
            <form action="<?php echo base_url(); ?>Setup/update_department" method="post">
              <input type="hidden" name="id" value="<?php echo $row->department_id; ?>">
              <input type="submit" name="update" value="Edit">
            </form>
            <form action="<?php echo base_url(); ?>Setup/delete_department" method="post">
              <input type="hidden" name="id" value="<?php echo $row->department_id; ?>">
              <input type="submit" name="delete" value="Delete"
              onclick="return confirm('Do you really want to delete this?');">
            </form>
          </td>
        </tr>
      <?php } ?>
    <?php } else {?>
    <tr>
      <td>No</td>
      <td>Data</td>
      <td>Found.</td>
    </tr>
    <?php } ?>
  </tbody>
</table>

