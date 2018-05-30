

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="text-center text-primary"><strong>Supervisors List</strong></h2>
        </div>
        <table id="example" class="table table-striped table-bordered bg-white">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th>Supervisor Name</th>
                <th>Company Name</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($supervisor as $supervisor):?>
            <tr>
                <td class="text-center"><?php echo $supervisor['id']; ?></td>
                <td><?php echo $supervisor['supervisorName']; ?></td>
                <td><?php echo $supervisor['name']; ?></td>
                <td class="text-center">

                    <a href="<?php echo base_url() ?>tutorDas/getSupDataDetail?&id=<?php echo $supervisor['id'];?>"><i class="mdi mdi-eye mdi-24px text-info" data-toggle ="tooltip" title="View "></i></a>
                    <!-- Feature did not complete -->
                    <!-- <a href="<?php echo base_url() ?>tutorDas/questionnair"><i class="mdi mdi-book-minus mdi-24px" style="color: #CC6600;" data-toggle ="tooltip" title=" Questionniare"></i></a> -->
                    
                </td>
            </tr>
             <?php endforeach ?>   

        	
          

        </tbody>
    </table>
    </div>
</div>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
