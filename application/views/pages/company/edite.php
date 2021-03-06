<?php
/**
 * This view allows to create a new employee
 * @copyright  Copyright (c) 2014-2017 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bbalet/skeleton
 * @since      0.1.0
 */
?>
<!-- need this style for autocomplete search -->
<style>
.pac-container {
	z-index: 99999;
}
</style>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBAjaIzPJQY_nrDt5zi2ayk1BfeQOHo7Kk&sensor=false&libraries=places"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/map-plugin/dist/locationpicker.jquery.js"></script>


<div class="container con-body">
	<a href="<?php echo base_url();?>Welcome_IF/company">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left mdi-15px text-white"></i>Back
		</button>
	</a>
	<h3 class="text-primary text-center">Edite Company</h3><br>
	<div class="row">
		<div class="border border-form rounded bg-white">	
			<br>
			<br>	
			<?php foreach ($company as $company):?>
				<?php 
					 $lat = $company['lat'];
					 $lng = $company['lng'];
				 ?>
				<form action="<?php echo base_url();?>Welcome_IF/seEediteCompany?&id=<?php echo $company['id'] ?>" method="post">
					<div class="form-row">
						<div class="form-group row col-md-6 group-col-stu">
							<label class="col-sm-4 col-form-label" for="">Company name</label>
							<div class="col-sm-8">
								<input type="text"
								name="name" id=""
								class="form-control"
								placeholder=""
								value="<?php echo $company['name'] ?>">
							</div>
						</div>
						<div class="form-group row col-md-6 group-col-stu">
							<label class="col-sm-4 col-form-label" for="">Description</label>
							<div class="col-sm-8">
								<input type="text"
								name="itemdescription" 
								id="" class="form-control"
								placeholder=""
								value="<?php echo $company['itemdescription'] ?>">
							</div>
						</div>
						<div class="form-group row col-md-6 group-col-stu">
							<label class="col-sm-4 col-form-label" for="">Company address</label>
							<div class="col-sm-8">
								<input type="text" 
								name="postaladdress"
								id="" class="form-control"
								placeholder="" 
								value="<?php echo $company['postaladdress'] ?>">
							</div>
						</div>
						<div class="form-group row col-md-6 group-col-stu">
							<label class="col-sm-4 col-form-label" for="">Location</label>
							<div class="col-sm-8">
								<input type="text"
								name="address" id="address"
								class="form-control"
								placeholder="Company Location"
								data-target="#us6-dialog"
								data-toggle="modal"
								value="<?php echo $company['location']; ?>">
							</div>
						</div>
						<div class="form-group row col-md-6 group-col-stu">
							<label class="col-sm-4 col-form-label" for="">Phone number</label>
							<div class="col-sm-8">
								<input type="text"
								name="phone" id="" 
								class="form-control"
								placeholder=""
								value="<?php echo $company['phone'] ?>">
							</div>
						</div>
						<div class="form-group row col-md-6 group-col-stu">
							<label class="col-sm-4 col-form-label" for="">Website</label>
							<div class="col-sm-8">
								<input type="text"
								name="url" id="" 
								class="form-control" 
								placeholder=""
								value="<?php echo $company['url'] ?>">
							</div>
						</div><br><br><br>
						<div class="col-md-4"></div>
						<div class="col-md-2 text-center">
							<button class="btn btn-outline-success"
							type="submit"
							name="btn-submit">Submit</button>
						</div>
						<div class="col-md-2 text-center">
							<button class="btn btn-outline-danger pull-right"
							type="reset"
							name="btn-cancel">Cancel</button>
							<br>
							<br>
						</div>

						<div class="col-md-4"></div>
					</div>
					
					<!-- Map pop up -->
					<div id="us6-dialog" class="modal fade">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button"
									class="close"
									data-dismiss="modal"
									aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title">Company location</h4>
							</div>
							<div class="modal-body" >
								<div class="form-group">
									<label class="col-sm-2 control-label">Location:</label>
									<div class="col-sm-10">
										<input type="text" 
										name="address"
										class="form-control"
										id="us3-address" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Radius:</label>
									<div class="col-sm-5">
										<input type="text" 
										class="form-control"
										id="us3-radius" />
									</div>
								</div>
								<div id="us3"
								style="width: 100%; height: 400px;">
								
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="m-t-small">
								<label class="p-r-small col-sm-1 control-label">Lat.:</label>
								<div class="col-sm-3">
									<input type="hidden" 
									class="form-control"
									style="width: 110px"
									id="us3-lat" name="lat" />
								</div>
								<label class="p-r-small col-sm-2 control-label">Long.:</label>
								<div class="col-sm-3">
									<input type="hidden" 
									class="form-control"
									style="width: 110px" id="us3-lon"
									name="long" />
								</div>
								</div>
								<div class="clearfix"></div>
								<script src="<?php echo base_url(); ?>assets/map-plugin/dist/locationpicker.jquery.js"></script>
								
								<script>
								$('#us3').locationpicker({
									location: {
										 latitude: <?php echo $lat; ?>,
										 longitude: <?php echo $lng; ?>                                  },  
									radius: 300,
									inputBinding: {
										latitudeInput: $('#us3-lat'),
										longitudeInput: $('#us3-lon'),
										radiusInput: $('#us3-radius'),
										locationNameInput: $('#us3-address')
									},
									enableAutocomplete: true,
									markerIcon: 'http://www.iconsdb.com/icons/preview/tropical-blue/map-marker-2-xl.png'
								});
								$('#us6-dialog').on('shown.bs.modal', function () {
									$('#us3').locationpicker('autosize');
								});
								$(document).ready(function(){
									$('#getaddress').click(function(){ 
									    var address = $('#us3-address').val(); 
									$('#address').attr('value',address); 
									 });
								 });

							</script>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" data-dismiss="modal" id="getaddress">Update</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
			</form>
		<?php endforeach ?>
	</div> 
</div>
</div>