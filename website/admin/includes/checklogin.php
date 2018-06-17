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
	//echo'<script> location.replace (".") </script>'; 
	//exit();
}
//echo 'cookie 不存在';


?>