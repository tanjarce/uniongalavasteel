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
if ($this->uri->segment(2) == 'record_inserted') {
  echo 'Record Successfully Inserted.';
}
if ($this->uri->segment(2) == 'record_updated') {
  echo 'Record Successfully Updated.';
}
if ($this->uri->segment(2) == 'record_deleted') {
  echo 'Record Successfully Deleted.';
}
if ($this->uri->segment(3) == '' &&
    $this->uri->segment(2) != 'record' &&
    $this->uri->segment(2) != 'record_inserted' &&
    $this->uri->segment(2) != 'record_updated' &&
    $this->uri->segment(2) != 'update_record' &&
    $this->uri->segment(2) != 'record_deleted') {
  echo "Error Occured, please try again.";
}
?>
<!-- ===================================================================== -->
<!-- =============================  F O R M  ============================= -->
<!-- ===================================================================== -->
<?php if (!isset($record_view)) { ?>
  <form action="<?php echo base_url(); ?>Setup/record_validation" method="post">
    Name:
    <select name="whom">
      <option value=""></option>
      <?php foreach ($fetch_name->result() as $row) { ?>
        <?php $selected = $this->session->flashdata('err_whom'); ?>
        <option <?php if ($selected === $row->emp_id){ echo "selected"; } ?>  value="<?php echo $row->emp_id; ?>"><?php echo $row->emp_lastname.', '.$row->emp_firstname.' '.$row->emp_middlename.'.'; ?></option>
      <?php } ?>
    </select>
    <?php echo form_error('whom'); ?>
    <br>
    Subject: <input type="text" name="subject" value="<?php echo $this->session->flashdata('err_subject'); ?>">
    <?php echo form_error('subject'); ?>
    <br>
    Date: <input type="Date" name="date" value="<?php echo $this->session->flashdata('err_date'); ?>">
    <?php echo form_error('date'); ?>
    <br>
    Comment:<br>
    <textarea name="comment" rows="8" cols="80" >
    <?php echo $this->session->flashdata('err_comment'); ?>
    </textarea>
    <?php echo form_error('comment'); ?>
    <br>

    <input type="hidden" name="sender" value="<?php echo $this->session->userdata('emp_id'); ?>">
    <input type="submit" name="send" value="Send">
  </form>
<?php } ?>
<?php if (isset($record_view)) { ?>
  <?php foreach ($record_view->result() as $row) { ?>
    <form action="<?php echo base_url(); ?>Setup/record_validation" method="post">
      Name:
      <select name="whom">
        <?php foreach ($fetch_name->result() as $row1) { ?>
          <option <?php if($row->emp_id === $row1->emp_id){echo "selected";} ?> value="<?php echo $row1->emp_id; ?>"><?php echo $row1->emp_lastname.', '.$row1->emp_firstname.' '.$row1->emp_middlename.'.'; ?></option>
        <?php } ?>
      </select>
      <br>
      Subject: <input type="text" name="subject" value="<?php echo $row->rec_subject; ?>">
      <br>
      Date: <input type="Date" name="date" value="<?php echo $row->rec_date; ?>">
      <br>
      Comment: <br>
      <textarea name="comment" rows="8" cols="80" >
      <?php echo $row->rec_comment; ?>
      </textarea>
      <br>
      <input type="hidden" name="rec_id" value="<?php echo $row->rec_id; ?>">
      <input type="hidden" name="sender" value="<?php echo $this->session->userdata('emp_id'); ?>">
      <input type="submit" name="edit" value="Save">
      <input type="submit" name="cancel" value="Cancel">
    </form>
  <?php } ?>
<?php } ?>

<!-- ===================================================================== -->
<!-- ============================  T A B L E  ============================ -->
<!-- ===================================================================== -->
<table>
  <thead>
    <tr>
      <th>Whom</th>
      <th>Sender</th>
      <th>Subject</th>
      <th>Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($fetch_records->num_rows() > 0) { ?>
      <?php foreach ($fetch_records->result() as $row) {?>
        <tr>
          <td><?php echo $row->emp_lastname.', '.$row->emp_firstname.' '.$row->emp_middlename.'.'; ?></td>
          <td>
            <?php
            if ($fetch_name->num_rows() > 0) {
              foreach ($fetch_name->result() as $row1) {
                if ($row->rec_sender == $row1->emp_id) {
                  echo $row1->emp_lastname.', '.$row1->emp_firstname.' '.$row1->emp_middlename.'.';
                }
              }
            }
            ?>
          </td>
          <td><?php echo $row->rec_subject; ?></td>
          <td><?php echo $row->rec_date; ?></td>
          <td>
            <form action="<?php echo base_url(); ?>Setup/record_view" method="post">
              <input type="hidden" name="rec_id" value="<?php echo $row->rec_id; ?>">
              <input type="submit" name="view" value="View">
            </form>
            <form action="<?php echo base_url(); ?>Setup/update_record" method="post">
              <input type="hidden" name="rec_id" value="<?php echo $row->rec_id; ?>">
              <input type="submit" name="edit" value="Edit">
            </form>
            <form action="<?php echo base_url(); ?>Setup/delete_record" method="post">
              <input type="hidden" name="rec_id" value="<?php echo $row->rec_id; ?>">
              <input type="submit" name="delete" value="Delete"
              onclick="return confirm('Do you really want to delete this record?');">
            </form>
          </td>
        </tr>
      <?php } ?>
    <?php } else { ?>
    <tr>
      <td></td>
      <td>No</td><td>Data</td><td>Found.</td>
      <td></td>
    </tr>
    <?php } ?>
  </tbody>
</table>








