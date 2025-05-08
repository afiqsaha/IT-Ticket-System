<?php 
session_start();
include('admin/includes/config.php');

$email = $_POST['technician_email'];
$password=md5($_POST['technician_password']);

$sql = "SELECT * FROM tbladmin WHERE Email = '$email' AND Password='$password' AND UserType=0";
$result =  mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){

	$row = mysqli_fetch_assoc($result);

	$_SESSION['aid']=$row['ID'];
    $_SESSION['uname']=$row['AdminuserName'];
    $_SESSION['utype']=$row['UserType'];

	echo "<script type='text/javascript'> document.location = 'admin/dashboard.php'; </script>";
} else {
	echo "<script>alert('Email and password not match. Please try again.');</script>";
	echo "<script type='text/javascript'> document.location = 'TechnLgn.php'; </script>";
}
