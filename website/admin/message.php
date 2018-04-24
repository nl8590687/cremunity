<?php

echo '

<!DOCTYPE HTML>
<html>
<head>
<title>查看私信 - Cremunity</title>
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
<!----webfonts--->
<!--<link href="http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">-->
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>

<body>
<div id="wrapper">

';
require 'includes/navbar.php';

echo '

<div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	     <h3>私信</h3>
		 
		 
		 
		 
	<div class="">
     <h3>用户名</h3>
      
	  
	  <div class="bs-example2">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title">Modal title</h2>
				</div>
				<div class="modal-body">
					<p>One fine body…aaaaaaaaaaaaaaaaaaaaaaaaaaaadeggegaaaaaaaaaagtrshhs</br>fsegreag</p>
					<h2>bbbb</h2>
				</div>
				
				
				<div class="col-md-12 inbox_right">
        	<div class="Compose-Message">               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        回复/新私信
                    </div>
                    <div class="panel-body">
                        
                        <label>发给 : </label>
                        <input type="text" class="form-control1 control3" placeholder="请输入用户名">
                        <!--<label>标题 :  </label>-->
                        <input type="text" class="form-control1 control3" placeholder="请输入标题">
                        <!--<label>Enter Message : </label>-->
                        <textarea rows="6" class="form-control1 control2" placeholder="请输入正文"></textarea>
					  
						<div class="modal-footer">
							<button type="button" class="btn btn-primary"> 发  送 </button>
						</div>
				
                    </div>
                 </div>
              </div>
         </div>
	
		 <div class="clearfix"> </div>
				
				
				
				
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	   </div>
	   
	   
	   
		   
		   
		   
		   
         </div>

		 
		 
';
//grid_3 grid_5
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