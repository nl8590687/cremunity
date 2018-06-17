<?php

require 'includes/checklogin.php';

if($islogin==True){

}
else
{
	echo'<script> location.replace ("login.php") </script>'; 
	exit();
}

?>