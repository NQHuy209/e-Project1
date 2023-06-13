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

	
	<!--Favicon -->

	<link rel="icon" href="images/logo.png" type="image/x-icon" />

	<link rel="preload" as="style" type="text/css" href="css/scss2.css">
	<link rel="preload" as="style" type="text/css" href="css/scss.css">
	<!-- Build Main CSS -->
	<link href="css/scss2.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/scss.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/stylecart.css" rel="stylesheet" >

	<script src="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/jquery.js?1677115832170"
		type="text/javascript"></script>
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
										echo '<li style="color:white">Hello <a href="user.php">' . $_SESSION['user']['username'] . '</a></li>';
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
									<?php

										if (isset($_SESSION['cart'])){
											$count = count($_SESSION['cart']);
											echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
										}else{
											echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
										}

										?>
										<a href="cart.php" title="Giỏ hàng">
											<img src="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/icon_cart.png?1677115832170"
												alt="La Imperial" />
											<span class="cartCount count_item_pr" id="cart-total"></span>
										</a>
									</div>
									
								</div>
							</div>

							<div class="header-hotline f-right clearfix hidden-sm hidden-xs">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
								<div class="hotline">
									<p>
										Liên hệ
									</p>
									<a style="text-decoration: none	;">
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
											<a href="category.php?id=1" title="Fridge">Tủ Lạnh
											</a>
										</li>





										<li class="nav_item lv1 li_check">
											<a href="category.php?id=2" title="Dishwasher">Máy rửa bát
											</a>
										</li>





										<li class="nav_item lv1 li_check">
											<a href="category.php?id=3" title="Introduction cooker">Bếp Từ
											</a>
										</li>





										<li class="nav_item lv1 li_check">
											<a href="category.php?id=4" title="Microwave">Lò vi sóng
											</a>
										</li>





										<li class="nav_item lv1 li_check">
											<a href="category.php?id=5" title="Television">Tivi
											</a>
										</li>





										<li class="nav_item lv1 li_check">
											<a href="category.php?id=6" title="Air condition">Điều hòa
											</a>
										</li>

										<li class="nav_item lv1 li_check">
											<a href="category.php?id=7" title="Smartphone">Dien Thoai
											</a>
										</li>

										<li class="nav_item lv1 li_check">
											<a href="category.php?id=8" title="Laptop"> macbook
											</a>
										</li>
										






										

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
												<a class="a-img" href="category.php">
													<span>Sản phẩm</span>
													<span class="label_">

														<i class="label "></i>

													</span>
												</a>

											</li>
											
											<li class="nav-item ">
												<a class="a-img" href="contact.php">
													<span>Liên hệ</span>
													<span class="label_">

														<i class="label "></i>

													</span>
												</a>
											</li>

											<li class="nav-item ">
												<a class="a-img" href="compare.php">
													<span>So sánh</span>
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