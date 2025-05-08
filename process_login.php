<?php 
session_start();
include('admin/includes/config.php');

$email = $_POST['email'];
$password=md5($_POST['password']);

$sql = "SELECT * FROM tbluser WHERE email = '$email' AND password='$password'";
$result =  mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){

	$row = mysqli_fetch_assoc($result);

	$_SESSION["uid"] = $row["id"];
	$_SESSION["fullname"] = $row["fullname"];
	$_SESSION["email"] = $row["email"];

	echo "<script type='text/javascript'> document.location = 'Homepage.php'; </script>";
} else {
	echo "<script>alert('Email and password not match. Please try again.');</script>";
	echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
