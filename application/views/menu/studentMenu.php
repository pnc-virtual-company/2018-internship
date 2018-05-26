<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$activeLink = (isset($activeLink)) ? $activeLink :  "";?>

<nav class="nav navbar navbar-expand-md fixed-top">

  <a class="navbar-brand" href="<?php echo base_url();?>cStudent">
    <img  src="<?php echo base_url();?>assets/images/logoL.png" alt="Logo" style="width:150px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!-- menu -->
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo ($activeLink=='work-log'?'active':'');?>">
        <a class="nav_link nav-link" href="<?php echo base_url();?>cStudent/worklog">Work-log</a>
      </li>
      <li class="nav-item <?php echo ($activeLink=='Comment'?'active':'');?>">
        <a class="nav_link nav-link" href="<?php echo base_url();?>cStudent/comment">Comments</a>
      </li>
      <li class="nav-item <?php echo ($activeLink=='Calendar'?'active':'');?>">
        <a class="nav_link nav-link" href="<?php echo base_url();?>cStudent/calendar"></i>Calendar</a>
      </li>
    </ul>
  </div>

  <div class="navbar-collapse collapse navbar-right">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
              <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-24px mdi-bell " data-toggle="tooltip" title="Notification" id="iconBell"> </i>
              </a>
                <ul class="dropdown-menu menu-dropdown">
                  <li class="head text-light bg-info">
                    <div class="row">
                      <div class="col-lg-12 col-sm-12 col-12">
                        <span>Notifications (3)</span>
                        <a href="" class="float-right text-light">Mark all as read</a>
                      </div>
                  </li>
                  <li class="notification-box">
                    <div class="row">
                      <div class="col-lg-3 col-sm-3 col-3 text-center">
                        <a class="dropdown-item text-dark" href="#"><img class="logo" src="<?php echo base_url();?>assets/images/logo.png">  <strong>Rith.Nhil</strong> <br>conmment on <strong>Toch.Ban</strong></b></a>   
                    </div>
                  </li>
                  <li class="notification-box">
                    <div class="row">
                      <div class="col-lg-3 col-sm-3 col-3 text-center">
                        <a class="dropdown-item text-dark" href="#"><img class="logo" src="<?php echo base_url();?>assets/images/logo.png">  <strong>Rith.Nhil</strong> <br>conmment on <strong>Toch.Ban</strong></b></a>
                      </div>     
                    </div>
                  </li>
                  <li class="footer bg-info text-center">
                    <a href="" class="text-light">View All</a>
                  </li>
              </ul>
            </li>
          <li class="nav-item">
              <a title="Username" class="nav-link" href="#" data-toggle="modal" data-target="#viewProfileStudent">
                 <i class="mdi mdi-account-circle mdi-24px"></i>
              </a>
          </li>
          <li class="nav-item">
              <a title="logout" class="nav-link" href="<?php echo base_url();?>connection/logout">
                 <i class="mdi mdi-power mdi-24px"></i>
              </a>
          </li>
      </ul>
  </div>
</nav>
<div class="modal fade" id="viewProfileStudent">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
          <img src="<?php echo base_url();?>assets/images/studentimage/studentpiture.jpg" alt="" style="width: 100px;"><br>
          <h5 class="modal-title">Penh SOK</h5>
        </div>
        <div class="col-md-4 text-right">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <table> 
          <tr>
            <td><label for="">Sex</label></td>
            <td><b class="text-dark">: Female</b></td>
          </tr>
          <tr>
            <td> <label for="">DepartMent</label></td>
            <td><b class="text-dark">:  ERO Team</b></td>
          </tr>
          <tr>
            <td> <label for="">Phone</label></td>
            <td>
              <b class="text-dark">:   081477282 </b>
            </td>
          </tr>
          <tr>
            <td></td>
            <td><b class="text-dark">:   0713581071</b></td>
          </tr>
          <tr>
            <td><label for="">Personal Email</label></td>
            <td><b class="text-dark">:   first.last@gmail.com</b></td>
          </tr>
          <tr>
            <td><label for="">School Email</label></td>
            <td><b class="text-dark">:   first.last@student.passerellesnumeriques.org</b></td>
          </tr>
        </table>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Update profile</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

      <!-- <div class="col-md-2 col-sm-12"></div> -->
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
