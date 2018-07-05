<?php

$con = mysqli_connect($host,$username,$pswd);

mysqli_set_charset($con, 'utf8');
if (!$con)
{
  die('Could not connect: ' . mysqli_error());
}

//$n=10;

//选取数据库 cremunity
mysqli_select_db($con,"cremunity");


$search_keyword = '';

if(!empty($_GET['searchword']))
{
	$search_keyword = $_GET['searchword'];
}

//查询文章数量
$sql = "
SELECT count(AID)
FROM ARTIINFO,USERINFO 
WHERE ARTIINFO.ID = USERINFO.ID AND TITLE LIKE '%" . $search_keyword . "%';
";
$r = mysqli_query($con,$sql);

$count_arti=0;
while($row = mysqli_fetch_array( $r ) )
{
	$count_arti = intval($row["count(AID)"]);
}

//每页显示的文章数
$articount_peer_page = 10;

//echo '[][][]' . $count_arti;
$count_page= intval($count_arti / $articount_peer_page);
//echo '[][][]' . $count_page;

if($count_arti % $articount_peer_page >= 1)
	$count_page= $count_page + 1;

//设置页面的页面号，默认为第一页，即0
$page_num = 0;
if(!empty($_GET['page']))
{
	$page_num = intval($_GET['page']) - 1;
}



$arti_startid=$page_num * $articount_peer_page;
$arti_endid=$arti_startid + $articount_peer_page;

//$arti_startid=0;
//$arti_endid=10;

$sql = "
SELECT AID,TITLE,TIME,NAME,CATEGORY,CONTENT 
FROM ARTIINFO,USERINFO
WHERE ARTIINFO.ID=USERINFO.ID AND TITLE LIKE '%" . $search_keyword . "%'
ORDER BY AID DESC
LIMIT ".$arti_startid.",".$arti_endid."
;
";
$r = mysqli_query($con,$sql);



echo '

<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">内容搜索："' . $search_keyword . '"</h1>
							<div class="separator-2"></div>
							<p class="lead">创作，从这里开始： <br class="hidden-sm hidden-xs"> Cremunity</p>
							<!-- page-title end -->';
							
if ($r)
{
	//echo '成功';
	$i = 0;
	//开始显示方格子
	while($i < $articount_peer_page and $row = mysqli_fetch_array( $r ) )
	{
		$post_aid = $row["AID"];
		$post_title = $row["TITLE"];
		$post_date = $row["TIME"];
		$post_author = $row["NAME"];
		$post_content = $row["CONTENT"];
		$post_category = $row["CATEGORY"];
		
		$post_content = substr($post_content,0,300);
		echo '

							<!-- blogpost start -->
							<article class="clearfix blogpost object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
								<div class="blogpost-body">
									<div class="post-info">
										' . $post_date . '
										<!--<span class="day">12</span>
										<span class="month">Sept 2014</span>-->
									</div>
									<div class="blogpost-content">
										<header>
											<h2 class="title"><a href="post.php?aid=' . $post_aid . '">' . $post_title . '</a></h2>
											<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">' . $post_author . '</a></div>
										</header>
										<p>' . $post_content . '</p>
										<!--<p>这里是文章的内容
，我们可以在这里浏览文章的摘要内容。文章的摘要内容或者前若干文本的内容会显示在这里，通过这里，人们可以很清楚地基本了解文章的大概内容，方便人们的阅读，提升人们的阅读效率，减少人们阅读无意义内容而消耗的时间。</p>-->
									</div>
								</div>
								<footer class="clearfix">
									<ul class="links pull-left">
										<li><i class="fa fa-comment-o pr-5"></i> <a href="#">3 comments</a> |</li> 
										<li><i class="fa fa-tags pr-5"></i> <a href="#">' . $post_category . '</a> </li>
									</ul>
									<a class="pull-right link" href="post.php?aid=' . $post_aid . '"><span>继续阅读</span></a>
								</footer>
							</article>
							<!-- blogpost end -->';
	$i++;
	}
}
else
{
	//echo '失败';
}
							
							
								
							
							if(false)
								echo '
							<!-- blogpost start -->
							<article class="clearfix blogpost object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
								<div class="overlay-container">
									<img src="images/blog-1.jpg" alt="">
									<div class="overlay">
										<div class="overlay-links">
											<a href="post.php"><i class="fa fa-link"></i></a>
											<a href="images/blog-1.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="blogpost-body">
									<div class="post-info">
										<span class="day">12</span>
										<span class="month">Sept 2014</span>
									</div>
									<div class="blogpost-content">
										<header>
											<h2 class="title"><a href="post.php">Blogpost with image</a></h2>
											<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
										</header>
										<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
									</div>
								</div>
								<footer class="clearfix">
									<ul class="links pull-left">
										<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li> 
										<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a> </li>
									</ul>
									<a class="pull-right link" href="post.php"><span>Read more</span></a>
								</footer>
							</article>
							<!-- blogpost end -->

							<!-- blogpost start -->
							<article class="clearfix blogpost object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item"></iframe>
								</div>
								<div class="blogpost-body">
									<div class="post-info">
										<span class="day">11</span>
										<span class="month">Sept 2014</span>
									</div>
									<div class="blogpost-content">
										<header>
											<h2 class="title"><a href="blog-post.html">Blogpost with embedded youtube video</a></h2>
											<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
										</header>
										<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
									</div>
								</div>
								<footer class="clearfix">
									<ul class="links pull-left">
										<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li> 
										<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a> </li>
									</ul>
									<a class="pull-right link" href="blog-post.html"><span>Read more</span></a>
								</footer>
							</article>
							<!-- blogpost end -->

							<!-- blogpost start -->
							<article class="clearfix blogpost object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
								<div class="audio-wrapper">
									<iframe height="166" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/106329682&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
								</div>
								<div class="blogpost-body">
									<div class="post-info">
										<span class="day">10</span>
										<span class="month">Sept 2014</span>
									</div>
									<div class="blogpost-content">
										<header>
											<h2 class="title"><a href="blog-post.html">Audio post</a></h2>
											<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
										</header>
										<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
									</div>
								</div>
								<footer class="clearfix">
									<ul class="links pull-left">
										<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li> 
										<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a> </li>
									</ul>
									<a class="pull-right link" href="blog-post.html"><span>Read more</span></a>
								</footer>
							</article>
							<!-- blogpost end -->

							<!-- blogpost start -->
							<article class="clearfix blogpost object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
								<div class="blogpost-body">
									<div class="post-info">
										<span class="day">09</span>
										<span class="month">Sept 2014</span>
									</div>
									<div class="blogpost-content">
										<header>
											<h2 class="title"><a href="blog-post.html">Text post</a></h2>
											<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
										</header>
										<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
									</div>
								</div>
								<footer class="clearfix">
									<ul class="links pull-left">
										<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li> 
										<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a> </li>
									</ul>
									<a class="pull-right link" href="blog-post.html"><span>Read more</span></a>
								</footer>
							</article>
							<!-- blogpost end -->

							<!-- blogpost start -->
							<article class="clearfix blogpost object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
								<div class="overlay-container">
									<img src="images/blog-2.jpg" alt="">
									<div class="overlay">
										<div class="overlay-links">
											<a href="blog-post.html"><i class="fa fa-link"></i></a>
											<a href="images/blog-2.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="blogpost-body">
									<div class="post-info">
										<span class="day">01</span>
										<span class="month">Sept 2014</span>
									</div>
									<div class="blogpost-content">
										<header>
											<h2 class="title"><a href="blog-post.html">Lorem ipsum dolor sit amet aecenas ullamcorper</a></h2>
											<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
										</header>
										<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
									</div>
								</div>
								<footer class="clearfix">
									<ul class="links pull-left">
										<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li> 
										<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a> </li>
									</ul>
									<a class="pull-right link" href="blog-post.html"><span>Read more</span></a>
								</footer>
							</article>
							<!-- blogpost end -->';
							
							echo '
							<!-- pagination start -->
							';
							require 'pagination.php';
							echo '
							<!-- pagination end -->

						</div>
						<!-- main end -->

						';
						
						require 'sidebar.php';
						
						echo '

					</div>
				</div>
			</section>
			<!-- main-container end -->

';

mysqli_close($con);
?>