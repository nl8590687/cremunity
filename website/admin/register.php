<?php

$weburl='cm_ailemon_wang';

$uName='';
$uPwd='';

//echo $_POST['uName'] . $_POST['uPwd'] . $_POST['uPwd2'] . $_POST['uRealname'] . $_POST['uTel'] . $_POST['uEmail'] . $_POST['uCity'];
//echo !empty($_POST['uName'])&& !empty($_POST['uPwd'])&& !empty($_POST['uPwd2'])&& !empty($_POST['uRealname'])&& !empty($_POST['uTel'])&& !empty($_POST['uEmail'])&& !empty($_POST['uCity']);

//首先检查是否有POST注册
if(!empty($_POST['uName'])&& !empty($_POST['uPwd'])&& !empty($_POST['uPwd2'])&& !empty($_POST['uSex'])&& !empty($_POST['uRealname'])&& !empty($_POST['uTel'])&& !empty($_POST['uEmail'])&& !empty($_POST['uCity']))
{
	//echo 'test page';
	
	$uName = $_POST['uName'];
	$uPwd = $_POST['uPwd'];
	
	$uPwd=strtoupper($uPwd);
	$uPwd=md5('cmuser' . $uPwd . 'pwd');    //加盐
	$uPwd=strtoupper($uPwd);
	
	$con = mysqli_connect("localhost","root","123456");
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}
	//选取数据库 cremunity
	mysqli_select_db($con,"cremunity");
	
	//添加用户数据在userinfo:  user information
	$sql = "
	CALL ADD_USERINFO('" . $uName . "', '" . $uPwd . "');
	";
	$r = mysqli_query($con,$sql);
	
	if ($r)
	{
		//echo '注册成功';
		echo '<script> alert("注册成功 !"); location.replace (".") </script>'; 
		
		//设置cookie
		setcookie($weburl.'_username',$GLOBALS['uName'],time()+2*7*24*3600,'/');
		setcookie($weburl.'_password',strtoupper($uPwd),time()+2*7*24*3600,'/');
	}
	else
	{
		//echo '失败';
		echo '<script> alert("注册失败 !"); location.replace ("register.php") </script>';  
	}
	
	mysqli_close($con);
	
	exit;
}


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
';
if(false)
echo '
		<div class="alert alert-warning" role="alert">
			<strong>Warning!</strong> Best check yo self, you\'re not looking too good.
		</div>
';
if(false)
echo '
		<div class="alert alert-success" role="alert">
			<strong>Well done!</strong> You successfully read this important alert message.
		</div>
';
echo '
	<div class="login-logo">
		<a href=".."><img src="images/logo.png" alt=""/></a>
	</div>
	<h2 class="form-heading">新用户注册</h2>
	<form class="form-signin app-cam" id="uSignUp" action="register.php" method="post" accept-charset="utf-8">
		<p> 请输入要注册账号的信息：</p>
		<input type="text" id="unamebox" name="uName" class="form-control1" placeholder="请输入用户名(一旦注册，不可修改)" autofocus="">
		<input type="password" id="pswdbox" name="uPwd" class="form-control1" placeholder="请输入密码" onblur="checkpswd()">
		<input type="password" id="pswdbox2" name="uPwd2" class="form-control1" placeholder="请再次确认密码" onblur="checkpswd()">
		<div class="form-group has-error">
			<label id="msg_pswd" class="control-label" for="inputError1" style="visibility: hidden;">两次密码不一致</label>
		</div>
		
      <p> 请输入你的个人信息</p>
	  <div class="radios">
			<label for="radio-01" class="label_radio" id="genderbox" name="uGender">
			性别:
            <input type="radio" id="genderbox0" name="uSex" value="male" checked> Male
			<input type="radio" id="genderbox1" name="uSex" value="female"> Female
			</label>
	  </div>
      <input type="text" id="realnamebox" name="uRealname" class="form-control1" placeholder="真实姓名" autofocus="">
      <input type="text" id="telbox" name="uTel" class="form-control1" placeholder="手机号" autofocus="">
      <input type="text" id="emailbox" name="uEmail" class="form-control1" placeholder="Email" autofocus="">
      <input type="text" id="citybox" name="uCity" class="form-control1" placeholder="省份/城市" autofocus="">
      
	  
      <label class="checkbox-custom check-success">
          <input type="checkbox" value="agree this condition" id="checkbox1" onclick="func_agree()"> <label for="checkbox1">我同意<a href="#">服务条款和用户隐私策略</a></label>
      </label>
      <button id="button_submit" class="btn btn-lg btn-success1 btn-block" type="submit" onclick="myfunction()" disabled="disabled"> 确 认 注 册 </button>
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

<script language=javascript> 
/* 
* A JavaScript implementation of the RSA Data Security, Inc. MD5 Message 
* Digest Algorithm, as defined in RFC 1321. 
* Copyright (C) Paul Johnston 1999 - 2000. 
* Updated by Greg Holt 2000 - 2001. 
* See http://pajhome.org.uk/site/legal.html for details. 
*/ 
var hex_chr = "0123456789abcdef"; 
function rhex(num) 
{ 
str = ""; 
for(j = 0; j <= 3; j++) 
str += hex_chr.charAt((num >> (j * 8 + 4)) & 0x0F) + 
hex_chr.charAt((num >> (j * 8)) & 0x0F); 
return str; 
} 
function str2blks_MD5(str) 
{ 
nblk = ((str.length + 8) >> 6) + 1; 
blks = new Array(nblk * 16); 
for(i = 0; i < nblk * 16; i++) blks[i] = 0; 
for(i = 0; i < str.length; i++) 
blks[i >> 2] |= str.charCodeAt(i) << ((i % 4) * 8); 
blks[i >> 2] |= 0x80 << ((i % 4) * 8); 
blks[nblk * 16 - 2] = str.length * 8; 
return blks; 
} 
function add(x, y) 
{ 
var lsw = (x & 0xFFFF) + (y & 0xFFFF); 
var msw = (x >> 16) + (y >> 16) + (lsw >> 16); 
return (msw << 16) | (lsw & 0xFFFF); 
} 
function rol(num, cnt) 
{ 
return (num << cnt) | (num >>> (32 - cnt)); 
} 
function cmn(q, a, b, x, s, t) 
{ 
return add(rol(add(add(a, q), add(x, t)), s), b); 
} 
function ff(a, b, c, d, x, s, t) 
{ 
return cmn((b & c) | ((~b) & d), a, b, x, s, t); 
} 
function gg(a, b, c, d, x, s, t) 
{ 
return cmn((b & d) | (c & (~d)), a, b, x, s, t); 
} 
function hh(a, b, c, d, x, s, t) 
{ 
return cmn(b ^ c ^ d, a, b, x, s, t); 
} 
function ii(a, b, c, d, x, s, t) 
{ 
return cmn(c ^ (b | (~d)), a, b, x, s, t); 
} 
function MD5(str) 
{ 
x = str2blks_MD5(str); 
var a = 1732584193; 
var b = -271733879; 
var c = -1732584194; 
var d = 271733878; 
for(i = 0; i < x.length; i += 16) 
{ 
var olda = a; 
var oldb = b; 
var oldc = c; 
var oldd = d; 
a = ff(a, b, c, d, x[i+ 0], 7 , -680876936); 
d = ff(d, a, b, c, x[i+ 1], 12, -389564586); 
c = ff(c, d, a, b, x[i+ 2], 17, 606105819); 
b = ff(b, c, d, a, x[i+ 3], 22, -1044525330); 
a = ff(a, b, c, d, x[i+ 4], 7 , -176418897); 
d = ff(d, a, b, c, x[i+ 5], 12, 1200080426); 
c = ff(c, d, a, b, x[i+ 6], 17, -1473231341); 
b = ff(b, c, d, a, x[i+ 7], 22, -45705983); 
a = ff(a, b, c, d, x[i+ 8], 7 , 1770035416); 
d = ff(d, a, b, c, x[i+ 9], 12, -1958414417); 
c = ff(c, d, a, b, x[i+10], 17, -42063); 
b = ff(b, c, d, a, x[i+11], 22, -1990404162); 
a = ff(a, b, c, d, x[i+12], 7 , 1804603682); 
d = ff(d, a, b, c, x[i+13], 12, -40341101); 
c = ff(c, d, a, b, x[i+14], 17, -1502002290); 
b = ff(b, c, d, a, x[i+15], 22, 1236535329); 
a = gg(a, b, c, d, x[i+ 1], 5 , -165796510); 
d = gg(d, a, b, c, x[i+ 6], 9 , -1069501632); 
c = gg(c, d, a, b, x[i+11], 14, 643717713); 
b = gg(b, c, d, a, x[i+ 0], 20, -373897302); 
a = gg(a, b, c, d, x[i+ 5], 5 , -701558691); 
d = gg(d, a, b, c, x[i+10], 9 , 38016083); 
c = gg(c, d, a, b, x[i+15], 14, -660478335); 
b = gg(b, c, d, a, x[i+ 4], 20, -405537848); 
a = gg(a, b, c, d, x[i+ 9], 5 , 568446438); 
d = gg(d, a, b, c, x[i+14], 9 , -1019803690); 
c = gg(c, d, a, b, x[i+ 3], 14, -187363961); 
b = gg(b, c, d, a, x[i+ 8], 20, 1163531501); 
a = gg(a, b, c, d, x[i+13], 5 , -1444681467); 
d = gg(d, a, b, c, x[i+ 2], 9 , -51403784); 
c = gg(c, d, a, b, x[i+ 7], 14, 1735328473); 
b = gg(b, c, d, a, x[i+12], 20, -1926607734); 
a = hh(a, b, c, d, x[i+ 5], 4 , -378558); 
d = hh(d, a, b, c, x[i+ 8], 11, -2022574463); 
c = hh(c, d, a, b, x[i+11], 16, 1839030562); 
b = hh(b, c, d, a, x[i+14], 23, -35309556); 
a = hh(a, b, c, d, x[i+ 1], 4 , -1530992060); 
d = hh(d, a, b, c, x[i+ 4], 11, 1272893353); 
c = hh(c, d, a, b, x[i+ 7], 16, -155497632); 
b = hh(b, c, d, a, x[i+10], 23, -1094730640); 
a = hh(a, b, c, d, x[i+13], 4 , 681279174); 
d = hh(d, a, b, c, x[i+ 0], 11, -358537222); 
c = hh(c, d, a, b, x[i+ 3], 16, -722521979); 
b = hh(b, c, d, a, x[i+ 6], 23, 76029189); 
a = hh(a, b, c, d, x[i+ 9], 4 , -640364487); 
d = hh(d, a, b, c, x[i+12], 11, -421815835); 
c = hh(c, d, a, b, x[i+15], 16, 530742520); 
b = hh(b, c, d, a, x[i+ 2], 23, -995338651); 
a = ii(a, b, c, d, x[i+ 0], 6 , -198630844); 
d = ii(d, a, b, c, x[i+ 7], 10, 1126891415); 
c = ii(c, d, a, b, x[i+14], 15, -1416354905); 
b = ii(b, c, d, a, x[i+ 5], 21, -57434055); 
a = ii(a, b, c, d, x[i+12], 6 , 1700485571); 
d = ii(d, a, b, c, x[i+ 3], 10, -1894986606); 
c = ii(c, d, a, b, x[i+10], 15, -1051523); 
b = ii(b, c, d, a, x[i+ 1], 21, -2054922799); 
a = ii(a, b, c, d, x[i+ 8], 6 , 1873313359); 
d = ii(d, a, b, c, x[i+15], 10, -30611744); 
c = ii(c, d, a, b, x[i+ 6], 15, -1560198380); 
b = ii(b, c, d, a, x[i+13], 21, 1309151649); 
a = ii(a, b, c, d, x[i+ 4], 6 , -145523070); 
d = ii(d, a, b, c, x[i+11], 10, -1120210379); 
c = ii(c, d, a, b, x[i+ 2], 15, 718787259); 
b = ii(b, c, d, a, x[i+ 9], 21, -343485551); 
a = add(a, olda); 
b = add(b, oldb); 
c = add(c, oldc); 
d = add(d, oldd); 
} 
return rhex(a) + rhex(b) + rhex(c) + rhex(d); 
} 

function checkpswd()
{
	var input_pswdbox = document.getElementById(\'pswdbox\')
	var input_pswdbox2 = document.getElementById(\'pswdbox2\')
	var msg_pswd = document.getElementById(\'msg_pswd\')
	
	var passwd = input_pswdbox.value
	var passwd2 = input_pswdbox2.value
	if(passwd != passwd2)
	{
		
		msg_pswd.style="visibility: visible;"
	}
	else
	{
		msg_pswd.style="visibility: hidden;"
	}
}

function func_agree()
{
	var button_submit = document.getElementById(\'button_submit\')
	var checkbox1 = document.getElementById(\'checkbox1\')
	if(checkbox1.checked)
	{
		button_submit.disabled=""
	}
	else
	{
		button_submit.disabled="disabled"
	}
}

function myfunction()
{
	var input_pswdbox = document.getElementById(\'pswdbox\')
	var input_pswdbox2 = document.getElementById(\'pswdbox2\')
	var passwd = input_pswdbox.value
	var passwd2 = input_pswdbox2.value
	if(passwd == passwd2)
	{
		var passwd_md5 = MD5(passwd)
		input_pswdbox.value = passwd_md5
		input_pswdbox2.value = passwd_md5
	}
	else
	{
		input_pswdbox.value = ""
		input_pswdbox2.value = ""
	}
	
}

</script>

</html>

';




?>