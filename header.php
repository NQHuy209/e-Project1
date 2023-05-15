<!DOCTYPE html>
<html lang="vi">

<head>
	<meta name="google-site-verification" content="J5_NBokZsA139XPcT7HlQwfBADb7qkSG_qGzBgveLWI" />
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>
		La Imperial



	</title>
	<?php include "Model/connect_db.php"; ?>


	<!-- ================= Page description ================== -->

	<meta name="description" content="123">

	<!-- ================= Meta ================== -->

	<meta name="keywords" content="ND Team, La Imperial, Mega Store" />


	<link rel="canonical" href="https://nd-mart.mysapo.net/" />
	<meta name='revisit-after' content='1 days' />
	<meta name="robots" content="noodp,index,follow" />
	<!-- ================= Favicon ================== -->

	<link rel="icon" href="" type="image/x-icon" />

	<!-- ================= Google Fonts ================== -->


	<!-- Facebook Open Graph meta tags -->


	<meta property="og:type" content="website">
	<meta property="og:title" content="La Imperial">
	<meta property="og:image"
		content="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/logo.png?1677115832170">
	<meta property="og:image:secure_url"
		content="https:http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/logo.png?1677115832170">

	<meta property="og:description" content="123">
	<meta property="og:url" content="https://nd-mart.mysapo.net/">
	<meta property="og:site_name" content="La Imperial">
	<!-- Plugin CSS -->
	<!-- <script>
		var template = 'index';
	</script> -->

	<link rel="preload" as="style" type="text/css" href="css/scss2.css">
	<link rel="preload" as="style" type="text/css" href="css/scss.css">
	<!-- Build Main CSS -->
	<link href="css/scss2.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/scss.css" rel="stylesheet" type="text/css" media="all" />

	<script src="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/jquery.js?1677115832170"
		type="text/javascript"></script>
	<!-- Bizweb javascript customer -->

	<!-- <script>
		var template = 'index';			 
	</script>  -->
	<!-- Bizweb conter for header -->
	<!-- <script>
		var Bizweb = Bizweb || {};
		Bizweb.store = 'nd-mart.mysapo.net';
		Bizweb.id = 351180;
		Bizweb.theme = { "id": 713646, "name": "Giao diện chính", "role": "main" };
		Bizweb.template = 'index';
		if (!Bizweb.fbEventId) Bizweb.fbEventId = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
			var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
			return v.toString(16);
		});		
	</script> -->
	<!-- <script>
		(function () {
			function asyncLoad() {
				var urls = ["https://google-shopping.sapoapps.vn/conversion-tracker/global-tag/6003.js?store=nd-mart.mysapo.net", "https://google-shopping.sapoapps.vn/conversion-tracker/event-tag/6003.js?store=nd-mart.mysapo.net"];
				for (var i = 0; i < urls.length; i++) {
					var s = document.createElement('script');
					s.type = 'text/javascript';
					s.async = true;
					s.src = urls[i];
					var x = document.getElementsByTagName('script')[0];
					x.parentNode.insertBefore(s, x);
				}
			};
			window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
		})();
	</script> -->


	<!-- <script>
		window.BizwebAnalytics = window.BizwebAnalytics || {};
		window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
		window.BizwebAnalytics.meta.currency = 'VND';
		window.BizwebAnalytics.tracking_url = '/s';

		var meta = {};


		for (var attr in meta) {
			window.BizwebAnalytics.meta[attr] = meta[attr];
		}
	</script> -->


		<script src="/dist/js/stats.min.js?v=69e02f0"></script>

















</head>

<body>
	<div class="page-body">
		<!-- Main content -->
		<header class="header">
			<div class="container">
				<div class="row">
					<div class="topbar clearfix">
						<div class="col-lg-6 col-md-6 hidden-sm hidden-xs welcome">
							Chào mừng bạn đến với La Imperial
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 topbar-login">
							<ul class="account pull-right">
								<?php
									if (isset($_SESSION['user']))
									{
										echo '<li style="color:white">Hello <a href="">' . $_SESSION['user']['username'] . '</a></li>';
									}
									else
									{
										echo
										'<li>
											<a href="login.php" title="Đăng nhập">
												<i class="fa fa-sign-in"></i>
												Đăng nhập
											</a>
										</li>
										<li>
											<a href="register.php" title="Đăng ký">
												<i class="fa fa-sign-in"></i>
												Đăng ký
											</a>
										</li>';
									}
								?>

							</ul>

						</div>
					</div>

					<div class="middle-header clearfix middle-header-center" style="display: flex; align-items: center; padding: 0px">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 logo">
							<a href="index.php">
								<img class="img_logo" src="images/logo.png" style="width: 150px"
									alt="La Imperial" />
							</a>
						</div>
						<div class="col-lg-5 col-md-5 hidden-xs hidden-sm search-box">
							<div class="header_search search_form">
								<form class="input-group search-bar search_form" action="/Project/e-Project1/category.php" method="get" role="search">
									<?php
										if ($conn)
										{
										if(isset($_GET["search"]) && !empty($_GET["search"]))
										{
											$key =$_GET["search"];
											$sql = "SELECT * FROM product WHERE name LIKE '%$key%' ";
										}
										else {
											$sql = "SELECT * FROM product";
										}
										$result = mysqli_query($conn,$sql);
										}
									?>
									<input type="text" name="search" value="" placeholder="Tìm kiếm... "
										class="input-group-field st-default-search-input search-text"
										autocomplete="off" value="<?php if(isset($_GET["search"])) { echo $_GET["search"]; } ?>">
									<span class="input-group-btn">
										<button class="btn icon-fallback-text">
											<i class="fa fa-search"></i>
										</button>
									</span>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-xs-12">
							<div class="menu-bar button-menu hidden-md hidden-lg f-left">
								<a href="javascript:;">
									<i class="fa fa-align-justify"></i>
								</a>
							</div>
							<div class="top-cart-contain f-right">
								<div class="mini-cart text-xs-center">
									<div class="heading-cart">
										<a href="/cart" title="Giỏ hàng">
											<img src="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/icon_cart.png?1677115832170"
												alt="La Imperial" />
											<span class="cartCount count_item_pr" id="cart-total"></span>
										</a>
									</div>
									<div class="top-cart-content">
										<ul id="cart-sidebar" class="mini-products-list count_li">
											<li class="list-item">
												<ul></ul>
											</li>
											<li class="action">
												<ul>
													<li class="li-fix-1">
														<div class="top-subtotal">
															Tổng tiền thanh toán:
															<span class="price"></span>
														</div>
													</li>
													<li class="li-fix-2">
														<div class="actions">
															<a href="/cart" class="btn btn-primary" title="Giỏ hàng">
																<span>Giỏ hàng</span>
															</a>
															<a href="/checkout" class="btn btn-checkout btn-gray"
																title="Thanh toán">
																<span>Thanh toán</span>
															</a>
														</div>
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="header-hotline f-right clearfix hidden-sm hidden-xs">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
								<div class="hotline">
									<p>
										Liên hệ
									</p>
									<a style="text-decoration: none	;" href="tel:0975729999">
										0922552868
									</a>
								</div>
							</div>

							<div class="hidden-lg hidden-md search-box-mobile">
								<div class="header_search search_form">
									<form class="input-group search-bar search_form" action="/search" method="get"
										role="search">
										<input type="search" name="query" value="" placeholder="Tìm kiếm... "
											class="input-group-field st-default-search-input search-text"
											autocomplete="off">
										<span class="input-group-btn">
											<button class="btn icon-fallback-text">
												<i class="fa fa-search"></i>
											</button>
										</span>
									</form>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>

			<div class="wrap_main hidden-xs hidden-sm">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-mega hidden-sm hidden-xs">
							<div class="menu_mega">
								<div class="title_menu">
									<span class="title_">Danh mục sản phẩm</span>
									<span class="nav_button"><span><i class="fa fa-bars"
												aria-hidden="true"></i></span></span>
								</div>
								<div class="list_menu_header menu_all_site col-lg-3 col-md-3">
									<ul class="ul_menu site-nav-vetical">





										<li class="nav_item lv1 li_check">
											<a href="category.php?id=1" title="Fridge">Fridge
												<!-- <i class="fa fa-angle-right"></i> -->
											</a>

											<!-- <ul class="ul_content_right_1 row">


												<li class="nav_item lv2 col-lg-3 col-md-3"><a href="/apple"
														title="Apple">Apple</a></li>



												<li class="nav_item lv2 col-lg-3 col-md-3"><a href="/samsung"
														title="Samsung">Samsung</a></li>



												<li class="nav_item lv2 col-lg-3 col-md-3"><a href="/huawei"
														title="Huawei">Huawei</a></li>



												<li class="nav_item lv2 col-lg-3 col-md-3"><a href="/oppo"
														title="Oppo">Oppo</a></li>



												<li class="nav_item lv2 col-lg-3 col-md-3"><a href="/"
														title="Giới thiệu">Giới thiệu</a></li>


											</ul> -->
										</li>





										<li class="nav_item lv1 li_check">
											<a href="category.php?id=2" title="Dishwasher">Dishwasher
												<!-- <i class="fa fa-angle-right"></i> -->
											</a>

											<!-- <ul class="ul_content_right_1 row">


												<li class="nav_item lv2 col-lg-3 col-md-3"><a href="/thuc-pham-kho"
														title="Thực phẩm khô">Thực phẩm khô</a></li>



												<li class="nav_item lv2 col-lg-3 col-md-3"><a href="/giai-khat"
														title="Giải khát">Giải khát</a></li>


											</ul> -->
										</li>





										<li class="nav_item lv1 li_check">
											<a href="category.php?id=3" title="Introduction cooker">Introduction cooker
											</a>
										</li>





										<li class="nav_item lv1 li_check">
											<a href="category.php?id=4" title="Microwave">Microwave
											</a>
										</li>





										<li class="nav_item lv1 li_check">
											<a href="category.php?id=5" title="Television">Television
											</a>
										</li>





										<li class="nav_item lv1 li_check">
											<a href="category.php?id=6" title="Air condition">Air condition
											</a>
										</li>





										<!-- <li class="nav_item lv1 li_check">
											<a href="/thuc-pham-kho" title="Thực phẩm khô">Thực phẩm khô
											</a>
										</li>





										<li class="nav_item lv1 li_check">
											<a href="/suc-khoe" title="Sức khỏe">Sức khỏe
											</a>
										</li>





										<li class="nav_item lv1 li_check">
											<a href="/phu-kien" title="Phụ kiện">Phụ kiện
											</a>
										</li> -->


										<!-- <li class="lev-1 xemthem hidden-lgg nav_item clearfix ">
											<a href="javascript:;">
												Xem thêm
											</a>
										</li> -->
										<!-- <li class="lev-1 thugon hidden-lgg nav_item clearfix ">
											<a href="javascript:;">
												Thu gọn
											</a>
										</li> -->

									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<div class="bg-header-nav hidden-xs hidden-sm">
								<div class="row row-noGutter-2">
									<nav class="header-nav">
										<ul class="item_big">
											<li class="nav-item active ">
												<a class="a-img" href="index.php">
													<span>Trang chủ</span>
													<span class="label_">

														<i class="label "></i>

													</span>
												</a>
											</li>
											<li class="nav-item ">
												<a class="a-img" href="/gioi-thieu">
													<span>Giới thiệu</span>
													<span class="label_">

														<i class="label "></i>

													</span>
												</a>
											</li>
											<!-- <li class="nav-item  has-mega">
												<a class="a-img" href="/collections/all">
													<span>Sản phẩm</span><i class="fa fa-caret-down"></i>
													<span class="label_">

														<i class="label "></i>

													</span>
												</a>

												<div class="mega-content">
													<div class="level0-wrapper2">
														<div class="nav-block nav-block-center">
															<ul class="level0">


																<li class="level1 parent item">
																	<h2 class="h4"><a href="/dien-thoai"
																			title="Điện thoại"><span>Điện
																				thoại</span></a></h2>
																	<ul class="level1">

																		<li class="level2"> <a href="/apple"
																				title="Apple"><span>Apple</span></a>
																		</li>

																		<li class="level2"> <a href="/samsung"
																				title="Samsung"><span>Samsung</span></a>
																		</li>

																		<li class="level2"> <a href="/huawei"
																				title="Huawei"><span>Huawei</span></a>
																		</li>

																		<li class="level2"> <a href="/oppo"
																				title="Oppo"><span>Oppo</span></a> </li>

																		<li class="level2"> <a href="/"
																				title="Giới thiệu"><span>Giới
																					thiệu</span></a> </li>

																	</ul>
																</li>



																<li class="level1 parent item">
																	<h2 class="h4"><a href="/do-an"
																			title="Đồ ăn"><span>Đồ ăn</span></a></h2>
																	<ul class="level1">

																		<li class="level2"> <a href="/thuc-pham-kho"
																				title="Thực phẩm khô"><span>Thực phẩm
																					khô</span></a> </li>

																		<li class="level2"> <a href="/giai-khat"
																				title="Giải khát"><span>Giải
																					khát</span></a> </li>

																	</ul>
																</li>



																<li class="level1 item">
																	<h2 class="h4"><a href="/do-dien-khac"
																			title="Đồ điện tử"><span>Đồ điện
																				tử</span></a> </h2>



																<li class="level1 item">
																	<h2 class="h4"><a href="/me-va-be"
																			title="Mẹ và bé"><span>Mẹ và bé</span></a>
																	</h2>



																<li class="level1 item">
																	<h2 class="h4"><a href="/thoi-trang"
																			title="Thời trang"><span>Thời
																				trang</span></a> </h2>



																<li class="level1 item">
																	<h2 class="h4"><a href="/giai-khat"
																			title="Giải khát"><span>Giải khát</span></a>
																	</h2>



																<li class="level1 item">
																	<h2 class="h4"><a href="/thuc-pham-kho"
																			title="Thực phẩm khô"><span>Thực phẩm
																				khô</span></a> </h2>



																<li class="level1 item">
																	<h2 class="h4"><a href="/suc-khoe"
																			title="Sức khỏe"><span>Sức khỏe</span></a>
																	</h2>



																<li class="level1 item">
																	<h2 class="h4"><a href="/phu-kien"
																			title="Phụ kiện"><span>Phụ kiện</span></a>
																	</h2>


															</ul>
														</div>
													</div>
												</div>

											</li> -->
											<!-- <li class="nav-item ">
												<a class="a-img" href="/tin-tuc">
													<span>Tin tức</span><i class="fa fa-caret-down"></i>
													<span class="label_">

														<i class="label "></i>

													</span>
												</a>

												<ul class="item_small">

													<li>
														<a href="/tin-tuc-khuyen-mai" title="">Tin tức khuyến mãi </a>

													</li>

													<li>
														<a href="/tin-tuc-noi-bat" title="">Tin tức nổi bật </a>

													</li>

													<li>
														<a href="/tin-tuc-moi-nhat" title="">Tin tức mới nhất </a>

													</li>

												</ul>

											</li> -->
											<li class="nav-item ">
												<a class="a-img" href="contact.php">
													<span>Liên hệ</span>
													<span class="label_">

														<i class="label "></i>

													</span>
												</a>
											</li>


										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</header>