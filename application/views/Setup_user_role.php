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
if ($this->uri->segment(2) == 'role_inserted') {
  echo "Role successfully inserted.";
}
if ($this->uri->segment(2) == 'role_updated') {
  echo "Role successfully updated.";
}
if ($this->uri->segment(2) == 'role_deleted') {
  echo "Role successfully deleted.";
}
if ($this->uri->segment(3) == '' &&
    $this->uri->segment(2) != 'user_role' &&
    $this->uri->segment(2) != 'role_inserted' &&
    $this->uri->segment(2) != 'role_updated' &&
    $this->uri->segment(2) != 'update_role' &&
    $this->uri->segment(2) != 'role_deleted'
    ) {
  echo "Error occured, Please try again.";
}

?>

<!-- ==================================================================== -->
<!-- ============================  F O R M  ============================= -->
<!-- ==================================================================== -->
<?php if (!isset($single_role)) { ?>
  <form action="<?php echo base_url(); ?>Setup/user_role_validation" method="post">
    Role Name: <input type="text" name="name" value="" placeholder="Role Name">
    <?php echo form_error('err_name'); ?>
    <br>
    Role Description: <input type="text" name="desc" value="" placeholder="Role Description">
    <?php echo form_error('err_desc'); ?>
    <br>
    <input type="submit" name="insert" value="Insert">
  </form>
<?php } ?>
<?php if (isset($single_role)) { ?>
  <?php foreach ($single_role->result() as $row) { ?>
    <form action="<?php echo base_url(); ?>Setup/user_role_validation" method="post">
      Role Name: <input type="text" name="name" value="<?php echo $row->role_name; ?>" placeholder="Role Name">
      <?php echo form_error('err_name'); ?>
      <br>
      Role Description: <input type="text" name="desc" value="<?php echo $row->role_description; ?>" placeholder="Role Description">
      <?php echo form_error('err_desc'); ?>
      <br>

      <input type="hidden" name="id" value="<?php echo $row->role_id; ?>">
      <input type="submit" name="save" value="Save">
      <input type="submit" name="cancel" value="Cancel">
    </form>
  <?php } ?>
<?php } ?>
<br>
<!-- ==================================================================== -->
<!-- ===========================  T A B L E  ============================ -->
<!-- ==================================================================== -->
<table>
  <thead>
    <tr>
      <th>Role Name</th>
      <th>Role Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($fetch_user_role->num_rows() > 0 ) { ?>
      <?php foreach ($fetch_user_role->result() as $row) { ?>
        <tr>
          <td><?php echo $row->role_name; ?></td>
          <td><?php echo $row->role_description; ?></td>
          <td>
            <?php if ($row->role_id == '1' || $row->role_id == '2') { ?>
              <form action="<?php echo base_url();?>Setup/update_role" method="post">
                <input type="submit" name="edit" value="Edit">
                <input type="hidden" name="id" value="<?php echo $row->role_id; ?>">
              </form>
              <form action="index.html" method="post">
                <input type="submit" name="delete" value="Delete" disabled="on"
                onclick="return confirm('This is role cannot be deleted!');">
              </form>
            <?php } else { ?>
              <form action="<?php echo base_url();?>Setup/update_role" method="post">
                <input type="submit" name="edit" value="Edit">
                <input type="hidden" name="id" value="<?php echo $row->role_id; ?>">
              </form>
              <form action="<?php echo base_url();?>Setup/delete_role" method="post">
                <input type="hidden" name="id" value="<?php echo $row->role_id; ?>">
                <input type="submit" name="delete" value="Delete"
                onclick="return confirm('Do you really want to delete this!');">
              </form>
            <?php } ?>
          </td>
        </tr>
      <?php } ?>
    <?php } else { ?>
      <tr>
        <td></td>
        <td>No Data Found.</td>
        <td></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

