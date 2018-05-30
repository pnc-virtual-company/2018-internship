


<div class="container con-body">
	<a href="<?php echo base_url(); ?>Welcome_IF/tutor">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left mdi-15px text-white"></i>Back
		</button>
	</a>
	<h3 class="text-primary text-center">Edit Tutor</h3><br>
	<div class="row">
		<div class="border border-form rounded bg-white">	
			<br>
			<br>	
			<?php foreach ($tutor as $tutor):?>				
				<?php $submitEditTutor = "Welcome_IF/editTutor?&id=".$tutor['id']; ?>
	
				<?php echo form_open_multipart($submitEditTutor,'class="form-horizontal"'); ?>

				<div class="form-row">
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">First Name</label>
						<div class="col-sm-8">
							<input type="text" name="firstname" id="" class="form-control" placeholder="" value="<?php echo $tutor['firstname'] ?>">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Last Name</label>
						<div class="col-sm-8">
							<input type="text" name="lastname" id="" class="form-control" placeholder="..." value="<?php echo $tutor['lastname'] ?>">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Position</label>
						<div class="col-sm-8">
							<input type="text" name="position" id="" class="form-control" placeholder="..." value="<?php echo $tutor['position'] ?>">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">User Name</label>
						<div class="col-sm-8">
							<input type="text" name="username" id="" class="form-control" placeholder="..." value="<?php echo $tutor['username'] ?>">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">School Email</label>
						<div class="col-sm-8">
							<input type="text" name="sEmail" id="" class="form-control" placeholder="..." value="<?php echo $tutor['email'] ?>">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Phone number</label>
						<div class="col-sm-8">
							<input type="text" name="phone" id="" class="form-control" placeholder="..." value="<?php echo $tutor['phone'] ?>">
						</div>
					</div>
					<div class="form-group row col-md-6 group-col-stu">
						<label class="col-sm-4 col-form-label" for="">Image Tutor</label>
						<div class="col-sm-8">
							<input type="file" name="image" id="" class="form-control" placeholder="...">
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
							<!-- <input type="file" name="image" id="" class="form-control" placeholder="..."> -->
						</div>
					</div><br><br><br>
					<div class="col-md-4"></div>
					<div class="col-md-2 text-center">
						<button class="btn btn-outline-success" type="submit" name="btn-submit">Submit</button>
					</div>
					<div class="col-md-2 text-center">
						<button class="btn btn-outline-danger pull-right" type="reset" name="btn-cancel">Cancel</button>
						<br>
						<br>
					</div>
					<?php endforeach ?>
					<div class="col-md-4"></div>
				</div>
			<?php echo form_close(); ?>
		</div> 
	</div>
</div>
