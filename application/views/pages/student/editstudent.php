
<div class="container con-body">
	<a href="<?php echo base_url();?>Welcome_IF/student">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left mdi-15px text-white"></i>Back
		</button>
	</a>
	<h3 class="text-primary text-center">Edit Student</h3><br>
	<div class="row">
		<div class="border border-form rounded bg-white">
		<br>
		<br>	
				<?php foreach ($student as $student):?>				
				<?php $submitEditStu = "Welcome_IF/editStudent?&id=".$student['id']; ?>
	
				<?php echo form_open_multipart($submitEditStu,'class="form-horizontal"'); ?>

				<div class="form-row">
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">First Name</label>
						<div class="col-sm-8">
							<input type="text" name="firstname" id="" class="form-control" placeholder="..." value="<?php echo $student['stuFName']; ?>">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Last Name</label>
						<div class="col-sm-8">
							<input type="text" name="lastname" id="" class="form-control" placeholder="..." value="<?php echo $student['stuLName']; ?>">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">UserName</label>
						<div class="col-sm-8">
							<input type="text" name="username" id="" class="form-control" placeholder="..." value="<?php echo $student['username']; ?>">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Phone Number</label>
						<div class="col-sm-8">
							<input type="text" name="phone" id="" class="form-control" placeholder="..." value="<?php echo $student['phone']; ?>">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Batch</label>
						<div class="col-sm-8">
							<select id="inputState" class="form-control" name="batch">
								<option selected>Web</option>
								<option>SNA</option>
							</select>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Supervisor</label>
						<div class="col-sm-8">
							<select id="inputState" class="form-control" name="supervisor">
							  <?php foreach ($sSupervisor as $sSupervisor):?>
							   <option><?php echo $sSupervisor['suName'];;?></option>
							  <?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Year</label>
						<div class="col-sm-8">
							<input type="text" name="year" id="" class="form-control" placeholder="..." value="<?php echo $student['year']; ?>">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Personal Email</label>
						<div class="col-sm-8">
							<input type="text" name="peremail" id="" class="form-control" placeholder="..." value="<?php echo $student['peremail']; ?>">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">School Email</label>
						<div class="col-sm-8">
							<input type="text" name="schoolemail" id="" class="form-control" placeholder="..." value="<?php echo $student['schoolemail']; ?>">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Profile picture</label>
						<div class="col-sm-8">
							<input type="file" name="image" id="" class="form-control" placeholder="...">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for=""></label>
						<div class="col-sm-8">
							<input type="hidden">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for=""></label>
						<div class="col-sm-8">
							<input type="hidden">
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
			 <?php endforeach ?>
		</div> 
	</div>
</div>