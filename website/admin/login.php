<?php

$weburl='cm_ailemon_wang';

$uName='';
$uPwd='';

$islogin = False;

// 如果cookie存在，那么用户已经登陆，直接跳转
if (!empty($_COOKIE[$weburl.'_username'])&&!empty($_COOKIE[$weburl.'_password']))
{
	$uName=$_COOKIE[$weburl.'_username'];
	$uPwd=$_COOKIE[$weburl.'_password'];
	
	$islogin = True;
	//echo 'cookie 存在';
	//$uPwd=md5(uniqid($uPwd,true));
	echo'<script> location.replace (".") </script>'; 
	exit();
}
//echo 'cookie 不存在';



$con = mysqli_connect("localhost","root","123456");
if (!$con)
{
  die('Could not connect: ' . mysqli_error());
}

//选取数据库 cremunity
mysqli_select_db($con,"cremunity");



//首先检查是否有POST登陆
if(!empty($_POST['uName'])&& !empty($_POST['uPwd']))
{
	$uName=$_POST['uName'];
	$uPwd=$_POST['uPwd'];
	//echo $uPwd.'\n';
	$uPwd=strtoupper($uPwd);
	$uPwd=md5('cmuser' . $uPwd . 'pwd');    //加盐
	
	
	//创建数据表 userinfo:  user information
	$sql = "
	SELECT * FROM USERINFO
	WHERE NAME = '" . $uName . "'
	;
	";
	$r = mysqli_query($con,$sql);
	
	if ($r)
	{
		//echo '成功';
	}
	else
	{
		//echo '失败';
	}
	
	//$rows=mysqli_affected_rows($conn);//获取行数  
	//$colums=mysqli_num_fields($res);//获取列数  
	
	$passwd='';
	while( $row = mysqli_fetch_array( $r ) )
	{
		$passwd = $row["PASSWORD"];
		//echo( "password: " .  $passwd);
		//echo( " - FIRST NAME: "  .$row["first_name"] . "<br>" );
		if(strtoupper($uPwd) == strtoupper($passwd))
		{
			//设置cookie
			
			setcookie($weburl.'_username',$GLOBALS['uName'],time()+2*7*24*3600,'/');
			//setcookie($weburl.'_password',md5(uniqid($GLOBALS['uPwd'])),time()+2*7*24*3600,'/');
			//setcookie($weburl.'_password',$GLOBALS['uPwd'],time()+2*7*24*3600,'/');
			setcookie($weburl.'_password',strtoupper($uPwd),time()+2*7*24*3600,'/');
			//echo'<script> alert("您已登陆，欢迎您!"); location.replace (".") </script>'; 
			//exit();
			
			//echo '登陆成功！';
		}
		else
		{
			//echo '<script> alert("1   '.$uPwd.'"); </script>';
			//echo '<script> alert("2   '.$uPwd_tmp.'") </script>';
			echo '<script> alert("密码错误 !"); location.replace ("login.php") </script>';  
			//echo '密码错误 !\n';
			//echo $uPwd . '\n';
			//echo $passwd . '\n';
			//exit();
		}
	}
	
	//$islogin = False;

	//检查用户是否存在  
	if($passwd == '')
	{   
		echo '<script> alert("用户不存在 !"); location.replace ("login.php") </script>';  
		$islogin = False;
		//exit();    
	}
	else
	{
		$islogin = True;
		/*
		$file='users/'.$uName;
		//echo '<script> alert("0   '.$file.'") </script>';
		$uPwd_tmp = '';
		//echo '<script> alert("2   '.$uPwd_tmp.'") </script>';
		//读取文件中的内容
		$uPwd_tmp = file_get_contents('users/'.$uName); 
		
		if($uPwd!=$uPwd_tmp)
		{
			//echo '<script> alert("1   '.$uPwd.'"); </script>';
			//echo '<script> alert("2   '.$uPwd_tmp.'") </script>';
			echo '<script> alert("密码错误 !"); location.replace ("login.php") </script>';  
			exit();
		}
		else
		{
			setcookie($weburl.'_username',$GLOBALS['uName'],time()+2*7*24*3600,'/');
			//setcookie($weburl.'_password',md5(uniqid($GLOBALS['uPwd'])),time()+2*7*24*3600,'/');
			//setcookie($weburl.'_password',$GLOBALS['uPwd'],time()+2*7*24*3600,'/');
			setcookie($weburl.'_password',$uPwd,time()+2*7*24*3600,'/');
			echo'<script> alert("您已登陆，欢迎您!"); location.replace ("index.php") </script>'; 
			exit();
		}
		*/
		
	}

	
}
				
				


if($islogin==False){
	echo '

<!DOCTYPE HTML>
<html>
<head>
<title>登陆 - Cremunity</title>
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


<body id="login">
  <div class="login-logo">
    <a href=".."><img src="images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">用户登陆</h2>
  <div class="app-cam">
	  <form id="dw__login" action="login.php" method="post" accept-charset="utf-8">
		<input id="unamebox" name="uName" type="text" class="text" value=""   placeholder="请输入用户名">
		<input id="pswdbox" name="uPwd" type="password" class="text" value=""   placeholder="请输入密码">
		<div class="submit"><input id="bt_login" type="submit" onclick="func_login()" value="登录"></div>
		<!--<div class="login-social-link">
          <a href="index.html" class="facebook">
              Facebook
          </a>
          <a href="index.html" class="twitter">
              Twitter
          </a>
        </div>-->
		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
			<li class="new_right"><p class="sign">New here ?<a href="register.php"> Sign Up</a></p></li>
			<li class="new_left"><p><a href=".."> ← 返回到Cremunity</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
<div class="copy_layout login">
';

	$arg_copyright=' login';
	require 'includes/copyright.php';

	echo '
</div>
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

function func_login()
{
	var input_pswdbox = document.getElementById(\'pswdbox\')
	var passwd = input_pswdbox.value
	var passwd_md5 = MD5(passwd)
	input_pswdbox.value = passwd_md5
}
</script>

</html>


';
}
else
{
	echo'<script> location.replace (".") </script>'; 
	exit();
}


mysqli_close($con);

?>