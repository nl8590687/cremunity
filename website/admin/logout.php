<?php

//执行一些注销登录的动作

$uName='';
$uPwd='';
$weburl='cm_ailemon_wang';
setcookie($weburl.'_username','',time()-2*3600,'/');
setcookie($weburl.'_password','',time()-2*3600,'/');

//然后跳回登录页面
echo'<script> location.replace ("login.php") </script>'; 
exit();



?>