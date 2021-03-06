
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="text-center text-primary"><strong>Students List</strong></h2>
            <!-- <a href="<?php echo base_url();?>supervisor/studentProfile">link</a> -->
        </div>
        <table id="studentList" class="table table-striped table-bordered bg-white" style="width:100%">
          <thead>
              <tr>
                  <th class="text-center">ID</th>
                  <th>Student Name</th>
                  <th class="text-center">Action</th>
              </tr>
          </thead>
           <tbody>
          <?php foreach ($student as $student):?>
            <tr>
                <td class="text-center"><?php echo $student['id']; ?></td>
                <td><?php echo $student['studentName']; ?></td>
                <td class="text-center">
             <a href="<?php echo base_url();?>supervisor/studentProfile?&id=<?php echo $student['id']; ?>"><span class="mdi mdi-eye mdi-24px text-info " data-toggle ="tooltip" title="View "></span></a>
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
    $('#studentList').DataTable();
} );
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
