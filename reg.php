<?php
ini_set('display_errors',0);
session_start();

if($_POST['submit']){

	require 'con.php';

	$username = $_POST['username'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$company = $_POST['company'];
	$password = $_POST['password'];
	$passCheck = $_POST['repassword'];
	// $repass = $_POST['pass'];

	if($password == $passCheck){
		$sql=mysqli_query($con,"INSERT INTO vendor_login values('$username','$password','$email','$company','$phonenumber')");
		if(!$sql){
			echo"<script>alert('User Already exists')</script>";
			echo"<script>window.open('vender.php','_self')</script>";
			}
		
		else{
			echo"<script>alert('Success fully Registered. page is redirected to login')</script>";
			echo"<script>window.open('vender.php','_self')</script>";
		}
	}
	else{
		echo"<script>alert('Password Does not Match')</script>";
		echo"<script>window.open('vender.php','_self')</script>";
	}

}else{
	echo "<script>alert('Pliase Fill The form first..!')</script>";
	echo"<script>window.open('vender.php','_self')</script>";
}

?>