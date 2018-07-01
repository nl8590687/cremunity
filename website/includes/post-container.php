<?php

//$post_title ='测试文章';
//$post_date_year = '';
//$post_date_month = '';
//$post_date_day = '';
//$post_author = '';

//$post_content ='';


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
							<h1 class="page-title">'. $post_title .'</h1>
							<!-- page-title end -->

							<!-- blogpost start -->
							<article class="clearfix blogpost full">
								<div class="blogpost-body">
									<div class="side">
										<div class="post-info">
											<!--<span class="day">12</span>
											<span class="month">Sept 2014</span>-->
											' . $post_date . '
										</div>
										<div id="affix"><span class="share">Share This</span><div id="share"></div></div>
									</div>
									<div class="blogpost-content">
										<header>
											<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">' . $post_author . '</a></div>
										</header>
										<!--<div class="owl-carousel content-slider-with-controls">
											<div class="overlay-container">
												<img src="images/blog-1.jpg" alt="">
												<a href="images/blog-1.jpg" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
											</div>
											<div class="overlay-container">
												<img src="images/blog-2.jpg" alt="">
												<a href="images/blog-2.jpg" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
											</div>
											<div class="overlay-container">
												<img src="images/blog-3.jpg" alt="">
												<a href="images/blog-3.jpg" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>-->
										' . $post_content . '
									</div>
								</div>
								
								<footer class="clearfix">
									<ul class="links pull-left">
										<li><i class="fa fa-comment-o pr-5"></i> <a href="#">3 comments</a> |</li> 
										<li><i class="fa fa-tags pr-5"></i> <a href="#">' . $post_category . '</a> </li>
									</ul>
								</footer>
							</article>
							<!-- blogpost end -->

							';
							require 'post-comments.php';
							require 'comment-form.php';
							
							echo '

							

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

?>