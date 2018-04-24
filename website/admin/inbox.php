<?php

echo '

<!DOCTYPE HTML>
<html>
<head>
<title>私信 - Cremunity</title>
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

<body>
<div id="wrapper">
';
	 
require 'includes/navbar.php';
	 
echo '
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	     <h3>私信列表</h3>
  	        
        <div class="col-md-64 inbox_right">
         	<form action="#" method="GET">
                <div class="input-group">
                    <input type="text" name="search" class="form-control1 input-search" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div><!-- Input Group -->
            </form>
            <div class="mailbox-content">
               <div class="mail-toolbar clearfix">
			     <div class="float-left">
			        <div class="btn btn_1 btn-default mrg5R">
			           <i class="fa fa-refresh"> </i>
			        </div>
			        <div class="dropdown">
			            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
			                <i class="fa fa-cog icon_8"></i>
			                <i class="fa fa-chevron-down icon_8"></i>
			            <div class="ripple-wrapper"></div></a>
			            <ul class="dropdown-menu float-right">
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-pencil-square-o icon_9"></i>
			                        Edit
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-calendar icon_9"></i>
			                        Schedule
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-download icon_9"></i>
			                        Download
			                    </a>
			                </li>
			                <li class="divider"></li>
			                <li>
			                    <a href="#" class="font-red" title="">
			                        <i class="fa fa-times" icon_9=""></i>
			                        Delete
			                    </a>
			                </li>
			            </ul>
			        </div>
					
					
			        <div class="clearfix"> </div>
			    </div>
			    <div class="float-right">
			        
			              
                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Social</a></li>
                                        <li><a href="#">Forums</a></li>
                                        <li><a href="#">Updates</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Spam</a></li>
                                        <li><a href="#">Trash</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">New</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Work</a></li>
                                        <li><a href="#">Family</a></li>
                                        <li><a href="#">Social</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Primary</a></li>
                                        <li><a href="#">Promotions</a></li>
                                        <li><a href="#">Forums</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                            </div>
                        
			        
			    </div>
               </div>
                <table class="table">
                    <tbody>
';

echo '
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star icon-state-warning"></i>
                            </td>
                            <td class="hidden-xs">
                                Google
                            </td>
                            <td>
                                <a href="message.php">Nullam quis risus eget urna mollis ornare vel eu leo</a>
                            </td>
                            <td>
                            </td>
                            <td>
                                2018-03-12</br>14:10:56
                            </td>
                        </tr>
';
echo '
						
                        <tr class="unread checked">
                            <td class="hidden-xs">
                            	<input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star icon-state-warning"></i>
                            </td>
                            <td class="hidden-xs">
                                Dropbox
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                            </td>
                            <td>
                                02 march
                            </td>
                        </tr>
						
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star icon-state-warning"></i>
                            </td>
                            <td class="hidden-xs">
                                Adobe
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                8 march
                            </td>
                        </tr>
						
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star icon-state-warning"></i>
                            </td>
                            <td class="hidden-xs">
                                Apple
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                4 march
                            </td>
                        </tr>
						
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star"></i>
                            </td>
                            <td class="hidden-xs">
                                Microsoft
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                1 march
                            </td>
                        </tr>
						
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star"></i>
                            </td>
                            <td class="hidden-xs">
                                Microsoft
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                15 march
                            </td>
                        </tr>
						
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star"></i>
                            </td>
                            <td class="hidden-xs">
                                Microsoft
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                            </td>
                            <td>
                                16 march
                            </td>
                        </tr>
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star"></i>
                            </td>
                            <td class="hidden-xs">
                                Microsoft
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                9 march
                            </td>
                        </tr>
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star icon-state-warning"></i>
                            </td>
                            <td class="hidden-xs">
                                Microsoft
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                16 march
                            </td>
                        </tr>
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star icon-state-warning"></i>
                            </td>
                            <td class="hidden-xs">
                                Dropbox
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                            </td>
                            <td>
                                10 march
                            </td>
                        </tr>
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star"></i>
                            </td>
                            <td class="hidden-xs">
                                Dropbox
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                14 march
                            </td>
                        </tr>
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star"></i>
                            </td>
                            <td class="hidden-xs">
                                Dropbox
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                            </td>
                            <td>
                                11 march
                            </td>
                        </tr>
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star"></i>
                            </td>
                            <td class="hidden-xs">
                                Dropbox
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                20 march
                            </td>
                        </tr>
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star"></i>
                            </td>
                            <td class="hidden-xs">
                                Dropbox
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                           <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                25 march
                            </td>
                        </tr>
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star"></i>
                            </td>
                            <td class="hidden-xs">
                                Twitter
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                26 march
                            </td>
                        </tr>
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star"></i>
                            </td>
                            <td class="hidden-xs">
                                Twitter
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                            </td>
                            <td>
                                28 march
                            </td>
                        </tr>
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star icon-state-warning"></i>
                            </td>
                            <td class="hidden-xs">
                                Twitter
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                06 march
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star"></i>
                            </td>
                            <td class="hidden-xs">
                                Twitter
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                8 march
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star"></i>
                            </td>
                            <td class="hidden-xs">
                                Dropbox
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                10 march
                            </td>
                        </tr>
                        <tr class="read checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <i class="fa fa-star"></i>
                            </td>
                            <td class="hidden-xs">
                                Dropbox
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td>
                                16 march
                            </td>
                        </tr>
';
echo '
                    </tbody>
                </table>
               </div>
            </div>
            <div class="clearfix"> </div>
       </div>';
	   
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