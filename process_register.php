<?php 

include('admin/includes/config.php');

$fullname = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if($password != $confirm_password){
	echo "<script>alert('Password and confirm password not match!');</script>";
	echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
	exit;
}

$password=md5($password);

$query=mysqli_query($con,"INSERT INTO tbluser (fullname, email, password) values('$fullname','$email','$password')");
if($query){
	echo "<script>alert('Successfully regiter. Please login to continue.');</script>";
	echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
} else {
	echo "<script>alert('Something went wrong. Please try again.');</script>";
	echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
