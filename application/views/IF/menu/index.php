
<link rel="stylesheet" type="text/css" href="../css/style.css">
<nav class=" navbar navbar-expand-lg navbar-light  color">
  <a class="navbar-brand" href="<?php echo base_url();?>Welcome_IF/home">
      <img  src="<?php echo base_url();?>assets/images/logoL.png" alt="Logo" style="width:150px;">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class=" collapse navbar-collapse" id="navbarSupportedContent" style="font-family: sans-serif;">
    <ul class="navbar-nav mr-auto" id="menu">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Welcome_IF/company"><b class="colorTextMenu">  Company</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Welcome_IF/tutor"><b class="colorTextMenu">  Tutor</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Welcome_IF/supervisor"><b class="colorTextMenu">  Supervisor</b></a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link" href="<?php echo base_url();?>Welcome_IF/student"><b class="colorTextMenu">  Student</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Welcome_IF/calendar"><b class="colorTextMenu">Calendar</i></b></a>
      </li>
    </ul>
    <ul class="navbar-nav">
         <li class="nav-item">
          <div class="dropdown">
           <a href="#" class="nav-link active"  data-toggle="dropdown" aria-expanded="false">
             <i  style=" margin-right: 20px;" class="mdi mdi-24px mdi-bell " data-toggle="tooltip" title="Notification" id="iconBell"> </i>          
           </a>
            <div class="dropdown-menu ">
                <div class="dropdown-body">
                 <a class="dxropdown-item text-dark" href="#"><img class="logo" src="<?php echo base_url();?>assets/images/logo.png"><strong>Rith.Nhil</strong> <br>conmment on <strong>Toch.Ban</strong></b></a>
                  
                </div>
                <div class="dropdown-body">
                 <a class="dropdown-item text-dark" href="#"><img class="logo" src="<?php echo base_url();?>assets/images/logo.png">  <strong>Rith.Nhil</strong> <br>conmment on <strong>Toch.Ban</strong></b></a>
                  
                </div>
                <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#">View All</a>
              </div>
           </div>
         </li>
      
         <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#myProfile">       
          <b class="colorTextMenu">  
            
            <span class="mdi mdi-account-circle mdi-24px" data-toggle="tooltip" title="Username"></span> 
          </b>
       </a>
      </li>
         <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url();?>connection/logout">
             <b class="colorTextMenu"> 
                <span class="mdi mdi-login mdi-24px" data-toggle="tooltip" title="Logout"></span> 
             </b>
           </a>
         </li>
      </ul>
  </div>
</nav><br><br>

<!-- Start Profile -->
<div class="modal fade" id="myProfile">
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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

