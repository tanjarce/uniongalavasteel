<div class="main__content">
  <h1>Employee view</h1>
</div>
<!-- <div class="table_wrapper">
  <table id="main_table" class="tools_table display nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Last Name</th>
        <th>First Name</th>
        <th>M.I.</th>
        <th>Department</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($fetch_employee->num_rows() > 0) { ?>
        <?php foreach ($fetch_employee->result() as $row) { ?>
          <tr>
            <td><?php echo $row->emp_lastname; ?></td>
            <td><?php echo $row->emp_firstname; ?></td>
            <td><?php echo $row->emp_middlename; ?>.</td>
            <td><?php echo $row->department_name; ?></td>
            <td>
              <form action="<?php echo base_url(); ?>Employee/fetch_record_list" method="post">
                <input type="hidden" name="id" value="<?php echo $row->emp_id; ?>">
                <input type="submit" name="record" value="Company Record">
              </form>
              <form action="index.html" method="post">
                <input type="submit" name="info" value="Personal Info">
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
</div>
<?php if (isset($fetch_record_list)) { ?>
  <table id="main_table2" class="tools_table display nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Date</th>
        <th>Sender</th>
        <th>Subject</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php if ($fetch_record_list->num_rows() > 0) { ?>
          <?php foreach ($fetch_record_list->result() as $row) { ?>
            <tr>
              <td><?php echo $row->rec_date; ?></td>
              <td><?php echo $row->emp_lastname.', '
              .$row->emp_firstname.' '.$row->emp_middlename.'.'; ?></td>
              <td><?php echo $row->rec_subject; ?></td>
              <td>
                <form action="<?php echo base_url(); ?>Employee/view_record" method="post">
                  <input type="hidden" name="rec_id" value="<?php echo $row->rec_id; ?>">
                  <input type="submit" name="view" value="View">
                </form>
              </td>
            </tr>
          <?php } ?>
        <?php } else { ?>
          <tr>
            <td>No</td>
            <td>Data</td>
            <td>Found</td>
            <td></td>
          </tr>
        <?php } ?>
    </tbody>
  </table>
<?php } ?>




<?php if (isset($fetch_record)) { ?>
  <?php foreach ($fetch_record->result() as $row) { ?>
   Date: <?php echo $row->rec_date; ?> <br>
  Subject: <?php echo $row->rec_subject; ?> <br>

  <br>
  Dear, <?php echo $row->emp_lastname.', '.$row->emp_firstname.' '.$row->emp_middlename.'.'; ?> <br>
  <br>
  <div class="letter">
  <?php echo $row->rec_comment; ?>
  </div>
  <br>
  <br>
  By:
  <?php
  if ($fetch_name->num_rows() > 0) {
    foreach ($fetch_name->result() as $row1) {
      if ($row->rec_sender == $row1->emp_id) {
        echo $row1->emp_lastname.', '.$row1->emp_firstname.' '.$row1->emp_middlename.'.';
      }
    }
  }
  ?>
  <?php } ?>
<?php } ?> -->


