<?php

require 'includes/checklogin.php';


//$islogin = True;

if($islogin==True){//当用户登陆的时候
require 'includes/sqlmng.php';
$con = mysqli_connect($host,$username,$pswd);
if (!$con)
{
	die('Could not connect: ' . mysqli_error());
}
//选取数据库 cremunity
mysqli_select_db($con,"cremunity");

echo '
<!DOCTYPE HTML>
<html>
';

echo '
<head>
<title>文章列表 - Cremunity</title>
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

//查询文章数量
$sql = "
SELECT count(AID)
FROM ARTIINFO,USERINFO 
WHERE NAME='" . $uName . "' AND ARTIINFO.ID = USERINFO.ID ;
";
$r = mysqli_query($con,$sql);

$count_arti=0;
while($row = mysqli_fetch_array( $r ) )
{
	$count_arti = intval($row["count(AID)"]);
}

//echo '[][][]' . $count_arti;
$count_page= intval($count_arti / 10);
//echo '[][][]' . $count_page;

if($count_arti % 10 >= 1)
	$count_page= $count_page + 1;

//echo '[][][]' . $count_page;

//设置页面的页面号，默认为第一页，即0
$page_num = 0;
if(!empty($_GET['page']))
{
	$page_num = intval($_GET['page']) - 1;
}

//翻页导航按钮工具
$navigate_tool = '
   <ul class="pagination">
		<li class="disabled"><span><i class="fa fa-angle-left"><i class="fa fa-angle-left"></i></i></span></li>
		<li class="disabled"><a href="?page=' . strval($page_num) . '"><i class="fa fa-angle-left"></i></a></li>';
		
for($i=0; $i<$count_page; $i += 1)
{
	if($i!=$count_page - 1)
	{
		$navigate_tool = $navigate_tool . '
		<li><a href="?page=' . strval($i + 1) . '">' . strval($i + 1) . '</a></li>
	';
	}
	else
	{
		$navigate_tool = $navigate_tool . '
		<li class="active"><span>' . strval($i + 1) . '</span></li>
		';
	}
	
}
$navigate_tool = $navigate_tool . '
		<li class="disabled"><span>...</span></li>
		<li class="disabled"><a href="?page=' . strval($page_num + 2) . '"><i class="fa fa-angle-right"></i></a></li>
		<li><a href="#"><i class="fa fa-angle-right"><i class="fa fa-angle-right"></i></i></a></li>
	</ul>
	<ul class="pagination">
		<li class="disabled"><span>' . strval($page_num + 1) . ' / ' . $count_page . '</span></li>
	</ul>
';

echo '
		<div id="page-wrapper">
			<div class="col-md-12 graphs">
				<div class="xs">
				<h3>文章列表</h3>
				<ul class="pagination">
					<li><a href="post-editor.php">写文章</a></li>
				</ul>
';
echo $navigate_tool; //显示翻页导航按钮工具
echo '
				<div class="bs-example4" data-example-id="contextual-table">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>标题</th>
								<th>分类</th>
								<th>日期</th>
								<th>评论/浏览</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>';


//echo 'aaaaa' . $page_num;

$arti_startid=$page_num*10;
$arti_endid=$arti_startid+10;





//查找文章信息
$sql = "
SELECT AID,TITLE,CATEGORY,CONTENT,TIME 
FROM ARTIINFO,USERINFO 
WHERE NAME='" . $uName . "' AND ARTIINFO.ID = USERINFO.ID 
LIMIT ".$arti_startid.",".$arti_endid.";
";
$r = mysqli_query($con,$sql);

$arti_count=0;
while($arti_count < 10 && $row = mysqli_fetch_array( $r ) )
{
	$arti_id = $row["AID"];
	$arti_title = $row["TITLE"];
	$arti_category = $row["CATEGORY"];
	$arti_content = $row["CONTENT"];
	$arti_time = $row["TIME"];
	
	//echo 'aaaaa' . $arti_id;
	//echo 'bbbbb' . $arti_title;
	
	if($arti_count % 2 == 0)
		echo PHP_EOL . '		<tr class="active">' . PHP_EOL;
	else
		echo PHP_EOL . '		<tr>' . PHP_EOL;
	
	echo '
			<th scope="row">' . strval($arti_count + 1) . '</th>
			<td><a href="../post.php?aid=' . strval($arti_id) . '">' . $arti_title . '</a></td>
			<td>' . $arti_category . '</td>
			<td>' . strval($arti_time) . '</td>
			<td>0 / 0</td>
			<td><a href="post-editor.php?aid=' . $arti_id . '&action=edit">编辑</a> &nbsp; <a href="post-editor.php?aid=' . $arti_id . '&action=delete">删除</a></td>
		</tr>
	
	';
	
	$arti_count += 1;
}

if(false)
echo '
        <tr class="active">
          <th scope="row">1</th>
          <td><a href="#">这是文章标题</a></td>
          <td>这是文章类别</td>
          <td>2018-04-22</td>
		  <td>0 / 0</td>
		  <td><a href="#">编辑</a> &nbsp; <a href="#">删除</a></td>
        </tr>
		
        <tr>
          <th scope="row">2</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
		  <td>Column content</td>
		  <td>Column content</td>
        </tr>
		
        <tr class="success">
          <th scope="row">3</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
		  <td>Column content</td>
		  <td>Column content</td>
        </tr>
		
        <tr>
          <th scope="row">4</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
		  <td>Column content</td>
		  <td>Column content</td>
        </tr>
		
        <tr class="info">
          <th scope="row">5</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
		  <td>Column content</td>
		  <td>Column content</td>
        </tr>
		
        <tr>
          <th scope="row">6</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
		  <td>Column content</td>
		  <td>Column content</td>
        </tr>
		
        <tr class="warning">
          <th scope="row">7</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
		  <td>Column content</td>
		  <td>Column content</td>
        </tr>
		
        <tr>
          <th scope="row">8</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
		  <td>Column content</td>
		  <td>Column content</td>
        </tr>
		
        <tr class="danger">
          <th scope="row">9</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
		  <td>Column content</td>
		  <td>Column content</td>
        </tr>
		
		<tr>
          <th scope="row">10</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
		  <td>Column content</td>
		  <td>Column content</td>
        </tr>
';
echo '
						</tbody>
					</table>
				</div>';
echo $navigate_tool; //显示翻页导航按钮工具
echo '
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
}
else
{//当用户未登录的时候
	echo'<script> location.replace ("login.php") </script>'; 
	exit();
}


?>