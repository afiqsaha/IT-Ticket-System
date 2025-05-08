<?php 
session_start();
error_reporting(0);

if(!isset($_SESSION['uid'])){ 
  header('location:login.php');
}

// Database Connection
include('admin/includes/config.php');

if(isset($_POST['update'])){
  $fname=$_POST['fullname'];
  $email=$_POST['emailid'];
  $userId=intval($_SESSION['uid']);

  $query=mysqli_query($con,"update tbluser set fullname='$fname', email='$email' where id='$userId'");
  if($query){
    echo "<script>alert('Profile details updated successfully.');</script>";
    echo "<script type='text/javascript'> document.location = 'uprofile.php'; </script>";
    } else {
    echo "<script>alert('Something went wron. Please try again.');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OSIT Fix  | Profile</title>

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
<div class="row mb-2">
<div class="col-sm-6">
<h1>Profile</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">Profile</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content"  style="padding:2%;">
  <div class="row">
    <div class="col-12" id="accordion">
      <div class="card card-primary card-outline">

        <div class="card-header">
          <h3 class="card-title">Update the Info</h3>
        </div>

        <div class="card-body">

          <?php 
          $userId=intval($_SESSION['uid']);
          $query=mysqli_query($con,"select * from tbluser where id='$userId'");
          $row=mysqli_fetch_assoc($query);
          ?>

          <form name="subadmin" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputFullname">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $row['fullname'];?>" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="emailid" name="emailid" required value="<?php echo $row['email'];?>">
              </div>
  
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="update" id="update">Update</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
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
<script src="dist/js/pages/dashboard.js"></script>
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
