<script src='<?php echo base_url();?>assets/assets/js/moment.min.js'></script>
<script src="<?php echo base_url();?>assets/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/assets/js/bootstrapValidator.min.js"></script>
<script src="<?php echo base_url();?>assets/assets/js/fullcalendar.min.js"></script>
<script src='<?php echo base_url();?>assets/assets/js/bootstrap-colorpicker.min.js'></script>
<script src='<?php echo base_url();?>assets/js/main.js'></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/selectMultiple/css/select2.css">
<script src='<?php echo base_url();?>assets/selectMultiple/js/select2.min.js'></script>

<div class="container">
    <!-- Notification -->
    <div class="alert"></div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div id='calendar'></div>
        </div>
    </div>
</div>
<div class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <div class="error"></div>
                <form class="form-horizontal" id="crud-form">
                    <input type="hidden" id="start">
                    <input type="hidden" id="end">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Your Email</label>
                        <div class="col-md-12">
                            <input id="userEmail" name="userEmail" type="text" class="form-control input-md" />
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Email Password</label>
                        <div class="col-md-12">
                            <input id="password" name="password" type="password" class="form-control input-md" />
                        </div>
                    </div>  
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Title</label>
                        <div class="col-md-12">
                            <input id="title" name="title" type="text" class="form-control input-md" />
                        </div>
                    </div>                            
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="description">Description</label>
                        <div class="col-md-12">
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="description">Send Email</label>
                        <div class="col-md-12">
                            <select style="width: 435px;" class="form-control" name="email" id="email">
                                <option value="">
                                    <?php foreach ($email as $email):?>
                                         <option><?php echo $email['email'];?></option>
                                    <?php endforeach ?>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="color">Color</label>
                        <div class="col-md-12">
                            <input id="color" name="color" type="text" class="form-control input-md" readonly="readonly" />
                            <span class="help-block">Click to pick a color</span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#email').select2();

        $('#email').on('select2:opening select2:closing', function( event ) {
            var $searchfield = $(this).parent().find('.select2-search__field');
            $searchfield.prop('disabled', true);
        });
    });
</script>





