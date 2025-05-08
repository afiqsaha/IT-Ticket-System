<?php 
session_start();
error_reporting(0);

if(!isset($_SESSION['uid'])){ 
  header('location:login.php');
}

// Database Connection
include('admin/includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OSIT Fix  | My Ticket</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body>
<div>
  <!-- Navbar -->
  <?php include_once('inc/header.php');?>
  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mt-5 mb-5">
          <div class="col-md-10 mx-auto">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Ticket No</th>
                  <th>Category</th>
                  <th>Subject</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $emailId = $_SESSION["email"];

                $sql = "SELECT * FROM tbltickets WHERE emailId = '$emailId'";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                  <td><?=$row["ticketNo"];?></td>
                  <td><?=$row["ticketCategory"];?></td>
                  <td><?=$row["ticketSubject"];?></td>
                  <td>
                   <?php $fstatus=$row['ticketStatus'];
                   if($fstatus==''): ?>
                      <button type="button" class="btn btn-secondary btn-xs">New Ticket</button>
                      <?php  elseif($fstatus=='In Process'): ?>
                      <button type="button" class="btn btn-info btn-xs"><?php echo htmlentities($fstatus);?></button>
                      <?php elseif($fstatus=='on Hold'): ?>
                      <button type="button" class="btn btn-warning btn-xs"><?php echo htmlentities($fstatus);?></button>
                      <?php elseif($fstatus=='Resolved'): ?>
                      <button type="button" class="btn btn-success btn-xs"><?php echo htmlentities($fstatus);?></button>
                      <?php endif; ?>
                  </td>
                  <td>
                    <form method="post" action="ticketdetails.php">
                      <input type="hidden" name="tnumber" value="<?=$row["ticketNo"];?>">
                      <input type="hidden" name="emailid" value="<?=$row["emailId"];?>">
                      <input type="submit" id="submit" name="submit" value="View Details" class="btn btn-primary">
                    </form>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include_once('inc/footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
