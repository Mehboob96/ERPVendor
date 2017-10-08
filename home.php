<?php
ini_set('display_errors',0);
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<style type="text/css">

@import "font-awesome.min.css";
@import "font-awesome-ie7.min.css";
/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}

</style>	

</head>

<body>

<div class="container">
    <h1 class="well">Quotation Form</h1>
	<div class="col-md-12 well">
	<div class="row">
				<form method="post" action="quotation.php">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control" value=<?php echo $_SESSION['v_username'] ?> disabled="disabled">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Company Name</label>
								<input type="text" placeholder="Enter Company Name Here.." class="form-control" name="company">
							</div>
						</div>					
						<div class="form-group">
							<div class="dropdown">
								<div class="row">
								  <div class="col-md-6">
								  	<div class="form-group">
									  <label for="sel1">Select list:</label>
									  <select class="form-control" id="sel1" name="item">
									    <option value="speaker">Speaker</option>
									    <option value="tv">T.V.</option>
									    <option value="router">Router</option>
									  </select>
									</div>
								  </div>	
								</div>
								<div class="row">
									<div class="col-md-6">
  									<div class="form-group">
  									  <label for="quote">Quotation</label> 
									  <input type="text" id="quote" name="quote" class="form-control" placeholder="Quotation" aria-label="Quotation" aria-describedby="basic-addon1">
									</div>
									</div>
									<div class="col-md-6">
  									<div class="form-group">
  									  <label for="quote">Discount</label> 
									  <input type="text" id="discount" name="discount" class="form-control" placeholder="Discount" aria-label="Discount" aria-describedby="basic-addon1">
									</div>
									</div>
								</div>

							</div>	
						</div>	
						<input type="submit" class="btn btn-lg btn-info" name="submit" value="Submit">				
					</div>
				</form> 
				</div>
	</div>
	</div>


</body>
</html>