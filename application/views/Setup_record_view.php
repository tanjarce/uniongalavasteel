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

<?php foreach ($record_view->result() as $row) { ?>

To: <?php echo $row->emp_lastname.', '.$row->emp_firstname.' '.$row->emp_middlename.'.'; ?> <br>
Subject: <?php echo $row->rec_subject; ?> <br>
Date: <?php echo $row->rec_date; ?>
<br>
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

