<?php

echo '

<!DOCTYPE HTML>
<html>
<head>
<title>新用户注册 - Cremunity</title>
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
 
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
	<div class="login-logo">
		<a href="index.html"><img src="images/logo.png" alt=""/></a>
	</div>
	<h2 class="form-heading">新用户注册</h2>
	<form class="form-signin app-cam" id="uSignUp" action="register.php" method="post" accept-charset="utf-8">
		<p> 请输入要注册账号的信息：</p>
		<input type="text" id="unamebox" name="uName" class="form-control1" placeholder="请输入用户名(一旦注册，不可修改)" autofocus="">
		<input type="password" id="pswdbox" name="uPwd" class="form-control1" placeholder="请输入密码">
		<input type="password" id="pswdbox2" name="uPwd2" class="form-control1" placeholder="请再次确认密码">
		
      <p> 请输入你的个人信息</p>
      <input type="text" id="realnamebox" name="urealname" class="form-control1" placeholder="真实姓名" autofocus="">
      <input type="text" id="telbox" name="uTel" class="form-control1" placeholder="手机号" autofocus="">
      <input type="text" id="emailbox" name="uEmail" class="form-control1" placeholder="Email" autofocus="">
      <input type="text" id="citybox" name="uCity" class="form-control1" placeholder="省份/城市" autofocus="">
      <div class="radios">
        <label for="radio-01" class="label_radio">
            <input type="radio" id="genderbox" name="uGender" checked=""> Male
        </label>
        <label for="radio-02" class="label_radio">
            <input type="radio"> Female
        </label>
	  </div>
	  
      <label class="checkbox-custom check-success">
          <input type="checkbox" value="agree this condition" id="checkbox1"> <label for="checkbox1">我同意服务条款和用户隐私策略</label>
      </label>
      <button class="btn btn-lg btn-success1 btn-block" type="submit"> 确 认 注 册 </button>
      <div class="registration">
          已经注册了？请直接
          <a class="" href="login.php">
              登录
          </a>
      </div>
  </form>
';
$arg_copyright=' login register';
require 'includes/copyright.php';
echo '
</body>
</html>

';




?>