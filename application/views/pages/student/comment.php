
<div class="container con-body">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<a href="<?php echo base_url();?>Welcome_IF/student">
				<button type="button" class="btn btn-primary">
					<i class="mdi mdi-chevron-left"></i>Back
				</button>
			</a>
			<h3 class="text-primary text-center"><strong>Student Comments</strong></h3>
		</div>
	</div>	 
	<br>
	<div class="row"><br><br>

		<!-- <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div> -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<table id="studentList" class="table table-striped table-bordered bg-white">
				<thead class="text-center">
					<tr >
						<th>Date</th>
						<th>Student Comments</th>
						<th>Tutor Comments</th>
						<th>Validate</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($stuComment as $stuComment):?>
				<?php endforeach ?>
				<?php foreach ($comment as $comment):?>
					<tr class="text-left">
						<td class="text-center">1 may 2018</td>
						<td> <?php echo $stuComment['comment']; ?></td>
						<td name="stuComment"><?php echo $comment['comment']; ?></td>
						<td class="text-center">
							<?php if(0 == $comment['status']) { ?>
								<a href="<?php echo base_url();?>Welcome_IF/editCommnetTutor?&id=<?php echo $comment['id'] ?>"><span class="mdi mdi-checkbox-marked-outline mdi-24px text-info" data-toggle ="tooltip" title="not validated"></span></a>
							<?php } ?>
							<?php if(1 == $comment['status']) { ?>
							<a href="#" class="btn disabled" role="button" aria-disabled="true"><span class="mdi mdi-checkbox-marked-outline mdi-24px text-info" data-toggle ="tooltip" title="validate"></span></a>
						
							<?php	} ?>
						</td>
					</tr>
				</tbody>
				<?php endforeach ?>
			</table>
		</div>
	</div>
</div>
