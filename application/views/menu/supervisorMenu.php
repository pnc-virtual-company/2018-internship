<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$activeLink = (isset($activeLink)) ? $activeLink :  "";?>

<nav class="nav navbar navbar-expand-md fixed-top">

  <a class="navbar-brand" href="<?php echo base_url();?>supervisor">
    <img  src="<?php echo base_url();?>assets/images/logoL.png" alt="Logo" style="width:150px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo ($activeLink=='company'?'active':'');?>">
        <a class="nav_link nav-link" href="<?php echo base_url();?>supervisor/student">Student</a>
      </li>
      <li class="nav-item <?php echo ($activeLink=='Tutor'?'active':'');?>">
        <a class="nav_link nav-link" href="<?php echo base_url();?>supervisor/viewProfile">Questionniare</a>
      </li>
      <li class="nav-item <?php echo ($activeLink=='Calendar'?'active':'');?>">
        <a class="nav_link nav-link" href="<?php echo base_url();?>supervisor/calendar"></i>Calendar</a>
      </li>
    </ul>
  </div>

<?php if($this->session->loggedIn === TRUE) { ?>
  <div class="navbar-collapse collapse navbar-right">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="#">
                 <i class="mdi mdi-bell mdi-24px"></i>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">
                 <i class="mdi mdi-account-circle mdi-24px"></i>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>connection/logout">
                 <i class="mdi mdi-power mdi-24px"></i>
              </a>
          </li>
      </ul>
  </div>
<?php } ?>
</nav>
<br>
<br>
<br>
<br>
<br>