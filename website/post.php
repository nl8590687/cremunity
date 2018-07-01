<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zh-cn">
<!--<![endif]-->
<?php

$aid = '';
//首先检查是否有GET
if(!empty($_GET['aid']))
{
	$aid = $_GET['aid'];
}



$post_title = '测试文章';
$post_date_year = '';
$post_date_month = '';
$post_date_day = '';
$post_date = '2018-12-23 18:04';
$post_author = 'Steven Jobs';
$post_category = '';

$post_content ='aaaaaaaaa
<p>aa这是一篇测试文章
，用来测试文章页面是否正确，逻辑和布局等。Amet culpa, accusamus. Temporibus animi, consequatur cumque natus, esse consequuntur voluptatibus deleniti necessitatibus autem architecto quaerat tenetur nobis, ea maxime saepe rem doloribus placeat aliquid quod, id fuga ratione error harum ex! Facere vero veniam ducimus nulla sed possimus nobis nisi maiores quibusdam, nam odit quos dolores laborum pariatur distinctio in ex culpa impedit. Corrupti sequi perferendis atque nam debitis ea sunt, vel mollitia voluptas tempora eaque 
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										<p>Inventore, distinctio esse impedit deleniti, magnam minus culpa quia repellendus eligendi nam, omnis qui odio dolorem autem molestias eveniet tempora rem odit possimus! At ea quidem, ipsa ducimus harum quod neque expedita perferendis, quis odio officiis dicta facere qui architecto! Neque, odio quidem a cum perferendis doloribus iure aut ducimus, eveniet commodi unde consequatur iusto error excepturi perspiciatis cupiditate voluptates ad, minus, magnam voluptatem tempora quae at temporibus incidunt. est reprehenderit, voluptates culpa, numquam minima.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, eligendi cum officiis sint eveniet omnis eius quo. Et iusto eos dolor ratione nesciunt praesentium eveniet distinctio repellat. Quas, soluta, ipsam.</p>
										<blockquote>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
										</blockquote>                                        
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse illum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
										<ul class="list-icons">
											<li><i class="icon-check"></i> Eveniet distinctio repellat</li>
											<li><i class="icon-check"></i> Sdipisicing elit</li>
											<li><i class="icon-check"></i> Sint eveniet omnis eius quo</li>
											<li><i class="icon-check"></i> Dolor ratione nesciunt</li>
										</ul>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.----</p>sssssssss
';

require 'admin/includes/sqlmng.php';
$con = mysqli_connect($host,$username,$pswd);
if (!$con)
{
	die('Could not connect: ' . mysqli_error());
}
//选取数据库 cremunity
mysqli_select_db($con,"cremunity");

$sql = "
SELECT TITLE,CATEGORY,ARTIINFO.TIME,USERINFO.NAME,CONTENT 
FROM ARTIINFO,USERINFO 
WHERE ARTIINFO.ID=USERINFO.ID AND ARTIINFO.AID=" . $aid . "
;
";


//$sql = "select * from ARTIINFO WHERE AID=1;";

//echo $sql;
$r = mysqli_query($con,$sql);

if ($r)
{
	//echo '成功';
	while( $row = mysqli_fetch_array( $r ) )
	{
		$post_title = $row["TITLE"];
		$post_date = $row["TIME"];
		$post_author = $row["NAME"];
		$post_content = $row["CONTENT"];
		$post_category = $row["CATEGORY"];
	}
	
	//echo $post_content;
}
else
{
	echo '失败';
}



require 'includes/head-post.php';
	
?>

	<!-- body classes: 
			"boxed": boxed layout mode e.g. <body class="boxed">
			"pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> 
	-->
	<body>
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
<?php 


//require 'includes/head-post.php';
require 'includes/header.php';
require 'includes/post-container.php';
require 'includes/footer.php';


mysqli_close($con);

?>

		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="plugins/owl-carousel/owl.carousel.js"></script>

		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Sharrre javascript -->
		<script type="text/javascript" src="plugins/jquery.sharrre.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="plugins/jquery.countTo.js"></script>

		<!-- Parallax javascript -->
		<script src="plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="plugins/jquery.validate.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
