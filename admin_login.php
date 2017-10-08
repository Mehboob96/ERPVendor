<?php
ini_set('display_errors',0);
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href="admin_login.css" rel='stylesheet' type='text/css'>


<style type="text/css">
	#email:active{
		border: 0px !important;
	}
</style>


</head>

<title>Admin Login</title>

<body>

<!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href="admin_login.css" rel='stylesheet' type='text/css'>
<script src="admin_login.js"></script>

<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<form method="post" action="admin_log_process.php">
<div class="text-center" style="padding:50px 0">
	<div class="logo">Admin Login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="username" class="sr-only">Username</label>
						<input type="username" class="form-control" id="email" name="username">
					</div>
					<br>
					<div class="form-group">
						<label for="password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="password" name="password" style="border-bottom: 1px !important;">
					</div>
					
<!-- class='fa fa-chevron-right'></i> -->

				</div>
				<input type="submit" name="submit" class="login-button" value=">>">
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</form>
</body>
</html>