<?php

$post_title ='测试文章';
$post_date_year = '';
$post_date_month = '';
$post_date_day = '';
$post_author = '';

$post_content ='';


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
											<span class="day">12</span>
											<span class="month">Sept 2014</span>
										</div>
										<div id="affix"><span class="share">Share This</span><div id="share"></div></div>
									</div>
									<div class="blogpost-content">
										<header>
											<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
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
										<p>>这是一篇测试文章
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
									</div>
								</div>
								<footer class="clearfix">
									<ul class="links pull-left">
										<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li> 
										<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a> </li>
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