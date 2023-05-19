<?php
	require "header.php";
?>


		<section class="awe-section-1">
			<!-- <section class="section_slider">
				<div class="home-slider owl-carousel"> -->


					<div class="item">
						<a href="#" title="La Imperial">
							<picture>
								<img src="images/home2.jpg"/>
							</picture>
						</a>
					</div>

				<!-- </div>
			</section> -->
		</section>


		<section class="awe-section-2">
			<section class="section_banner">
				<div class="container">
					<div class="row">




						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="banner-hover">
								<a href="#" title="La Imperial"></a>
								<img class="lazyload img-responsive lazyload_head"
									src="images/banner_beptu3dasua.jpg"
									alt="La Imperial">
							</div>
						</div>




						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="banner-hover">
								<a href="#" title="La Imperial"></a>
								<img class="lazyload img-responsive lazyload_head"
									src="images/banner_mayruabat2dasua.jpg"
									alt="La Imperial">
							</div>
						</div>




						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="banner-hover">
								<a href="#" title="La Imperial"></a>
								<img class="lazyload img-responsive lazyload_head"
									src="images/banner_lovisong2dasua.png"
									alt="La Imperial">
							</div>
						</div>

					</div>
				</div>
			</section>
		</section>
		
		
		<section class="awe-section-6">
			<section class="sec-product-small">
				<div class="container">
					<div class="row">
						<div class="product-small col-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="title_module_main">
								<h2>
									<a href="" title="Introduction cooker">
										<img class="product-wrap-icon" src="https://static.thenounproject.com/png/3526251-200.png"
											alt="La Imperial" />
										Introduction cooker
									</a>
								</h2>
								<a class="view-more" href="category.php?id=3" title="Introduction cooker">
									Xem thêm <span>>></span>
								</a>
							</div>

							<div class="product-small-content clearfix">
							<?php
      						if ($conn)
      						{
								$sql = "SELECT * FROM product WHERE categories_id = 3 ORDER BY id DESC";
        						$result = mysqli_query($conn, $sql);
        						if (mysqli_num_rows($result) > 0)
        						{
          							while($row = mysqli_fetch_assoc($result))
          							{
										$product3[] = $row;
									}
									$show = 1;
									for ($i = 0; $i <= sizeof($product3); $i++)
									{
										if ($show <= 6)
										{
											echo
											'<div class="item_product_main col-lg-4 col-md-4 col-sm-4 col-xs-6">
												<div class="product-box product-item-main">
													<a class="kbdt" href="product.php?id=' . $product3[$i]['id'] . '" title="' . $product3[$i]['name'] . '"></a>
													<div class="product-thumbnail">
														<img class="lazyload img-responsive" src="images/' . $product3[$i]['img'] . '" alt="' . $product3[$i]['name'] . '">
													</div>
													<h3 class="product-name">' . $product3[$i]['name'] . '</h3>
													<div class="product-item-price price-box">
														<strong>' . number_format($product3[$i]['price']) . 'đ</strong>
													</div>
												</div>
											</div>';
											$show++;
										}
									}
								}
							}
							?>
							</div>
						</div>


						<div class="product-small col-right col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="title_module_main">
								<h2>
									<a href="" title="">
										<img class="product-wrap-icon" src="https://cdn-icons-png.flaticon.com/512/3205/3205129.png"
											alt="La Imperial" />
										Microwave
									</a>
								</h2>
								<a class="view-more" href="category.php?id=4" title="Microwave">
									Xem thêm <span>>></span>
								</a>
							</div>

							<div class="product-small-content clearfix">
							<?php
      						if ($conn)
      						{
								$sql = "SELECT * FROM product WHERE categories_id = 4 ORDER BY id DESC";
        						$result = mysqli_query($conn, $sql);
        						if (mysqli_num_rows($result) > 0)
        						{
          							while($row = mysqli_fetch_assoc($result))
          							{
										$product4[] = $row;
									}
									$show = 1;
									for ($i = 0; $i <= sizeof($product4); $i++)
									{
										if ($show <= 6)
										{
											echo
											'<div class="item_product_main col-lg-4 col-md-4 col-sm-4 col-xs-6">
												<div class="product-box product-item-main">
													<a class="kbdt" href="product.php?id=' . $product4[$i]['id'] . '" title="' . $product4[$i]['name'] . '"></a>
													<div class="product-thumbnail">
														<img class="lazyload img-responsive" src="images/' . $product4[$i]['img'] . '" alt="' . $product4[$i]['name'] . '">
													</div>
													<h3 class="product-name">' . $product4[$i]['name'] . '</h3>
													<div class="product-item-price price-box">
														<strong>' . number_format($product4[$i]['price']) . 'đ</strong>
													</div>
												</div>
											</div>';
											$show++;
										}
									}
								}
							}
							?>
							</div>
						</div>


					</div>
				</div>
			</section>
		</section>


		<section class="awe-section-7">

			<section class="section-product-1 ajax-product">
				<div class="container">
					<div class="col-product-wrap">
						<div class="title_module_main">
							<!-- <h2>
								<a href="/san-pham-noi-bat" title="Fridge">
									<img class="product-wrap-icon" src="https://cdn-icons-png.flaticon.com/512/3605/3605991.png"
										alt="La Imperial" />
									Fridge
								</a>
							</h2> -->
						</div>


						<div class="banner-hover hidden-xs">
							<a href="#" title="La Imperial"></a>
							<img class="lazyload img-responsive"
								src="https://d1kivxjtmxnd4.cloudfront.net/filters:format(webp)/images/Category_Page_Banners_12-04_3stxJ6f.png"
								alt="La Imperial">
						</div>

						<div class="e-tabs2 not-dqtab ajax-tab-1" data-section="ajax-tab-1">
							<div class="content">
								<!-- <div class="tabs-title-ajax">

									<ul class="tabs tabs-title tab-mobile clearfix hidden-md hidden-lg">
										<li class="prev"><i class="fa fa-angle-left"></i></li>
										<li class="tab-link tab-title  hidden-md hidden-lg current tab-titlexs"
											data-tab="tab-1">

											<span>Xem thêm</span>

										</li>
										<li class="next"><i class="fa fa-angle-right"></i></li>
									</ul>


									<ul class="tabs tabs-title ajax clearfix hidden-xs hidden-sm">

										<li class="tab-link has-content" data-tab="tab-1" data-url="/thuc-pham-kho">
											<span>Xem thêm</span>
										</li>

										 <li class="tab-link " data-tab="tab-2" data-url="/giai-khat">
											<span>Giải khát</span>
										</li>

									</ul>
								</div> -->



								
							</div>

						</div>
					</div>
				</div>
			</section>
		</section>


		<section class="awe-section-8">
			<section class="sec-product-small">
				<div class="container">
					<div class="row">
						<div class="product-small col-left2 col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="title_module_main">
								<h2>
									<a href="" title="Fridge">
										<img class="product-wrap-icon" src="images/icon-fridge3.png"
											alt="La Imperial" />
										Fridge
									</a>
								</h2>
								<a class="view-more" href="category.php?id=1" title="Fridge">
									Xem thêm <span>>></span>
								</a>
							</div>

							<div class="product-small-content clearfix">
							<?php
      						if ($conn)
      						{
								$sql = "SELECT * FROM product WHERE categories_id = 1 ORDER BY id DESC";
        						$result = mysqli_query($conn, $sql);
        						if (mysqli_num_rows($result) > 0)
        						{
          							while($row = mysqli_fetch_assoc($result))
          							{
										$product1[] = $row;
									}
									$show = 1;
									for ($i = 0; $i <= sizeof($product1); $i++)
									{
										if ($show <= 6)
										{
											echo
											'<div class="item_product_main col-lg-4 col-md-4 col-sm-4 col-xs-6">
												<div class="product-box product-item-main">
													<a class="kbdt" href="product.php?id=' . $product1[$i]['id'] . '" title="' . $product1[$i]['name'] . '"></a>
													<div class="product-thumbnail">
														<img class="lazyload img-responsive" src="images/' . $product1[$i]['img'] . '" alt="' . $product1[$i]['name'] . '">
													</div>
													<h3 class="product-name">' . $product1[$i]['name'] . '</h3>
													<div class="product-item-price price-box">
														<strong>' . number_format($product1[$i]['price']) . 'đ</strong>
													</div>
												</div>
											</div>';
											$show++;
										}
									}
								}
							}
							?>
							</div>
						</div>


						<div class="product-small col-right2 col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="title_module_main">
								<h2>
									<a href="" title="Dishwasher">
										<img class="product-wrap-icon" src="images/icon-diswasher3.png"
											alt="La Imperial" />
										Dishwasher
									</a>
								</h2>
								<a class="view-more" href="category.php?id=2" title="Phụ kiện">
									Xem thêm <span>>></span>
								</a>
							</div>

							<div class="product-small-content clearfix">
							<?php
      						if ($conn)
      						{
								$sql = "SELECT * FROM product WHERE categories_id = 2 ORDER BY id DESC";
        						$result = mysqli_query($conn, $sql);
        						if (mysqli_num_rows($result) > 0)
        						{
          							while($row = mysqli_fetch_assoc($result))
          							{
										$product2[] = $row;
									}
									$show = 1;
									for ($i = 0; $i <= sizeof($product2); $i++)
									{
										if ($show <= 6)
										{
											echo
											'<div class="item_product_main col-lg-4 col-md-4 col-sm-4 col-xs-6">
												<div class="product-box product-item-main">
													<a class="kbdt" href="product.php?id=' . $product2[$i]['id'] . '" title="' . $product2[$i]['name'] . '"></a>
													<div class="product-thumbnail">
														<img class="lazyload img-responsive" src="images/' . $product2[$i]['img'] . '" alt="' . $product2[$i]['name'] . '">
													</div>
													<h3 class="product-name">' . $product2[$i]['name'] . '</h3>
													<div class="product-item-price price-box">
														<strong>' . number_format($product2[$i]['price']) . 'đ</strong>
													</div>
												</div>
											</div>';
											$show++;
										}
									}
								}
							}
							?>
							</div>
						</div>


					</div>
				</div>
			</section>
		</section>


		<section class="awe-section-9">

			<section class="section-product-1 ajax-product">
				<div class="container">
					<div class="col-product-wrap">
						<div class="title_module_main">
							
						</div>


						<div class="banner-hover hidden-xs">
							<a href="#" title="La Imperial"></a>
							<img class="lazyload img-responsive"
								src="images/banner_tivi1.jpg"
								alt="La Imperial">
						</div>

						<div class="e-tabs2 not-dqtab ajax-tab-1" data-section="ajax-tab-1">
							<div class="content">
								
							</div>

						</div>
					</div>
				</div>
			</section>
		</section>


		<section class="awe-section-10">
			<section class="sec-product-small">
				<div class="container">
					<div class="row">
						<div class="product-small col-left3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="title_module_main">
								<h2>
									<a href="" title="Television">
										<img class="product-wrap-icon" src="https://cdn-icons-png.flaticon.com/512/3260/3260248.png"
											alt="La Imperial" />
										Television
									</a>
								</h2>
								<a class="view-more" href="category.php?id=5" title="Television">
									Xem thêm <span>>></span>
								</a>
							</div>

							<div class="product-small-content clearfix">
							<?php
      						if ($conn)
      						{
								$sql = "SELECT * FROM product WHERE categories_id = 5 ORDER BY id DESC";
        						$result = mysqli_query($conn, $sql);
        						if (mysqli_num_rows($result) > 0)
        						{
          							while($row = mysqli_fetch_assoc($result))
          							{
										$product5[] = $row;
									}
									$show = 1;
									for ($i = 0; $i <= sizeof($product5); $i++)
									{
										if ($show <= 6)
										{
											echo
											'<div class="item_product_main col-lg-4 col-md-4 col-sm-4 col-xs-6">
												<div class="product-box product-item-main">
													<a class="kbdt" href="product.php?id=' . $product5[$i]['id'] . '" title="' . $product5[$i]['name'] . '"></a>
													<div class="product-thumbnail">
														<img class="lazyload img-responsive" src="images/' . $product5[$i]['img'] . '" alt="' . $product5[$i]['name'] . '">
													</div>
													<h3 class="product-name">' . $product5[$i]['name'] . '</h3>
													<div class="product-item-price price-box">
														<strong>' . number_format($product5[$i]['price']) . 'đ</strong>
													</div>
												</div>
											</div>';
											$show++;
										}
									}
								}
							}
							?>
							</div>
						</div>


						<div class="product-small col-right3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="title_module_main">
								<h2>
									<a href="" title="Air condition">
										<img class="product-wrap-icon" src="https://icon-library.com/images/icon-air-conditioning/icon-air-conditioning-23.jpg"
											alt="La Imperial" />
										Air condition
									</a>
								</h2>
								<a class="view-more" href="category.php?id=6" title="Air condition">
									Xem thêm <span>>></span>
								</a>
							</div>

							<div class="product-small-content clearfix">
							<?php
      						if ($conn)
      						{
								$sql = "SELECT * FROM product WHERE categories_id = 6 ORDER BY id DESC";
        						$result = mysqli_query($conn, $sql);
        						if (mysqli_num_rows($result) > 0)
        						{
          							while($row = mysqli_fetch_assoc($result))
          							{
										$product6[] = $row;
									}
									$show = 1;
									for ($i = 0; $i <= sizeof($product6); $i++)
									{
										if ($show <= 6)
										{
											echo
											'<div class="item_product_main col-lg-4 col-md-4 col-sm-4 col-xs-6">
												<div class="product-box product-item-main">
													<a class="kbdt" href="product.php?id=' . $product6[$i]['id'] . '" title="' . $product6[$i]['name'] . '"></a>
													<div class="product-thumbnail">
														<img class="lazyload img-responsive" src="images/' . $product6[$i]['img'] . '" alt="' . $product6[$i]['name'] . '">
													</div>
													<h3 class="product-name">' . $product6[$i]['name'] . '</h3>
													<div class="product-item-price price-box">
														<strong>' . number_format($product6[$i]['price']) . 'đ</strong>
													</div>
												</div>
											</div>';
											$show++;
										}
									}
								}
							}
							?>
								


								


							</div>
						</div>


					</div>
				</div>
			</section>
		</section>


		


		

	<?php
		require "footer.php";
	?>





		
		
		<!-- Bizweb javascript -->
		<script src="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/option-selectors.js?1677115832170"
			type="text/javascript"></script>
		<script src="http://bizweb.dktcdn.net/assets/themes_support/api.jquery.js" type="text/javascript"></script>


		<script>

			

		<link rel="preload" as="script"
			href="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/quickview.js?1677115832170" />
		<script src="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/quickview.js?1677115832170"
			type="text/javascript"></script>

		<!-- Product detail JS,CSS -->



			<!-- <script type="text/javascript">
				WebFontConfig = {
					google: { families: ['Roboto:400,500,700'] },
					custom: {
						families: ['FontAwesome'],
						urls: ['https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css']
					}
				};
				(function () {
					var wf = document.createElement('script');
					wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
					wf.type = 'text/javascript';
					wf.async = 'true';
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(wf, s);
				})();
			</script> 



	</div>
</body>

</html>