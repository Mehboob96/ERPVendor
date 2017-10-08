<?php

ini_set('display_errors',0);
session_start();

if($_POST['submit']){

	require 'con.php';
	$username = $_SESSION['v_username'];
	$company  = $_POST['company'];
	$item	  = $_POST['item'];
	$quote	  = $_POST['quote'];
	$discount = $_POST['discount'];

	$result = mysqli_query($con,"insert into parts_detail values('$username','$company','$item',$quote,$discount)");

	if($result)
	{
		echo "<script>alert('Successfully submitted')</script>";
		echo"<script>window.open('home.php','_self')</script>";
	}
	else{
		echo "<script>alert('Something went wrong')</script>";
		echo"<script>window.open('home.php','_self')</script>";	
	}


}else{
	echo "<script>alert('Please Enter the Details First')</script>";
	echo"<script>window.open('home.php','_self')</script>";
}

?>