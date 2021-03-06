


<div class="container con-body">
	<a href="<?php echo base_url(); ?>Welcome_IF/supervisor">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left mdi-15px text-white"></i>Back
		</button>
	</a>
	<h3 class="text-primary text-center">New Supervisor</h3><br>
	<div class="row border border-form rounded bg-white">
		<div class="rounded bg-white">	
			<br>
			<br>	
			<?php echo form_open_multipart('Welcome_IF/addSupervisor','class="form-horizontal"'); ?>
				<div class="form-row">
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">First Name</label>
						<div class="col-sm-8">
							<input type="text" name="firstname" id="" class="form-control" placeholder="...">
							<span class="required text-danger"><?php echo form_error("firstname"); ?></span>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Last Name</label>
						<div class="col-sm-8">
							<input type="text" name="lastname" id="" class="form-control" placeholder="...">
							<span class="required text-danger"><?php echo form_error("lastname"); ?></span>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Company</label>
						<div class="col-sm-8">
							<select class="form-control" id="" name="company">
								<?php foreach ($company as $company):?>
									<option><?php echo $company['name']; ?></option>
								<?php endforeach ?>
							</select>
							<span class="required text-danger"><?php echo form_error("company"); ?></span>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Student</label>
						<div class="col-sm-8">
							<select class="form-control" id="" name="student">
								<?php foreach ($student as $student):?>
									<option><?php echo $student['firstname']." ".$student['lastname'];?></option>
								<?php endforeach ?>
							</select>
							<span class="required text-danger"><?php echo form_error("student"); ?></span>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">UserName</label>
						<div class="col-sm-8">
							<input type="text" name="username" id="" class="form-control" placeholder="...">
							<span class="required text-danger"><?php echo form_error("username"); ?></span>
						</div>
					</div>
					
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Position</label>
						<div class="col-sm-8">
							<input type="text" name="position" id="" class="form-control" placeholder="...">
							<span class="required text-danger"><?php echo form_error("position"); ?></span>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Email</label>
						<div class="col-sm-8">
							<input type="text" name="email" id="" class="form-control" placeholder="...">
							<span class="required text-danger"><?php echo form_error("email"); ?></span>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Phone number</label>
						<div class="col-sm-8">
							<input type="text" name="phone" id="" class="form-control" placeholder="...">
							<span class="required text-danger"><?php echo form_error("phone"); ?></span>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Picture</label>
						<div class="col-sm-8">
							<input type="file" name="image" id="" class="form-control" placeholder="...">
							<!-- <span class="required text-danger"><?php //echo form_error("image"); ?></span> -->
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for=""></label>
						<div class="col-sm-8">
							<!-- <input type="file" name="image" id="" class="form-control" placeholder="..."> -->
						</div>
					</div><br>
				</div>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-2 text-center">
				<button class="btn btn-outline-success" type="submit" name="btn-submit">Submit</button>
			</div>
			<div class="col-md-2 text-center">
				<button class="btn btn-outline-danger pull-right" type="reset" name="btn-cancel">Cancel</button>
				<br>
				<br>
				<div class="col-md-4"></div>
			<?php echo form_close(); ?>
		</div> 
	</div>
