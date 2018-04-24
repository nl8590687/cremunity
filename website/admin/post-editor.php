<?php

$isnew = True;
if($isnew == True)
	$pagetitle = '撰写新文章';
else
	$pagetitle = '编辑文章';
echo '

<!DOCTYPE HTML>
<html>
';
echo '
<head>
<title>' . $pagetitle . ' - Cremunity</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="" />

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
';

echo '
<body>
<div id="wrapper">
';
require 'includes/navbar.php';
echo '
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>' . $pagetitle . '</h3>
  	         
        <div class="col-md-256 inbox_right">
        	<div class="Compose-Message">               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        文本编辑器
                    </div>
                    <div class="panel-body">
                        
						
						<!--<div class="alert alert-info">
                            Please fill details to send a new message
                        </div>
                        <hr>-->
						
						<div class="form-group">
							<!--<label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>-->
							<div class="col-sm-256">
								<input type="text" class="form-control1" id="focusedinput" placeholder="请在这里输入文章标题">
							</div>
						</div>
						
						
						<div class="form-group">
									<label for="selector1" class="col-sm-4 control-label">文章分类</label>
									<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
										<option>默认分类</option>
										<option>分类1</option>
										<option>分类2</option>
										<option>分类3</option>
									</select></div>
								</div>
						</br></br>
                        <!--<label>Enter Recipient Name : </label>
                        <input type="text" class="form-control1 control3">
                        <label>Enter Subject :  </label>
                        <input type="text" class="form-control1 control3">-->
                        <label>正文</label>
                        <textarea rows="6" class="form-control1 control2"></textarea>
                        <hr>
                        <a href="#" class="btn btn-warning btn-warng1"><span class="glyphicon glyphicon-envelope tag_02"></span> 发布文章 </a>&nbsp;
                      <a href="#" class="btn btn-success btn-warng1"><span class="glyphicon glyphicon-tags tag_01"></span> 保存草稿 </a>
                    </div>
                 </div>
              </div>
         </div>
';

if(False)
echo ' 
		 <div class="col-md-4 email-list1">
		 
		 
		 
		 
		 
		 
               <ul class="collection">
                    <li class="collection-item avatar email-unread">
                      <i class="fa fa-users icon_1"></i>
                      <div class="avatar_left">
                      	<span class="email-title">Social</span>
                        <p class="truncate grey-text ultra-small">Lorem Ipsum is simply dummy text of.</p>
                      </div>
                      <a href="#!" class="secondary-content"><span class="new badge blue">4</span></a>
                      <div class="clearfix"> </div>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="fa fa-exclamation-circle icon_2"></i>
                      <div class="avatar_left">
                      	<span class="email-title">Updates</span>
                        <p class="truncate grey-text ultra-small">It is a long established fact that a reader.</p>
                      </div>
                      <a href="#!" class="secondary-content"><span class="new badge red">4</span></a>
                      <div class="clearfix"> </div>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="fa fa-tag icon_3"></i>
                      <div class="avatar_left">
                      	<span class="email-title">Promotions</span>
                        <p class="truncate grey-text ultra-small">There are many variations of passages.</p>
                      </div>
                      <a href="#!" class="secondary-content"><span class="new badge blue1">4</span></a>
                      <div class="clearfix"> </div>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="icon_4">G</i>
                      <div class="avatar_left">
                      	<span class="email-title">Gmail</span>
                        <p class="truncate grey-text ultra-small">Sed ut perspiciatis unde omnis iste.</p>
                      </div>
                      <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
                      <div class="clearfix"> </div>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="icon_4 icon_5">F</i>
                      <div class="avatar_left">
                      	<span class="email-title">Facebook</span>
                        <p class="truncate grey-text ultra-small">But I must explain to you how.</p>
                      </div>
                      <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
                      <div class="clearfix"> </div>
                    </li>
                    <li class="collection-item avatar email-unread email_last">
                      <i class="icon_4 icon_6">T</i>
                      <div class="avatar_left">
                      	<span class="email-title">Twitter</span>
                        <p class="truncate grey-text ultra-small">At vero eos et accusamus et iusto odio.</p>
                      </div>
                      <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
                      <div class="clearfix"> </div>
                    </li>
              </ul>
         <div class="content-box  mrg15B">
          <div class="content-box-wrapper text-center">
            <h4 class="content-box-header">
            Chat
            <small>(Online friends)</small>
            </h4>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="images/1.png" alt="">
                <div class="small-badge bg-red"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="images/2.png" alt="">
                <div class="small-badge bg-orange"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="images/3.png" alt="">
                <div class="small-badge bg-red"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="images/4.png" alt="">
                <div class="small-badge bg-green1"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="images/5.png" alt="">
                <div class="small-badge bg-orange"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="images/1.png" alt="">
                <div class="small-badge bg-red"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="images/2.png" alt="">
                <div class="small-badge bg-green1"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="images/3.png" alt="">
                <div class="small-badge bg-orange"></div>
            </div>
          </div>
        </div>
        </div>
';
echo '
         <div class="clearfix"> </div>
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