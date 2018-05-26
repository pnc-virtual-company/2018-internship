<div class="container row-fluid">
	<div id="accordion">
		<div class="card">
			<form action="<?php echo base_url();?>cStudent/weekReport" method="post" class="addReprot">
				<div class="card-header text-center bg-info" id="headingOne" data-toggle="collapse" data-target="#firstday" aria-expanded="true" aria-controls="firstday">
					<h5 class="mb-0 text-white"><strong>Monday</strong></h5>
				</div>

				<div id="firstday" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body rounded">
						<?php foreach ($worklog as $workLog):?>
							<table class="table table-bordered table-hover" id="tableWorkLog">
								<tbody class="bg-white">
									<tr>
										<th class="bg-info text-white text-center table-fixed"><br><br>Date & Time</th>
										<td>
											<input class="form-control" type="date" name="date" value="<?php echo $workLog['date'] ?>"><br>
											<div class="row time">
												<div class="col-md-6">
													<input class="form-control" type="time" placeholder="Start time" name="starttime" value="<?php echo $workLog['starttime'] ?>">
												</div>
												<div class="col-md-6">
													<input class="form-control" type="time" placeholder="End time" name="endtime" value="<?php echo $workLog['endtime'] ?>"><br>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Work Activities</th>
										<td>
											<textarea class="col-md-12 form-group" name="activities" id="" rows="4"  placeholder="..."><?php echo $workLog['workactivities'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>What did you learn?</th>
										<td>
											<textarea class="col-md-12 form-group" name="yourlearn" id="" rows="4"  placeholder="..."><?php echo $workLog['youhavelearn'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Difficulties/ Issues</th>
										<td>
											<textarea class="col-md-12 form-group" name="issues" id="" rows="4"  placeholder="..."><?php echo $workLog['issues'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width:15em;"><br><br>Solutions</th>
										<td>
											<textarea class="col-md-12 form-group" name="solution" id="" rows="4"  placeholder="..."><?php echo $workLog['solutions'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>To Do (Plan)</th>
										<td>
											<textarea class="col-md-12 form-group" name="todo" id="" rows="4"  placeholder="..."><?php echo $workLog['todo'] ?></textarea>
										</td>
									</tr>
									<tr>					
										<th rowspan="2" class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Comment</th>
										<td>
											<textarea class="col-md-12 form-group" name="comment" id="" rows="4" placeholder="..."><?php echo $workLog['comment'] ?></textarea>
										</td>
									</tr>
									<tr>
										<td class="text-right">
											<button type="submit" class="btn btn-outline-success" name="btn-submit">Save report</button>
										</td>
									</tr>
								</tbody>
							</table>
						<?php endforeach ?>
					</div>
				</div>
			</form>
		</div>

		<!-- ================ -->
		<div class="card">
			<form action="<?php echo base_url();?>cStudent/weekReport" method="post" class="addReprot">
				<div class="card-header text-center bg-info" id="headingTwo" data-toggle="collapse" data-target="#secounday" aria-expanded="true" aria-controls="secounday">
					<h5 class="mb-0 text-white"><strong>Tuesday</strong></h5>
				</div>

				<div id="secounday" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					<div class="card-body">
						<?php foreach ($worklog as $workLog):?>
							<table class="table table-bordered table-hover" id="tableWorkLog">
								<tbody class="bg-white">
									<tr>
										<th class="bg-info text-white text-center table-fixed"><br><br>Date & Time</th>
										<td>
											<input class="form-control" type="date" name="date" value="<?php echo $workLog['date'] ?>"><br>
											<div class="row time">
												<div class="col-md-6">
													<input class="form-control" type="time" placeholder="Start time" name="starttime" value="<?php echo $workLog['starttime'] ?>">
												</div>
												<div class="col-md-6">
													<input class="form-control" type="time" placeholder="End time" name="endtime" value="<?php echo $workLog['endtime'] ?>"><br>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Work Activities</th>
										<td>
											<textarea class="col-md-12 form-group" name="activities" id="" rows="4"  placeholder="..."><?php echo $workLog['workactivities'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>What did you learn?</th>
										<td>
											<textarea class="col-md-12 form-group" name="yourlearn" id="" rows="4"  placeholder="..."><?php echo $workLog['youhavelearn'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Difficulties/ Issues</th>
										<td>
											<textarea class="col-md-12 form-group" name="issues" id="" rows="4"  placeholder="..."><?php echo $workLog['issues'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width:15em;"><br><br>Solutions</th>
										<td>
											<textarea class="col-md-12 form-group" name="solution" id="" rows="4"  placeholder="..."><?php echo $workLog['solutions'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>To Do (Plan)</th>
										<td>
											<textarea class="col-md-12 form-group" name="todo" id="" rows="4"  placeholder="..."><?php echo $workLog['todo'] ?></textarea>
										</td>
									</tr>
									<tr>					
										<th rowspan="2" class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Comment</th>
										<td>
											<textarea class="col-md-12 form-group" name="comment" id="" rows="4" placeholder="..."><?php echo $workLog['comment'] ?></textarea>
										</td>
									</tr>
									<tr>
										<td class="text-right">
											<button type="submit" class="btn btn-outline-success" name="btn-submit">Save report</button>
										</td>
									</tr>
								</tbody>
							</table>
						<?php endforeach ?>
					</div>
				</div>
			</form>
		</div>

		<!-- ============= -->
		<div class="card">
			<form action="<?php echo base_url();?>cStudent/weekReport" method="post" class="addReprot">
				<div class="card-header text-center bg-info" id="headingThree" data-toggle="collapse" data-target="#thirday" aria-expanded="true" aria-controls="thirday">
					<h5 class="mb-0 text-white"><strong>Wednesday</strong></h5>
				</div>

				<div id="thirday" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					<div class="card-body">
						<?php foreach ($worklog as $workLog):?>
							<table class="table table-bordered table-hover" id="tableWorkLog">
								<tbody class="bg-white">
									<tr>
										<th class="bg-info text-white text-center table-fixed"><br><br>Date & Time</th>
										<td>
											<input class="form-control" type="date" name="date" value="<?php echo $workLog['date'] ?>"><br>
											<div class="row time">
												<div class="col-md-6">
													<input class="form-control" type="time" placeholder="Start time" name="starttime" value="<?php echo $workLog['starttime'] ?>">
												</div>
												<div class="col-md-6">
													<input class="form-control" type="time" placeholder="End time" name="endtime" value="<?php echo $workLog['endtime'] ?>"><br>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Work Activities</th>
										<td>
											<textarea class="col-md-12 form-group" name="activities" id="" rows="4"  placeholder="..."><?php echo $workLog['workactivities'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>What did you learn?</th>
										<td>
											<textarea class="col-md-12 form-group" name="yourlearn" id="" rows="4"  placeholder="..."><?php echo $workLog['youhavelearn'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Difficulties/ Issues</th>
										<td>
											<textarea class="col-md-12 form-group" name="issues" id="" rows="4"  placeholder="..."><?php echo $workLog['issues'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width:15em;"><br><br>Solutions</th>
										<td>
											<textarea class="col-md-12 form-group" name="solution" id="" rows="4"  placeholder="..."><?php echo $workLog['solutions'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>To Do (Plan)</th>
										<td>
											<textarea class="col-md-12 form-group" name="todo" id="" rows="4"  placeholder="..."><?php echo $workLog['todo'] ?></textarea>
										</td>
									</tr>
									<tr>					
										<th rowspan="2" class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Comment</th>
										<td>
											<textarea class="col-md-12 form-group" name="comment" id="" rows="4" placeholder="..."><?php echo $workLog['comment'] ?></textarea>
										</td>
									</tr>
									<tr>
										<td class="text-right">
											<button type="submit" class="btn btn-outline-success" name="btn-submit">Save report</button>
										</td>
									</tr>
								</tbody>
							</table>
						<?php endforeach ?>
					</div>
				</div>
			</form>
		</div>

		<!-- =================== -->
		<div class="card">
			<form action="<?php echo base_url();?>cStudent/weekReport" method="post" class="addReprot">
				<div class="card-header text-center bg-info" id="headingFour" data-toggle="collapse" data-target="#fourthday" aria-expanded="true" aria-controls="fourthday">
					<h5 class="mb-0 text-white"><strong>Thursday</strong></h5>
				</div>

				<div id="fourthday" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
					<div class="card-body">
						<?php foreach ($worklog as $workLog):?>
							<table class="table table-bordered table-hover" id="tableWorkLog">
								<tbody class="bg-white">
									<tr>
										<th class="bg-info text-white text-center table-fixed"><br><br>Date & Time</th>
										<td>
											<input class="form-control" type="date" name="date" value="<?php echo $workLog['date'] ?>"><br>
											<div class="row time">
												<div class="col-md-6">
													<input class="form-control" type="time" placeholder="Start time" name="starttime" value="<?php echo $workLog['starttime'] ?>">
												</div>
												<div class="col-md-6">
													<input class="form-control" type="time" placeholder="End time" name="endtime" value="<?php echo $workLog['endtime'] ?>"><br>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Work Activities</th>
										<td>
											<textarea class="col-md-12 form-group" name="activities" id="" rows="4"  placeholder="..."><?php echo $workLog['workactivities'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>What did you learn?</th>
										<td>
											<textarea class="col-md-12 form-group" name="yourlearn" id="" rows="4"  placeholder="..."><?php echo $workLog['youhavelearn'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Difficulties/ Issues</th>
										<td>
											<textarea class="col-md-12 form-group" name="issues" id="" rows="4"  placeholder="..."><?php echo $workLog['issues'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width:15em;"><br><br>Solutions</th>
										<td>
											<textarea class="col-md-12 form-group" name="solution" id="" rows="4"  placeholder="..."><?php echo $workLog['solutions'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>To Do (Plan)</th>
										<td>
											<textarea class="col-md-12 form-group" name="todo" id="" rows="4"  placeholder="..."><?php echo $workLog['todo'] ?></textarea>
										</td>
									</tr>
									<tr>					
										<th rowspan="2" class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Comment</th>
										<td>
											<textarea class="col-md-12 form-group" name="comment" id="" rows="4" placeholder="..."><?php echo $workLog['comment'] ?></textarea>
										</td>
									</tr>
									<tr>
										<td class="text-right">
											<button type="submit" class="btn btn-outline-success" name="btn-submit">Save report</button>
										</td>
									</tr>
								</tbody>
							</table>
						<?php endforeach ?>
					</div>
				</div>
			</form>
		</div>
		<!-- ===================== -->
		<div class="card">
			<form action="<?php echo base_url();?>cStudent/weekReport" method="post" class="addReprot">
				<div class="card-header text-center bg-info" id="headingFive" data-toggle="collapse" data-target="#fifthday" aria-expanded="true" aria-controls="fifthday">
					<h5 class="mb-0 text-white"><strong>Friday</strong></h5>
				</div>

				<div id="fifthday" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
					<div class="card-body">
						<?php foreach ($worklog as $workLog):?>
							<table class="table table-bordered table-hover" id="tableWorkLog">
								<tbody class="bg-white">
									<tr>
										<th class="bg-info text-white text-center table-fixed"><br><br>Date & Time</th>
										<td>
											<input class="form-control" type="date" name="date" value="<?php echo $workLog['date'] ?>"><br>
											<div class="row time">
												<div class="col-md-6">
													<input class="form-control" type="time" placeholder="Start time" name="starttime" value="<?php echo $workLog['starttime'] ?>">
												</div>
												<div class="col-md-6">
													<input class="form-control" type="time" placeholder="End time" name="endtime" value="<?php echo $workLog['endtime'] ?>"><br>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Work Activities</th>
										<td>
											<textarea class="col-md-12 form-group" name="activities" id="" rows="4"  placeholder="..."><?php echo $workLog['workactivities'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>What did you learn?</th>
										<td>
											<textarea class="col-md-12 form-group" name="yourlearn" id="" rows="4"  placeholder="..."><?php echo $workLog['youhavelearn'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Difficulties/ Issues</th>
										<td>
											<textarea class="col-md-12 form-group" name="issues" id="" rows="4"  placeholder="..."><?php echo $workLog['issues'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width:15em;"><br><br>Solutions</th>
										<td>
											<textarea class="col-md-12 form-group" name="solution" id="" rows="4"  placeholder="..."><?php echo $workLog['solutions'] ?></textarea>
										</td>
									</tr>
									<tr>
										<th class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>To Do (Plan)</th>
										<td>
											<textarea class="col-md-12 form-group" name="todo" id="" rows="4"  placeholder="..."><?php echo $workLog['todo'] ?></textarea>
										</td>
									</tr>
									<tr>					
										<th rowspan="2" class="bg-info text-white text-center table-fixed" style="width: 15em;"><br><br>Comment</th>
										<td>
											<textarea class="col-md-12 form-group" name="comment" id="" rows="4" placeholder="..."><?php echo $workLog['comment'] ?></textarea>
										</td>
									</tr>
									<tr>
										<td class="text-right">
											<button type="submit" class="btn btn-outline-success" name="btn-submit">Save report</button>
										</td>
									</tr>
								</tbody>
							</table>
						<?php endforeach ?>
					</div>
				</div>
			</form>
		</div>
		<div class="row">
			<div class="col-md-12 text-right">
				<!-- <form action="<?php echo base_url();?>cStudent/weekReport" method="post" class="addReprot"> -->
				<form action="">
					<textarea class="col-md-12 form-group" name="" id="" rows="4" placeholder="Reflections for this week:"></textarea>
					<button type="submit" class="btn btn-outline-success" name="btn-submit" value="Save report" title="Do you want to save your week reflections?">Save Week Reflections</button>
					<button type="btn-submit" class="btn btn-outline-warning" name="btn-submit" value="Save report" title="Do you want to comment your report for this week?">Commit weekly reprot</button>
				</form>
			</div>
		</div>
	</div>
</div>