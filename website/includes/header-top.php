<?php

$weburl='cm_ailemon_wang';
$islogin_top = False;

echo '<!-- header-top start -->
			<!-- ================ -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-2 col-sm-6">

							<!-- header-top-first start -->
							<!-- ================ -->
							<div class="header-top-first clearfix">
								<ul class="social-links clearfix hidden-xs">
									<li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="skype"><a target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
									<li class="linkedin"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li class="googleplus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="youtube"><a target="_blank" href="#"><i class="fa fa-youtube-play"></i></a></li>
									<li class="flickr"><a target="_blank" href="#"><i class="fa fa-flickr"></i></a></li>
									<li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="pinterest"><a target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
								<div class="social-links hidden-lg hidden-md hidden-sm">
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
										<ul class="dropdown-menu dropdown-animation">
											<li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
											<li class="linkedin"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
											<li class="googleplus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
											<li class="youtube"><a target="_blank" href="#"><i class="fa fa-youtube-play"></i></a></li>
											<li class="flickr"><a target="_blank" href="#"><i class="fa fa-flickr"></i></a></li>
											<li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="pinterest"><a target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- header-top-first end -->

						</div>
						<div class="col-xs-10 col-sm-6">

							<!-- header-top-second start -->
							<!-- ================ -->
							<div id="header-top-second"  class="clearfix">

								<!-- header top dropdowns start -->
								<!-- ================ -->
								<div class="header-top-dropdown">
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i> 搜索</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
											<li>
												<form role="search" class="search-box"  id="searchform" action="search.php" method="GET" accept-charset="utf-8">
													<div class="form-group has-feedback">
														<input type="text" id="searchbox" name="searchword" class="form-control" placeholder="Search">
														<i class="fa fa-search form-control-feedback"></i>
													</div>
												</form>
											</li>
										</ul>
									</div>';
// 如果cookie存在，那么用户已经登陆，直接跳转
if (!empty($_COOKIE[$weburl.'_username'])&&!empty($_COOKIE[$weburl.'_password']))
{
	$uName_top=$_COOKIE[$weburl.'_username'];
	$uPwd_top=$_COOKIE[$weburl.'_password'];
	
	$islogin_top = True;
	//echo 'cookie 存在';
	//$uPwd=md5(uniqid($uPwd,true));
	//echo'<script> location.replace (".") </script>'; 
	//exit();
}
if($islogin_top == False)
	echo '
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 用户登录</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
											<li>
												<form class="login-form" id="dw__login" action="admin/login.php" method="post" accept-charset="utf-8">
													<div class="form-group has-feedback">
														<label class="control-label">Username</label>
														<input id="unamebox" name="uName" type="text" class="form-control" placeholder="">
														<i class="fa fa-user form-control-feedback"></i>
													</div>
													<div class="form-group has-feedback">
														<label class="control-label">Password</label>
														<input id="pswdbox" name="uPwd" type="password" class="form-control" placeholder="">
														<i class="fa fa-lock form-control-feedback"></i>
													</div>
													<button id="bt_login" type="submit" class="btn btn-group btn-dark btn-sm" onclick="func_login()">Log In</button>
													<span>or</span>
													<button type="button" class="btn btn-group btn-default btn-sm" onclick="location.replace (\'admin/register.php\')">Sing Up</button>
													<ul>
														<li><a href="#">Forgot your password?</a></li>
													</ul>
													<div class="divider"></div>
													<span class="text-center">Login with</span>
													<ul class="social-links clearfix">
														<li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
														<li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
														<li class="googleplus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
													</ul>
												</form>
											</li>
										</ul>
									</div>';
else
	echo '
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> ' . $uName_top . ' 欢迎您</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
											<li>
												<table class="table table-hover">
													<thead>
														<tr>
															<th class="quantity">QTY</th>
															<th class="product">Product</th>
															<th class="amount">Subtotal</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="quantity">2 x</td>
															<td class="product"><a href="shop-product.html">Android 4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span></td>
															<td class="amount">$199.00</td>
														</tr>
														<tr>
															<td class="quantity">3 x</td>
															<td class="product"><a href="shop-product.html">Android 4.2 Tablet</a><span class="small">7.3" Quad Core 2GB</span></td>
															<td class="amount">$299.00</td>
														</tr>
														<tr>
															<td class="quantity">3 x</td>
															<td class="product"><a href="shop-product.html">Desktop PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span></td>
															<td class="amount">$1499.00</td>
														</tr>
														<tr>
															<td class="total-quantity" colspan="2">Total 8 Items</td>
															<td class="total-amount">$1997.00</td>
														</tr>
													</tbody>
												</table>
												<div class="panel-body text-right">	
												<a href="admin/" class="btn btn-group btn-default btn-sm" target="_blank">打开仪表盘</a>
												<a href="admin/logout.php" class="btn btn-group btn-default btn-sm">注销登录</a>
												</div>
											</li>
										</ul>
									</div>';


echo '
								</div>
								<!--  header top dropdowns end -->

							</div>
							<!-- header-top-second end -->

						</div>
					</div>
				</div>
			</div>
			<!-- header-top end --> 
			<script src="js/md5.js"></script>
			<script>
				function func_login()
				{
					var input_pswdbox = document.getElementById(\'pswdbox\')
					var passwd = input_pswdbox.value
					var passwd_md5 = MD5(passwd)
					input_pswdbox.value = passwd_md5
				}
			</script>
			';
			

?>