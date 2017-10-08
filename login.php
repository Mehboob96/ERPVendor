<?php
session_start();
ini_set('display_errors',0);

if($_POST['submit']){

	require 'con.php';

	$username = mysql_real_escape_string($_POST['username']);
	$password = $_POST['password'];


	$result = mysqli_query($con,"SELECT * FROM vendor_login WHERE username='$username' and password='$password'");

	$count=mysqli_num_rows($result);

	if($count!=1){
		echo "<script>alert('Invalid Username or Password')</script>";
		echo"<script>window.open('vender.php','_self')</script>";

	}else{
		session_start();
		$_SESSION['v_username'] = $username;
		echo"<script>window.open('home.php','_self')</script>";
	}

}else{
	echo "<script>alert('Please Enter Username and Password First')</script>";
	echo"<script>window.open('vender.php','_self')</script>";
}
?>