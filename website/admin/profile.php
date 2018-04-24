<?php

echo '
<!DOCTYPE HTML>
<html>
<head>
<title>个人资料 - Cremunity</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
 
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<div id="wrapper">
';
require 'includes/navbar.php';

echo '
		<div id="page-wrapper">
		<div class="col-md-12 graphs">
			<div class="xs">
				<h3>个人资料</h3>
				<div class="well1 white">
					<form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" ng-submit="submit()">
					<fieldset>
					<div class="form-group">
						<label class="control-label">Required</label>
						<input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
					</div>
					<div class="form-group">
						<label class="control-label">Email</label>
						<input type="email" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" ng-model="model.email" required="">
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" required="">
					</div>
					<div class="form-group">
						<label class="control-label">Url</label>
						<input type="url" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" ng-model="model.url" required="">
					</div>
					<div class="form-group">
						<label class="control-label">Number</label>
						<input type="text" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" ng-model="model.number" ng-pattern="/[0-9]/" required="">
						<p class="help-block hint-block">Numeric values from 0-***</p>
					</div>
					<div class="form-group">
						<label class="control-label normal">Date</label>
						<input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
					</div>
					<div class="form-group">
						<div class="checkbox1">
							<label>
							<input type="checkbox" ng-model="model.winner" required="" class="ng-invalid ng-invalid-required">
								Are you a winner?
							</label>
						</div>
					</div>
					<div class="form-group filled">
						<label class="control-label">Select</label>
						<select class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" required=""><option value="? undefined:undefined ?"></option>
						<option value="Select a pirate">Select a pirate</option>
						<option value="Monkey D. Luffy">Monkey D. Luffy</option>
						<option value="Roronoa Zoro">Roronoa Zoro</option>
						<option value="Tony Tony Chopper">Tony Tony Chopper</option>
						<option value="Nico Robin">Nico Robin</option>
						<option value="Bon Clay">Bon Clay</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary"> 提 交 修 改 </button>
						<!--<button type="reset" class="btn btn-default"> 清 除 </button>-->
					</div>
					</fieldset>
					</form>
				</div>
	  
			</div>
    	
			
';
$arg_copyright='';
require 'includes/copyright.php';
echo '
		</div>
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>


';



?>