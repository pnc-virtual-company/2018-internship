
<div class="container con-body">
	<a href="<?php echo base_url();?>Welcome_IF/student">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left mdi-15px text-white"></i>Back
		</button>
	</a>
	<h3 class="text-primary text-center">Add Student</h3><br>
	<div class="row">
		<div class="border border-form rounded bg-white">
			<br>		
			<br>		
			<?php echo form_open_multipart('Welcome_IF/newStudent','class="form-horizontal"'); ?>
			<div class="form-row">
				<div class="form-group row col-md-6 group-col-stu">
					<label class="col-sm-4 col-form-label" for="">First Name</label>
					<div class="col-sm-8">
						<input type="text" name="firstname" id="firstname" class="form-control" placeholder="...">
						<span class="required text-danger"><?php echo form_error("firstname"); ?></span>
					</div>
				</div>
				<div class="form-group row col-md-6 group-col-stu">
					<label class="col-sm-4 col-form-label" for="">Last Name</label>
					<div class="col-sm-8">
						<input type="text" name="lastname" id="lastname" class="form-control" placeholder="...">
						<span class="required text-danger"><?php echo form_error("lastname"); ?></span>
					</div>
				</div>
				<div class="form-group row col-md-6 group-col-stu">
					<label class="col-sm-4 col-form-label" for="">UserName</label>
					<div class="col-sm-8">
						<input type="text" name="username" id="username" class="form-control" placeholder="...">
						<span class="required text-danger"><?php echo form_error("username"); ?></span>
					</div>
				</div>
				<div class="form-group row col-md-6 group-col-stu">
					<label class="col-sm-4 col-form-label" for="">Phone Number</label>
					<div class="col-sm-8">
						<input type="text" name="phone" id="" class="form-control" placeholder="...">
						<span class="required text-danger"><?php echo form_error("phone"); ?></span>
					</div>
				</div>
				<div class="form-group row col-md-6 group-col-stu">
					<label class="col-sm-4 col-form-label" for="">Batch</label>
					<div class="col-sm-8">
						<select id="inputState" class="form-control" name="batch">
							<option selected>Web</option>
							<option>SNA</option>
						</select>
						<span class="required text-danger"><?php echo form_error("batch"); ?></span>
					</div>
				</div>
				<div class="form-group row col-md-6 group-col-stu">
					<label class="col-sm-4 col-form-label" for="">Supervisor</label>
					<div class="col-sm-8">
						<select id="inputState" class="form-control" name="supervisor">
							<?php foreach ($sSupervisor as $sSupervisor):?>
								<option><?php echo $sSupervisor['suName'];?></option>
							<?php endforeach ?>
						</select>
						<span class="required text-danger"><?php echo form_error("supervisor"); ?></span>
					</div>
				</div>
				<div class="form-group row col-md-6 group-col-stu">
					<label class="col-sm-4 col-form-label" for="">Year</label>
					<div class="col-sm-8">
						<input type="text" name="year" id="" class="form-control" placeholder="...">
						<span class="required text-danger"><?php echo form_error("year"); ?></span>
					</div>
				</div>
				<div class="form-group row col-md-6 group-col-stu">
					<label class="col-sm-4 col-form-label" for="">Personal Email</label>
					<div class="col-sm-8">
						<input type="text" name="peremail" id="" class="form-control" placeholder="...">
						<span class="required text-danger"><?php echo form_error("peremail"); ?></span>
					</div>
				</div>
				<div class="form-group row col-md-6 group-col-stu">
					<label class="col-sm-4 col-form-label" for="">School Email</label>
					<div class="col-sm-8">
						<input type="text" name="schoolemail" id="" class="form-control" placeholder="...">
						<span class="required text-danger"><?php echo form_error("schoolemail"); ?></span>
					</div>
				</div>
				<div class="form-group row col-md-6 group-col-stu">
					<label class="col-sm-4 col-form-label" for="">Profile picture</label>
					<div class="col-sm-8">
						<input type="file" name="image" id="" class="form-control" placeholder="...">
					</div>
				</div><br><br><br>
				<div class="col-md-4"></div>
				<div class="col-md-2 text-center">
					<button class="btn btn-outline-success" type="submit" name="btn-submit">Submit</button>
				</div>
				<div class="col-md-2 text-center">
					<button class="btn btn-outline-danger pull-right" type="reset" name="btn-cancel">Cancel</button>
				</div>
				<div class="col-md-4"></div>
			</div>
		</form>
	</div> 
</div>
</div>

