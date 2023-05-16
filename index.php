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
														<strong>' . $product3[$i]['price'] . 'đ</strong>
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
														<strong>' . $product4[$i]['price'] . 'đ</strong>
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
														<strong>' . $product1[$i]['price'] . 'đ</strong>
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
														<strong>' . $product2[$i]['price'] . 'đ</strong>
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
								src="images/banner_tivi1.jpg"
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
														<strong>' . $product5[$i]['price'] . 'đ</strong>
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
														<strong>' . $product6[$i]['price'] . 'đ</strong>
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


		


		<!-- <section class="awe-section-12">
			<section class="section_service">
				<div class="container">
					<div class="service owl-carousel" data-lg-items='4' data-md-items='3' data-sm-items='3'
						data-xs-items="1" data-margin='20'>


						<div class="item">
							<div class="service_icon">
								<img class="lazyload img-responsive"
									src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
									data-src="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/service_icon_1.jpg?1677115832170"
									alt="La Imperial" />
							</div>
							<div class="service_content">
								<h4>Vận chuyển miễn phí</h4>
								<span>Vận chuyển miễn phí nội thành với đơn hàng từ 1.000.000</span>
							</div>
						</div>



						<div class="item">
							<div class="service_icon">
								<img class="lazyload img-responsive"
									src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
									data-src="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/service_icon_2.jpg?1677115832170"
									alt="La Imperial" />
							</div>
							<div class="service_content">
								<h4>Thanh toán tiện lợi</h4>
								<span>Hỗ trợ thanh toán tiền mặt hoặc thẻ từ các ngân hàng</span>
							</div>
						</div>




						<div class="item">
							<div class="service_icon">
								<img class="lazyload img-responsive"
									src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
									data-src="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/service_icon_3.jpg?1677115832170"
									alt="La Imperial" />
							</div>
							<div class="service_content">
								<h4>Chăm sóc 24/7</h4>
								<span>Chăm sóc khách hàng 24/7. Giải đáp mọi thắc mắc</span>
							</div>
						</div>



						<div class="item">
							<div class="service_icon">
								<img class="lazyload img-responsive"
									src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
									data-src="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/service_icon_4.jpg?1677115832170"
									alt="La Imperial" />
							</div>
							<div class="service_content">
								<h4>Sản phẩm chính hãng</h4>
								<span>Sản phẩm chính hãng đến từ các thương hiệu uy tín</span>
							</div>
						</div>



					</div> /.products 
				</div>
			</section>
		</section> -->

	<?php
		require "footer.php";
	?>





		
		<!-- Add to cart -->



		<!-- <div id="quick-view-product" class="quickview-product" style="display:none;">
			<div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
			<div class="quick-view-product"></div>
			<div id="quickview-modal" style="display:none;">
				<div class="block-quickview primary_block row">

					<div class="product-left-column col-xs-12 col-sm-5 col-md-5 col-lg-5">
						<div class="clearfix image-block">
							<span class="view_full_size">
								<a class="img-product" title="title" href="#">
									<img id="product-featured-image-quickview"
										class="img-responsive product-featured-image-quickview"
										src="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/logo.png?1677115832170"
										alt="quickview" />
								</a>
							</span>
							<div class="loading-imgquickview" style="display:none;"></div>
						</div>
						<div class="more-view-wrapper clearfix">
							<div class="thumbs_quickview" id="thumbs_list_quickview">
								<ul class="product-photo-thumbs quickview-more-views-owlslider"
									id="thumblist_quickview"></ul>
							</div>
						</div>
					</div>
					<div class="product-center-column product-info product-item col-xs-5 col-sm-7 col-md-7 col-lg-7">
						<div class="head-qv">
							<h3 class="qwp-name">abc</h3>

						</div>
						<div class="quickview-info">
							<span class="vendor_ frist">Thương hiệu: <span class="vendor">Chưa có</span></span>
							<span class="vendor_ status">Tình trạng: <span class="status_name"></span></span>

							<span class="prices">
								<span class="price"></span>
								<del class="old-price"></del>
							</span>
						</div>
						<div class="product-description">
							<div class="rte text3line">
							</div>
							<a href="#" class="view-more" title="Xem chi tiết">Xem chi tiết</a>
						</div>

						<form action="/cart/add" method="post" enctype="multipart/form-data"
							class="quick_option variants form-ajaxtocart">
							<span class="price-product-detail hidden" style="opacity: 0;">
								<span class=""></span>
							</span>
							<select name='variantId' class="hidden" style="display:none"></select>
							<div class="clearfix"></div>
							<div class="quantity_wanted_p">
								<div class="input_qty_qv input_number_product">
									<a class="btn_num num_1 button button_qty" title="title"
										onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp; &amp; qtyqv &gt; 1 ) result.value--;return false;">-</a>
									<input type="text" id="quantity-detail" name="quantity" value="1"
										onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
										onchange="if(this.value == 0)this.value=1;" class="form-control prd_quantity">
									<a class="btn_num num_2 button button_qty" title="title"
										onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">+</a>
								</div>
								<button type="submit" name="add"
									class="btn btn-primary fix_add_to_cart button_cart_buy_enable add_to_cart_detail ajax_addtocart">
									<i class="ion-android-cart"></i>&nbsp;&nbsp;<span>Thêm vào giỏ hàng</span>
								</button>
							</div>
							<div class="total-price" style="display:none">
								<label>Tổng cộng: </label>
								<span></span>
							</div>

						</form>

					</div>
				</div>
				<a title="Close" class="quickview-close close-window quickviewsclose" href="javascript:;"><i
						class="fa   fa-times"></i></a>
			</div>
		</div> -->
		<!-- <script type="text/javascript">
			Bizweb.doNotTriggerClickOnThumb = false;
			function changeImageQuickView(img, selector) {
				var src = $(img).attr("src");
				src = src.replace("_compact", "");
				$(selector).attr("src", src);
			}
			function validate(evt) {
				var theEvent = evt || window.event;
				var key = theEvent.keyCode || theEvent.which;
				key = String.fromCharCode(key);
				var regex = /[0-9]|\./;
				if (!regex.test(key)) {
					theEvent.returnValue = false;
					if (theEvent.preventDefault) theEvent.preventDefault();
				}
			}
			var selectCallbackQuickView = function (variant, selector) {
				$('#quick-view-product form').show();
				var productItem = jQuery('.quick-view-product .product-item'),
					addToCart = productItem.find('.add_to_cart_detail'),
					productPrice = productItem.find('.price'),
					comparePrice = productItem.find('.old-price'),
					status = productItem.find('.soluong'),
					vat = productItem.find('.vat_ .vat_qv'),
					status_available = productItem.find('.status_name'),
					totalPrice = productItem.find('.total-price span');


				if (variant && variant.available) {

					var form = jQuery('#' + selector.domIdPrefix).closest('form');
					for (var i = 0, length = variant.options.length; i < length; i++) {
						var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
						if (radioButton.size()) {
							radioButton.get(0).checked = true;
						}
					}

					addToCart.removeClass('disabled').removeAttr('disabled');
					$(addToCart).find("span").text("Mua hàng");
					status_available.text('Còn hàng');
					if (variant.price < 1) {
						$("#quick-view-product .price").html('Liên hệ');
						$("#quick-view-product del, #quick-view-product .quantity_wanted_p").hide();
						$("#quick-view-product .prices .old-price").hide();

					} else {
						productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));
						if (variant.compare_at_price > variant.price) {
							comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();
							productPrice.addClass('on-sale');
						} else {
							comparePrice.hide();
							productPrice.removeClass('on-sale');
						}

						$(".quantity_wanted_p").show();


					}



					updatePricingQuickView();

					/*begin variant image*/
					if (variant && variant.featured_image) {

						var originalImage = $("#product-featured-image-quickview");
						var newImage = variant.featured_image;
						var element = originalImage[0];
						Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
							$('#thumblist_quickview img').each(function () {
								var parentThumbImg = $(this).parent();
								var productImage = $(this).parent().data("image");
								if (newImageSizedSrc.includes(productImage)) {
									$(this).parent().trigger('click');
									return false;
								}
							});

						});
						$('#product-featured-image-quickview').attr('src', variant.featured_image.src);
					}
				} else {

					addToCart.addClass('disabled').attr('disabled', 'disabled');
					$(addToCart).find("span").text("Hết hàng");
					status_available.text('Hết hàng');
					// đây
					$(".quick-view-product .quantity_wanted_p ").hide();
					$(".quantity_wanted_p").show();
					if (variant) {
						if (variant.price < 1) {

							$("#quick-view-product .price").html('Liên hệ');
							$("#quick-view-product del").hide();
							/* Trường hợp check có giá 0 đ nhưng hết hàng ẩn số lượng */
							$("#quick-view-product .quantity_wanted_p").hide();
							$("#quick-view-product .prices .old-price").hide();

							comparePrice.hide();
							productPrice.removeClass('on-sale');
							addToCart.addClass('disabled').attr('disabled', 'disabled');
							$(addToCart).find("span").text("Hết hàng");
						} else {
							if (variant.compare_at_price > variant.price) {
								comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();
								productPrice.addClass('on-sale');
							} else {
								comparePrice.hide();
								productPrice.removeClass('on-sale');
								$("#quick-view-product .prices .old-price").html('');
							}
							$("#quick-view-product .price").html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));
							$("#quick-view-product del ").hide();
							$("#quick-view-product .prices .old-price").show();
							/* Trường hợp check có giá nhưng hết hàng ẩn số lượng */

							addToCart.addClass('disabled').attr('disabled', 'disabled');
							$(addToCart).find("span").text("Hết hàng");
							// đây
							$(".quick-view-product .quantity_wanted_p").hide();
						}
					} else {
						$("#quick-view-product .price").html('Liên hệ');
						$("#quick-view-product del").hide();
						/* Trường hợp check có giá 0 đ nhưng hết hàng ẩn số lượng */
						$("#quick-view-product .quantity_wanted_p").hide();
						$("#quick-view-product .prices .old-price").hide();
						// đây
						$(".quick-view-product .quantity_wanted_p").hide();
						comparePrice.hide();
						productPrice.removeClass('on-sale');
						addToCart.addClass('disabled').attr('disabled', 'disabled');
						$(addToCart).find("span").text("Hết hàng");
					}
				}
				/*begin variant image*/
				if (variant && variant.featured_image) {

					var originalImage = $("#product-featured-image-quickview");
					var newImage = variant.featured_image;
					var element = originalImage[0];
					Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
						$('#thumblist_quickview img').each(function () {
							var parentThumbImg = $(this).parent();
							var productImage = $(this).parent().data("image");
							if (newImageSizedSrc.includes(productImage)) {
								$(this).parent().trigger('click');
								return false;
							}
						});

					});
					$('#product-featured-image-quickview').attr('src', variant.featured_image.src);
				}

			};
		</script> -->

		<!-- <div class="ajax-load">
			<span class="loading-icon">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
					y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;"
					xml:space="preserve">
					<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s"
							repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s"
							repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s"
							repeatCount="indefinite" />
					</rect>
					<rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s"
							dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s"
							repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s"
							repeatCount="indefinite" />
					</rect>
					<rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s"
							repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s"
							repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s"
							repeatCount="indefinite" />
					</rect>
				</svg>
			</span>
		</div>

		<div class="loading awe-popup">
			<div class="overlay"></div>
			<div class="loader" title="2">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
					y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;"
					xml:space="preserve">
					<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s"
							repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s"
							repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s"
							repeatCount="indefinite" />
					</rect>
					<rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s"
							dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s"
							repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s"
							repeatCount="indefinite" />
					</rect>
					<rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s"
							repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s"
							repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s"
							repeatCount="indefinite" />
					</rect>
				</svg>
			</div>

		</div>


		<div class="error-popup awe-popup">
			<div class="overlay no-background"></div>
			<div class="popup-inner content">
				<div class="error-message"></div>
			</div>
		</div>
		<div id="popup-cart" class="modal fade" role="dialog">
			<div id="popup-cart-desktop" class="clearfix">
				<div class="title-popup-cart">
					<img src="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/ico_check_.png?1677115832170"
						alt="La Imperial" /> <span class="your_product">Bạn đã thêm [<span class="cart-popup-name"></span>]
						vào giỏ hàng thành công ! </span>
				</div>
				<div class="wrap_popup">
					<div class="title-quantity-popup">
						<span class="cart_status" onclick="window.location.href='/cart';">Giỏ hàng của bạn có <span
								class="cart-popup-count"></span> sản phẩm </span>
					</div>
					<div class="content-popup-cart">
						<div class="thead-popup">
							<div style="width: 53%;" class="text-left">Sản phẩm</div>
							<div style="width: 15%;" class="text-center">Đơn giá</div>
							<div style="width: 15%;" class="text-center">Số lượng</div>
							<div style="width: 17%;" class="text-center">Thành tiền</div>
						</div>
						<div class="tbody-popup scrollbar-dynamic">
						</div>
						<div class="tfoot-popup">
							<div class="tfoot-popup-1 a-right clearfix">
								<span class="total-p popup-total">Tổng tiền thanh toán: <span
										class="total-price"></span></span>
							</div>
							<div class="tfoot-popup-2 clearfix">
								<a class="button buy_ btn-proceed-checkout" title="tiếp tục mua hàng"
									href="javascript:;" onclick="$('#popup-cart').modal('hide');"><span><span>Tiếp tục
											mua hàng</span></span></a>
								<a class="button checkout_ btn-proceed-checkout" title="Thực hiện thanh toán"
									href="/checkout"><span>Thực hiện thanh toán</span></a>

							</div>
						</div>
					</div>
					<a title="Close" class="quickview-close close-window" href="javascript:;"
						onclick="$('#popup-cart').modal('hide');"><i class="fa  fa-close"></i></a>
				</div>
			</div>

		</div>
		<div id="myModal" class="modal fade" role="dialog">
		</div> -->



		<!-- Bizweb javascript -->
		<script src="http://bizweb.dktcdn.net/100/351/180/themes/713646/assets/option-selectors.js?1677115832170"
			type="text/javascript"></script>
		<script src="http://bizweb.dktcdn.net/assets/themes_support/api.jquery.js" type="text/javascript"></script>


		<script>

			/**
		 * Look under your chair! console.log FOR EVERYONE!
		 *
		 * @see http://paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
		 */
			// (function (b) { function c() { } for (var d = "assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","), a; a = d.pop();) { b[a] = b[a] || c } })((function () {
			// 	try { console.log(); return window.console; } catch (err) { return window.console = {}; }
			// })());

			/**
			 * Page-specific call-backs
			 * Called after dom has loaded.
			 */
			// var GLOBAL = {
			// 	common: {
			// 		init: function () {
			// 			$('.add_to_cart').bind('click', addToCart);
			// 		}
			// 	},

			// 	templateIndex: {
			// 		init: function () {

			// 		}
			// 	},

			// 	templateProduct: {
			// 		init: function () {

			// 		}
			// 	},

			// 	templateCart: {
			// 		init: function () {

			// 		}
			// 	}

			// }
			// var UTIL = {
			// 	fire: function (func, funcname, args) {
			// 		var namespace = GLOBAL;
			// 		funcname = (funcname === undefined) ? 'init' : funcname;
			// 		if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function') {
			// 			namespace[func][funcname](args);
			// 		}
			// 	},

			// 	loadEvents: function () {
			// 		var bodyId = document.body.id;

			// 		// hit up common first.
			// 		UTIL.fire('common');

			// 		// do all the classes too.
			// 		$.each(document.body.className.split(/\s+/), function (i, classnm) {
			// 			UTIL.fire(classnm);
			// 			UTIL.fire(classnm, bodyId);
			// 		});
			// 	}

			// };
			// $(document).ready(UTIL.loadEvents);
			// /**
			//  * Ajaxy add-to-cart
			//  */
			// Number.prototype.formatMoney = function (c, d, t) {
			// 	var n = this,
			// 		c = isNaN(c = Math.abs(c)) ? 2 : c,
			// 		d = d == undefined ? "." : d,
			// 		t = t == undefined ? "." : t,
			// 		s = n < 0 ? "-" : "",
			// 		i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
			// 		j = (j = i.length) > 3 ? j % 3 : 0;
			// 	return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			// };
			// function addToCart(e) {
			// 	if (typeof e !== 'undefined') e.preventDefault();
			// 	var $this = $(this);
			// 	var form = $this.parents('form');

			// 	$.ajax({
			// 		type: 'POST',
			// 		url: '/cart/add.js',
			// 		async: false,
			// 		data: form.serialize(),
			// 		dataType: 'json',
			// 		error: addToCartFail,
			// 		beforeSend: function () {

			// 		},
			// 		success: addToCartSuccess,
			// 		cache: false
			// 	});
			// }
			// function addToCartSuccess(jqXHR, textStatus, errorThrown) {

			// 	$.ajax({
			// 		type: 'GET',
			// 		url: '/cart.js',
			// 		async: false,
			// 		cache: false,
			// 		dataType: 'json',
			// 		success: function (cart) {
			// 			awe_hidePopup('.loading');
			// 			Bizweb.updateCartFromForm(cart, '.top-cart-content .mini-products-list');
			// 			Bizweb.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');
			// 		}
			// 	});



			// 	var url_product = jqXHR['url'];
			// 	var class_id = jqXHR['product_id'];
			// 	var name = jqXHR['name'];
			// 	var textDisplay = ('<i style="margin-right:5px; color:red; font-size:13px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm vào giỏ hàng');
			// 	var id = jqXHR['variant_id'];
			// 	var dataList = $(".item-name a").map(function () {
			// 		var plus = $(this).text();
			// 		return plus;
			// 	}).get();
			// 	$('.title-popup-cart .cart-popup-name').html('<a href="' + url_product + '" title="' + name + '">' + name + '</a> ');
			// 	var nameid = dataList,
			// 		found = $.inArray(name, nameid);
			// 	var textfind = found;

			// 	var src = '';
			// 	if (Bizweb.resizeImage(jqXHR['image'], 'small') == null || Bizweb.resizeImage(jqXHR['image'], 'small') == "null" || Bizweb.resizeImage(jqXHR['image'], 'small') == '') {
			// 		src = 'https:http://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif'
			// 	}
			// 	else {
			// 		src = Bizweb.resizeImage(jqXHR['image'], 'small')
			// 	}

			// 	$(".item-info > p:contains(" + id + ")").html('<span class="add_sus" style="color:#898989;"><i style="margin-right:5px; color:#3cb878; font-size:14px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm</span>');





			// 	var windowW = $(window).width();
			// 	if (windowW > 768) {
			// 		$('#popup-cart').modal();
			// 	} else {
			// 		$('#myModal').html('');
			// 		var $popupMobile = '<div class="modal-dialog"><div class="modal-content"><div class="modal-header">'
			// 			+ '<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative; z-index: 9;"><span aria-hidden="true">×</span></button>'
			// 			+ '<h4 class="modal-title"><span><i class="fa fa-check" aria-hidden="true"></i></span>Đã mua thành công</h4></div>'
			// 			+ '<div class="modal-body"><div class="media"><div class="media-left"><div class="thumb-1x1">'
			// 			+ '<img width="70px" src="' + src + '" alt="' + jqXHR['title'] + '"></div></div>'
			// 			+ '<div class="media-body"><div class="product-title">' + jqXHR['name'] + '</div>'
			// 			+ '<div class="product-new-price"><span>' + (jqXHR['price']).formatMoney(0) + ' đ</span></div></div></div>'
			// 			+ '<button class="btn btn-block btn-outline-red" data-dismiss="modal">Tiếp tục mua hàng</button>'
			// 			+ '<a href="/checkout" class="btn btn-block btn-red">Tiến hành thanh toán »</a></div></div></div>';
			// 		$('#myModal').html($popupMobile);
			// 		$('#myModal').modal();
			// 		clearTimeout($('#myModal').data('hideInterval'));
			// 		$('#myModal').data('hideInterval', setTimeout(function () {
			// 			$('#myModal').modal('hide');
			// 		}, 5000));
			// 	}
			// }
			// function addToCartFail(jqXHR, textStatus, errorThrown) {
			// 	var response = $.parseJSON(jqXHR.responseText);
			// 	var $info = '<div class="error">' + response.description + '</div>';
			// }
			// $(document).on('click', ".remove-item-cart", function () {
			// 	var variantId = $(this).attr('data-id');
			// 	removeItemCart(variantId);
			// });
			// $(document).on('click', ".items-count", function () {
			// 	var thisBtn = $(this);
			// 	var variantId = $(this).parent().find('.variantID').val();
			// 	var qty = $(this).parent().children('.number-sidebar').val();
			// 	if (qty == '0') {
			// 		$(this).parent().children('.number-sidebar').val(1);
			// 	}
			// 	updateQuantity(qty, variantId);
			// });
			// $(document).on('change', ".number-sidebar", function () {
			// 	var variantId = $(this).parent().children('.variantID').val();
			// 	var qty = $(this).val();
			// 	updateQuantity(qty, variantId);
			// });
			// function updateQuantity(qty, variantId) {
			// 	var variantIdUpdate = variantId;
			// 	$.ajax({
			// 		type: "POST",
			// 		url: "/cart/change.js",
			// 		data: { "quantity": qty, "variantId": variantId },
			// 		dataType: "json",
			// 		success: function (cart, variantId) {
			// 			Bizweb.onCartUpdateClick(cart, variantIdUpdate);
			// 		},
			// 		error: function (qty, variantId) {
			// 			Bizweb.onError(qty, variantId)
			// 		}
			// 	})
			// }
			// function removeItemCart(variantId) {
			// 	var variantIdRemove = variantId;
			// 	$.ajax({
			// 		type: "POST",
			// 		url: "/cart/change.js",
			// 		data: { "quantity": 0, "variantId": variantId },
			// 		dataType: "json",
			// 		success: function (cart, variantId) {
			// 			Bizweb.onCartRemoveClick(cart, variantIdRemove);
			// 			$('.productid-' + variantIdRemove).remove();
			// 			if ($('.tbody-popup>div').length == '0') {
			// 				$('#popup-cart').modal('hide');
			// 			}
			// 			if ($('.list-item-cart>li').length == '0') {
			// 				$('.mini-products-list').html('<div class="no-item"><p>Không có sản phẩm nào.</p></div>');
			// 			}
			// 			if ($('.cart-tbody>div').length == '0') {
			// 				$('.page_cart').remove();
			// 				$('.header-cart-content').remove();
			// 				$('.title_cart_pc').html('<p class="hidden-xs-down">Không có sản phẩm nào. Quay lại <a href="/" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>');
			// 				$('.title_cart_mobile').html('<p class="hidden-xs-down col-xs-12">Không có sản phẩm nào. Quay lại <a href="/" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>');
			// 			}
			// 		},
			// 		error: function (variantId, r) {
			// 			Bizweb.onError(variantId, r)
			// 		}
			// 	})
			// }

			// Bizweb.updateCartFromForm = function (cart, cart_summary_id, cart_count_id) {
			// 	if ((typeof cart_summary_id) === 'string') {
			// 		var cart_summary = jQuery(cart_summary_id);
			// 		if (cart_summary.length) {
			// 			// Start from scratch.
			// 			cart_summary.empty();
			// 			// Pull it all out.        
			// 			jQuery.each(cart, function (key, value) {
			// 				if (key === 'items') {

			// 					var table = jQuery(cart_summary_id);
			// 					if (value.length) {
			// 						jQuery('<ul class="list-item-cart"></ul>').appendTo(table);
			// 						jQuery.each(value, function (i, item) {

			// 							var src = item.image;
			// 							if (src == null) {
			// 								src = "https:http://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
			// 							}
			// 							var buttonQty = "";
			// 							if (item.quantity == '1') {
											// buttonQty = 'disabled';
				// 						} else {
				// 							buttonQty = '';
				// 						}
				// 						jQuery('<li class="item productid-' + item.variant_id + '"><div class="wrap_item"><a class="product-image" href="' + item.url + '" title="' + item.name + '">'
				// 							+ '<img alt="' + item.name + '" src="' + src + '"width="' + '80' + '"\></a>'
				// 							+ '<div class="detail-item"><div class="product-details"> <a href="javascript:;" data-id="' + item.variant_id + '" title="Xóa" class="remove-item-cart fa fa-close">&nbsp;</a>'
				// 							+ '<h3 class="product-name"> <a href="' + item.url + '" title="' + item.name + '">' + item.name + '</a></h3></div>'
				// 							+ '<div class="product-details-bottom"><span class="price">' + Bizweb.formatMoney(item.price, "{{amount_no_decimals_with_comma_separator}}₫") + '</span><span class="hidden quaty item_quanty_count"> x ' + item.quantity + '</span>'
				// 							+ '<div class="quantity-select qty_drop_cart"><input class="variantID" type="hidden" name="variantId" value="' + item.variant_id + '"><button onClick="var result = document.getElementById(\'qty' + item.variant_id + '\'); var qty' + item.variant_id + ' = result.value; if( !isNaN( qty' + item.variant_id + ' ) &amp;&amp; qty' + item.variant_id + ' &gt; 1 ) result.value--;return false;" class="btn_reduced reduced items-count btn-minus" ' + buttonQty + ' type="button">–</button><input type="text" maxlength="12" readonly class="input-text number-sidebar qty' + item.variant_id + '" id="qty' + item.variant_id + '" name="Lines" id="updates_' + item.variant_id + '" size="4" value="' + item.quantity + '"><button onClick="var result = document.getElementById(\'qty' + item.variant_id + '\'); var qty' + item.variant_id + ' = result.value; if( !isNaN( qty' + item.variant_id + ' )) result.value++;return false;" class="btn_increase increase items-count btn-plus" type="button">+</button></div>'
				// 							+ '</div></div></li>').appendTo(table.children('.list-item-cart'));
				// 					});
				// 					jQuery('<div class="wrap_total"><div class="top-subtotal hidden">Phí vận chuyển: <span class="pricex">Tính khi thanh toán</span></div><div class="top-subtotal">Tổng tiền tạm tính: <span class="price">' + Bizweb.formatMoney(cart.total_price, "{{amount_no_decimals_with_comma_separator}}₫") + '</span></div></div>').appendTo(table);
				// 					jQuery('<div class="wrap_button"><div class="actions"><a href="/cart" class="btn btn-gray btn-cart-page pink hidden"><span>Đến giỏ hàng</span></a> <a href="/checkout" class="btn btn-gray btn-checkout pink" title="Thanh toán"><span>Tiến hành thanh toán</span></a> </div></div>').appendTo(table);
				// 				}
				// 				else {
				// 					jQuery('<div class="no-item"><p>Không có sản phẩm nào.</p></div>').appendTo(table);

				// 				}
				// 			}
				// 		});
				// 	}
				// }
				// updateCartDesc(cart);
				// var numInput = document.querySelector('#cart-sidebar .qty_drop_cart input.input-text');
				// if (numInput != null) {
					// Listen for input event on numInput.
					// numInput.addEventListener('input', function () {
						// Let's match only digits.
						// var num = this.value.match(/^\d+$/);
						// if (num == 0) {
							// If we have no match, value will be empty.
							// this.value = 1;
						// }
						// if (num === null) {
							// If we have no match, value will be empty.
			// 				this.value = "1";
			// 			}
			// 		}, false)
			// 	}
			// }

			// Bizweb.updateCartPageForm = function (cart, cart_summary_id, cart_count_id) {
			// 	if ((typeof cart_summary_id) === 'string') {
			// 		var cart_summary = jQuery(cart_summary_id);
			// 		if (cart_summary.length) {
						// Start from scratch.
						// cart_summary.empty();
						// Pull it all out.        
			// 			jQuery.each(cart, function (key, value) {
			// 				if (key === 'items') {
			// 					var table = jQuery(cart_summary_id);
			// 					if (value.length) {

			// 						var pageCart = '<div class="cart page_cart hidden-xs">'
			// 							+ '<form action="/cart" method="post" novalidate class="margin-bottom-0"><div class="bg-scroll"><div class="cart-thead">'
			// 							+ '<div style="width: 18%" class="a-center">Ảnh sản phẩm</div><div style="width: 32%" class="a-center">Tên sản phẩm</div><div style="width: 17%" class="a-center"><span class="nobr">Đơn giá</span></div><div style="width: 14%" class="a-center">Số lượng</div><div style="width: 14%" class="a-center">Thành tiền</div><div style="width: 5%" class="a-center">Xoá</div></div>'
			// 							+ '<div class="cart-tbody"></div></div></form></div>';
			// 						var pageCartCheckout = '<div class="row margin-top-20  margin-bottom-40"><div class="col-lg-7 col-md-7"><div class="form-cart-button"><div class=""><a href="/" class="form-cart-continue">Tiếp tục mua hàng</a></div></div></div>'
			// 							+ '<div class="col-lg-5 col-md-5 bg_cart shopping-cart-table-total"><div class="table-total"><table class="table ">'
			// 							+ '<tr class="hidden"><td>Tiền vận chuyển</td><td class="txt-right a-right">Tính khi thanh toán</td></tr>'
			// 							+ '<tr><td class="total-text">Tổng tiền thanh toán</td><td class="1 txt-right totals_price price_end a-right">' + Bizweb.formatMoney(cart.total_price, "{{amount_no_decimals_with_comma_separator}}₫") + '</td></tr></table></div>'
			// 							+ '<a onclick="window.location.href=\'/checkout\'" class="btn-checkout-cart" title="Thanh toán">Tiến hành thanh toán</a></div></div>';
			// 						jQuery(pageCart).appendTo(table);
			// 						jQuery.each(value, function (i, item) {
			// 							var buttonQty = "";
			// 							if (item.quantity == '1') {
			// 								buttonQty = 'disabled';
			// 							} else {
			// 								buttonQty = '';
			// 							}
			// 							var link_img1 = Bizweb.resizeImage(item.image, 'compact');
			// 							if (link_img1 == "null" || link_img1 == '' || link_img1 == null) {
			// 								link_img1 = 'https:http://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif';
			// 							}

			// 							var hidden_title_popup = "visible";
			// 							if (item.variant_title == 'Default Title') {
			// 								hidden_title_popup = 'hidden';
			// 							}
			// 							var pageCartItem = '<div class="item-cart productid-' + item.variant_id + '"><div style="width: 18%" class="image"><a class="product-image" title="' + item.name + '" href="' + item.url + '"><img width="75" height="auto" alt="' + item.name + '" src="' + link_img1 + '"></a></div>'
			// 								+ '<div style="width: 32%" class="a-center"><h3 class="product-name"> <a class="text2line" href="' + item.url + '" title="' + item.title + '">' + item.title + '</a> </h3><span class="variant-title ' + hidden_title_popup + '">' + item.variant_title + '</span>'
			// 								+ '</div><div style="width: 17%" class="a-center"><span class="item-price"> <span class="price">' + Bizweb.formatMoney(item.price, "{{amount_no_decimals_with_comma_separator}}₫") + '</span></span></div>'
			// 								+ '<div style="width: 14%" class="a-center"><div class="input_qty_pr"><input class="variantID" type="hidden" name="variantId" value="' + item.variant_id + '">'
			// 								+ '<input type="text" maxlength="12" readonly min="0" class="check_number_here input-text number-sidebar input_pop input_pop qtyItem' + item.variant_id + '" id="qtyItem' + item.variant_id + '" name="Lines" id="updates_' + item.variant_id + '" size="4" value="' + item.quantity + '">'
			// 								+ '<button onClick="var result = document.getElementById(\'qtyItem' + item.variant_id + '\'); var qtyItem' + item.variant_id + ' = result.value; if( !isNaN( qtyItem' + item.variant_id + ' )) result.value++;return false;" class="increase_pop items-count btn-plus" type="button">+</button><button onClick="var result = document.getElementById(\'qtyItem' + item.variant_id + '\'); var qtyItem' + item.variant_id + ' = result.value; if( !isNaN( qtyItem' + item.variant_id + ' ) &amp;&amp; qtyItem' + item.variant_id + ' &gt; 1 ) result.value--;return false;" ' + buttonQty + ' class="reduced_pop items-count btn-minus" type="button">-</button></div></div>'
			// 								+ '<div style="width: 14%" class="a-center"><span class="cart-price"> <span class="price">' + Bizweb.formatMoney(item.price * item.quantity, "{{amount_no_decimals_with_comma_separator}}₫") + '</span> </span></div>'
			// 								+ '<div style="width: 5%" class="a-center">'
			// 								+ '<a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="' + item.variant_id + '"><span><i class="fa fa-trash-o"></i></span></a>'
			// 								+ '</div>'
			// 								+ '</div>';
			// 							jQuery(pageCartItem).appendTo(table.find('.cart-tbody'));

			// 						});
			// 						jQuery(pageCartCheckout).appendTo(table.children('.cart'));
			// 					} else {
			// 						jQuery('<p class="hidden-xs-down ">Không có sản phẩm nào. Quay lại <a href="/collections/all" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>').appendTo(table);
			// 						jQuery('.cart_desktop_page').css('min-height', 'auto');
			// 					}
			// 				}
			// 			});
			// 		}
			// 	}
			// 	updateCartDesc(cart);
			// 	jQuery('#wait').hide();

			// }

			// Bizweb.updateCartPopupForm = function (cart, cart_summary_id, cart_count_id) {

			// 	if ((typeof cart_summary_id) === 'string') {
			// 		var cart_summary = jQuery(cart_summary_id);
			// 		if (cart_summary.length) {
						// Start from scratch.
						// cart_summary.empty();
						// Pull it all out.        
			// 			jQuery.each(cart, function (key, value) {
			// 				if (key === 'items') {
			// 					var table = jQuery(cart_summary_id);
			// 					if (value.length) {
			// 						jQuery.each(value, function (i, item) {
			// 							var src = item.image;
			// 							if (src == null) {
			// 								src = "https:http://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
			// 							}
			// 							var buttonQty = "";
			// 							if (item.quantity == '1') {
			// 								buttonQty = 'disabled';
			// 							} else {
			// 								buttonQty = '';
			// 							}
			// 							var hidden_title_popup = "visible";
			// 							if (item.variant_title == 'Default Title') {
			// 								hidden_title_popup = 'hidden';
			// 							}
			// 							var pageCartItem = '<div class="item-popup productid-' + item.variant_id + '">'
			// 								+ '<div style="width: 15%;" class="border height image_ text-left"><div class="item-image">'
			// 								+ '<a class="product-image" href="' + item.url + '" title="' + item.name + '"><img alt="' + item.name + '" src="' + src + '"width="' + '90' + '"\></a>'
			// 								+ '</div></div>'
			// 								+ '<div style="width:38.8%;" class="height text-left"><div class="item-info"><p class="item-name"><a href="' + item.url + '" title="' + item.name + '">' + item.name + '</a></p>'
			// 								+ '<span class="variant-title-popup ' + hidden_title_popup + '">' + item.variant_title + '</span>'
			// 								+ '<a href="javascript:;" class="remove-item-cart" title="Xóa sản phẩm" data-id="' + item.variant_id + '"><i class="fa fa-close"></i>&nbsp;&nbsp;Xoá sản phẩm</a>'
			// 								+ '<p class="addpass" style="color:#fff;margin:0px;">' + item.variant_id + '</p>'
			// 								+ '</div></div>'
			// 								+ '<div style="width: 15.2%;" class="border height text-center"><div class="item-price"><span class="price">' + Bizweb.formatMoney(item.price, "{{amount_no_decimals_with_comma_separator}}₫") + '</span>'
			// 								+ '</div></div><div style="width: 15.4%;" class="border height text-center"><div class="qty_thuongdq check_"><input class="variantID" type="hidden" name="variantId" value="' + item.variant_id + '">'
			// 								+ '<button onClick="var result = document.getElementById(\'qtyItemP' + item.variant_id + '\'); var qtyItemP' + item.variant_id + ' = result.value; if( !isNaN( qtyItemP' + item.variant_id + ' ) &amp;&amp; qtyItemP' + item.variant_id + ' &gt; 1 ) result.value--;return false;" ' + buttonQty + ' class="num1 reduced items-count btn-minus" type="button">-</button>'
			// 								+ '<input type="text" maxlength="12" min="0" readonly class="input-text number-sidebar qtyItemP' + item.variant_id + '" id="qtyItemP' + item.variant_id + '" name="Lines" id="updates_' + item.variant_id + '" size="4" value="' + item.quantity + '">'
			// 								+ '<button onClick="var result = document.getElementById(\'qtyItemP' + item.variant_id + '\'); var qtyItemP' + item.variant_id + ' = result.value; if( !isNaN( qtyItemP' + item.variant_id + ' )) result.value++;return false;" class="num2 increase items-count btn-plus" type="button">+</button></div></div>'
			// 								+ '<div style="width: 15%;" class="border height text-center"><span class="cart-price"> <span class="price">' + Bizweb.formatMoney(item.price * item.quantity, "{{amount_no_decimals_with_comma_separator}}₫") + '</span> </span></div>'
			// 								+ '</div>';
			// 							jQuery(pageCartItem).appendTo(table);

			// 							$('.link_product').text();
			// 						});
			// 					}
			// 				}
			// 			});
			// 		}
			// 	}
			// 	jQuery('.total-price').html(Bizweb.formatMoney(cart.total_price, "{{amount_no_decimals_with_comma_separator}}₫"));

			// 	updateCartDesc(cart);

			// }

			// Bizweb.updateCartPageFormMobile = function (cart, cart_summary_id, cart_count_id) {
			// 	if ((typeof cart_summary_id) === 'string') {
			// 		var cart_summary = jQuery(cart_summary_id);
			// 		if (cart_summary.length) {
						// Start from scratch.
						// cart_summary.empty();
						// Pull it all out.        
		// 				jQuery.each(cart, function (key, value) {
		// 					if (key === 'items') {

		// 						var table = jQuery(cart_summary_id);
		// 						if (value.length) {
		// 							jQuery('<div class="cart_page_mobile content-product-list"></div>').appendTo(table);
		// 							jQuery.each(value, function (i, item) {
		// 								if (item.image != null) {
		// 									var src = Bizweb.resizeImage(item.image, 'small');
		// 								} else {
		// 									var src = "https:http://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
		// 								}
		// 								jQuery('<div class="item-product item-mobile-cart item productid-' + item.variant_id + ' "><div class="item-product-cart-mobile"><a href="' + item.url + '">	<a class="product-images1" href="' + item.url + '"  title="' + item.name + '"><img width="80" height="150" alt="' + item.name + '" src="' + src + '" alt="' + item.name + '"></a></a></div>'
		// 									+ '<div class="title-product-cart-mobile"><h3><a class="" href="' + item.url + '" title="' + item.name + '">' + item.name + '</a></h3><p>Giá: <span>' + Bizweb.formatMoney(item.price, "{{amount_no_decimals_with_comma_separator}}₫") + '</span></p></div>'
		// 									+ '<div class="select-item-qty-mobile"><div class="txt_center in_put check_">'
		// 									+ '<input class="variantID" type="hidden" name="variantId" value="' + item.variant_id + '"><button onClick="var result = document.getElementById(\'qtyMobile' + item.variant_id + '\'); var qtyMobile' + item.variant_id + ' = result.value; if( !isNaN( qtyMobile' + item.variant_id + ' ) &amp;&amp; qtyMobile' + item.variant_id + ' &gt; 0 ) result.value--;return false;" class="reduced items-count btn-minus" type="button">–</button><input type="number" maxlength="12" min="1" readonly class="check_number_here input-text mobile_input number-sidebar qtyMobile' + item.variant_id + '" id="qtyMobile' + item.variant_id + '" name="Lines" id="updates_' + item.variant_id + '" size="4" value="' + item.quantity + '"><button onClick="var result = document.getElementById(\'qtyMobile' + item.variant_id + '\'); var qtyMobile' + item.variant_id + ' = result.value; if( !isNaN( qtyMobile' + item.variant_id + ' )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button></div>'
		// 									+ '<a class="button remove-item remove-item-cart" href="javascript:;" data-id="' + item.variant_id + '">Xoá</a></div>').appendTo(table.children('.content-product-list'));

		// 							});

		// 							jQuery('<div class="header-cart-price" style=""><div class="title-cart a-center"><span class="total_mobile a-center">Tổng tiền: <span class=" totals_price_mobile">' + Bizweb.formatMoney(cart.total_price, "{{amount_no_decimals_with_comma_separator}}₫") + '</span><span></div>'
		// 								+ '<div class="checkout"><button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button" onclick="window.location.href=\'/checkout\'">'
		// 								+ '<span>Tiến hành thanh toán</span></button>'
		// 								+ '<button class="btn btn-white contin" title="Tiếp tục mua hàng" type="button" onclick="window.location.href=\'/collections/all\'"><span>Tiếp tục mua hàng</span></button>'
		// 								+ '</div></div>').appendTo(table);
		// 						} else {
		// 							jQuery('<p class="hidden-xs-down col-xs-12">Không có sản phẩm nào. Quay lại <a href="/collections/all" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>').appendTo(table);
		// 							jQuery('.cart_desktop_page').css('min-height', 'auto');
		// 						}

		// 					}
		// 				});
		// 			}
		// 		}

		// 		updateCartDesc(cart);


		// 	}



		// 	function updateCartDesc(data) {
		// 		var $cartPrice = Bizweb.formatMoney(data.total_price, "{{amount_no_decimals_with_comma_separator}}₫"),
		// 			$cartMobile = $('#header .cart-mobile .quantity-product'),
		// 			$cartDesktop = $('.count_item_pr'),
		// 			$cartDesktopList = $('.cart-counter-list'),
		// 			$cartPopup = $('.cart-popup-count');

		// 		switch (data.item_count) {
		// 			case 0:
		// 				$cartMobile.text('0');
		// 				$cartDesktop.text('0');
		// 				$cartDesktopList.text('0');
		// 				$cartPopup.text('0');

		// 				break;
		// 			case 1:
		// 				$cartMobile.text('1');
		// 				$cartDesktop.text('1');
		// 				$cartDesktopList.text('1');
		// 				$cartPopup.text('1');

		// 				break;
		// 			default:
		// 				$cartMobile.text(data.item_count);
		// 				$cartDesktop.text(data.item_count);
		// 				$cartDesktopList.text(data.item_count);
		// 				$cartPopup.text(data.item_count);

		// 				break;
		// 		}
		// 		$('.top-cart-content .top-subtotal .price, aside.sidebar .block-cart .subtotal .price, .popup-total .total-price').html($cartPrice);
		// 		$('.popup-total .total-price').html($cartPrice);
		// 		$('.shopping-cart-table-total .totals_price').html($cartPrice);
		// 		$('.header-cart-price .totals_price_mobile').html($cartPrice);
		// 		$('.cartCount').html(data.item_count);
		// 	}

		// 	Bizweb.onCartUpdate = function (cart) {
		// 		Bizweb.updateCartFromForm(cart, '.mini-products-list');
		// 		Bizweb.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');

		// 	};
		// 	Bizweb.onCartUpdateClick = function (cart, variantId) {
		// 		jQuery.each(cart, function (key, value) {
		// 			if (key === 'items') {
		// 				jQuery.each(value, function (i, item) {
		// 					if (item.variant_id == variantId) {
		// 						$('.productid-' + variantId).find('.cart-price span.price').html(Bizweb.formatMoney(item.price * item.quantity, "{{amount_no_decimals_with_comma_separator}}₫"));
		// 						$('.productid-' + variantId).find('.items-count').prop("disabled", false);
		// 						$('.productid-' + variantId).find('.number-sidebar').prop("disabled", false);
		// 						$('.productid-' + variantId + ' .number-sidebar').val(item.quantity);
		// 						if (item.quantity == '1') {
		// 							$('.productid-' + variantId).find('.items-count.btn-minus').prop("disabled", true);
		// 						}
		// 					}
		// 				});
		// 			}
		// 		});
		// 		updateCartDesc(cart);
		// 	}
		// 	Bizweb.onCartRemoveClick = function (cart, variantId) {
		// 		jQuery.each(cart, function (key, value) {
		// 			if (key === 'items') {
		// 				jQuery.each(value, function (i, item) {
		// 					if (item.variant_id == variantId) {
		// 						$('.productid-' + variantId).remove();
		// 					}
		// 				});
		// 			}
		// 		});
		// 		updateCartDesc(cart);
		// 	}
		// 	$(window).ready(function () {
		// 		$.ajax({
		// 			type: 'GET',
		// 			url: '/cart.js',
		// 			async: false,
		// 			cache: false,
		// 			dataType: 'json',
		// 			success: function (cart) {
		// 				Bizweb.updateCartFromForm(cart, '.mini-products-list');
		// 				Bizweb.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');

		// 			}
		// 		});
		// 	});

		 </script>

		 <script>
		// 	$(document).ready(function ($) {
		// 		"use strict";
		// 		awe_backtotop();
		// 		awe_owl();
		// 		awe_tab();
		// 		if (navigator.userAgent.indexOf("Speed Insights") == -1) {
		// 			awe_lazyloadImage();
		// 		}
		// 	});

		// 	$(document).on('click', '.overlay, .close-popup, .btn-continue, .fancybox-close', function () {
		// 		awe_hidePopup('.awe-popup');
		// 		setTimeout(function () {
		// 			$('.loading').removeClass('loaded-content');
		// 		}, 500);
		// 		return false;
		// 	})

		// 	function awe_lazyloadImage() {
		// 		var ll = new LazyLoad({
		// 			elements_selector: ".lazyload",
		// 			load_delay: 200,
		// 			threshold: 0
		// 		});
		// 	} window.awe_lazyloadImage = awe_lazyloadImage;


			/********************************************************
			# SHOW NOITICE
			********************************************************/
			// function awe_showNoitice(selector) {
			// 	$(selector).animate({ right: '0' }, 500);
			// 	setTimeout(function () {
			// 		$(selector).animate({ right: '-300px' }, 500);
			// 	}, 3500);
			// } window.awe_showNoitice = awe_showNoitice;

			/********************************************************
			# SHOW LOADING
			********************************************************/
			// function awe_showLoading(selector) {
			// 	var loading = $('.loader').html();
			// 	$(selector).addClass("loading").append(loading);
			// } window.awe_showLoading = awe_showLoading;

			/********************************************************
			# HIDE LOADING
			********************************************************/
			// function awe_hideLoading(selector) {
			// 	$(selector).removeClass("loading");
			// 	$(selector + ' .loading-icon').remove();
			// } window.awe_hideLoading = awe_hideLoading;

			/********************************************************
			# SHOW POPUP
			********************************************************/
			// function awe_showPopup(selector) {
			// 	$(selector).addClass('active');
			// } window.awe_showPopup = awe_showPopup;

			/********************************************************
			# HIDE POPUP
			********************************************************/
			// function awe_hidePopup(selector) {
			// 	$(selector).removeClass('active');
			// } window.awe_hidePopup = awe_hidePopup;


			// function awe_convertVietnamese(e) { return e = (e = (e = (e = (e = (e = (e = (e = (e = (e = (e = e.toLowerCase()).replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a")).replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e")).replace(/ì|í|ị|ỉ|ĩ/g, "i")).replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o")).replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u")).replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y")).replace(/đ/g, "d")).replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g, "-")).replace(/-+-/g, "-")).replace(/^\-+|\-+$/g, "") } window.awe_convertVietnamese = awe_convertVietnamese;



			/********************************************************
			# OWL CAROUSEL
			********************************************************/
			// function awe_owl() {
			// 	$('.owl-carousel:not(.not-dqowl)').each(function () {
			// 		var xs_item = $(this).attr('data-xs-items');
			// 		var md_item = $(this).attr('data-md-items');
			// 		var lg_item = $(this).attr('data-lg-items');
			// 		var sm_item = $(this).attr('data-sm-items');
			// 		var margin = $(this).attr('data-margin');
			// 		var dot = $(this).attr('data-dot');
			// 		var nav = $(this).attr('data-nav');
			// 		var height = $(this).attr('data-height');
			// 		var play = $(this).attr('data-play');
			// 		var loop = $(this).attr('data-loop');
			// 		if (typeof margin !== typeof undefined && margin !== false) {
			// 		} else {
			// 			margin = 30;
			// 		}
			// 		if (typeof xs_item !== typeof undefined && xs_item !== false) {
			// 		} else {
			// 			xs_item = 1;
			// 		}
			// 		if (typeof sm_item !== typeof undefined && sm_item !== false) {

			// 		} else {
			// 			sm_item = 3;
			// 		}
			// 		if (typeof md_item !== typeof undefined && md_item !== false) {
			// 		} else {
			// 			md_item = 3;
			// 		}
			// 		if (typeof lg_item !== typeof undefined && lg_item !== false) {
			// 		} else {
			// 			lg_item = 3;
			// 		}
			// 		if (typeof dot !== typeof undefined && dot !== true) {
			// 			dot = true;
			// 		} else {
			// 			dot = false;
			// 		}
			// 		$(this).owlCarousel({
			// 			loop: loop,
			// 			margin: Number(margin),
			// 			responsiveClass: true,
			// 			dots: dot,
			// 			nav: nav,
			// 			autoplay: play,
			// 			autoplayTimeout: 3000,
			// 			autoplayHoverPause: true,
			// 			autoHeight: false,
			// 			navText: ["", ""],
			// 			responsive: {
			// 				0: {
			// 					items: Number(xs_item)
			// 				},
			// 				600: {
			// 					items: Number(sm_item)
			// 				},
			// 				1000: {
			// 					items: Number(md_item)
			// 				},
			// 				1200: {
			// 					items: Number(lg_item)
			// 				}
			// 			}
			// 		})
			// 	})
			// } window.awe_owl = awe_owl;

			/********************************************************
			# BACKTOTOP
			********************************************************/
			// function awe_backtotop() {
			// 	if ($('.back-to-top').length) {
			// 		var scrollTrigger = 100, // px
			// 			backToTop = function () {
			// 				var scrollTop = $(window).scrollTop();
			// 				if (scrollTop > scrollTrigger) {
			// 					$('.back-to-top').addClass('show');
			// 				} else {
			// 					$('.back-to-top').removeClass('show');
			// 				}
			// 			};
			// 		backToTop();
			// 		$(window).on('scroll', function () {
			// 			backToTop();
			// 		});
			// 		$('.back-to-top').on('click', function (e) {
			// 			e.preventDefault();
			// 			$('html,body').animate({
			// 				scrollTop: 0
			// 			}, 700);
			// 		});
			// 	}
			// } window.awe_backtotop = awe_backtotop;

			/********************************************************
			# TAB
			********************************************************/
			// function awe_tab() {
			// 	$(".e-tabs").each(function () {
			// 		$(this).find('.tabs-title li:first-child').addClass('current');
			// 		$(this).find('.tab-content').first().addClass('current');

			// 		$(this).find('.tabs-title li').click(function () {
			// 			var tab_id = $(this).attr('data-tab');
			// 			var url = $(this).attr('data-url');
			// 			$(this).closest('.e-tabs').find('.tab-viewall').attr('href', url);
			// 			$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
			// 			$(this).closest('.e-tabs').find('.tab-content').removeClass('current');
			// 			$(this).addClass('current');
			// 			$(this).closest('.e-tabs').find("#" + tab_id).addClass('current');
			// 		});
			// 	});
			// } window.awe_tab = awe_tab;

			/********************************************************
			# DROPDOWN
			********************************************************/
			// $('.dropdown-toggle').click(function () {
			// 	$(this).parent().toggleClass('open');
			// });
			// $('.btn-close').click(function () {
			// 	$(this).parents('.dropdown').toggleClass('open');
			// });
			// $('body').click(function (event) {
			// 	if (!$(event.target).closest('.dropdown').length) {
			// 		$('.dropdown').removeClass('open');
			// 	};
			// });





			/************************************/
			/*Show hide Recoverpass*/
			// $('.recv-text #rcv-pass').click(function () {
			// 	$('.form_recover_').slideToggle('500');
			// });
			/*End*/

			// $('a.btn-support').click(function (e) {
			// 	e.stopPropagation();
			// 	$('.support-content').slideToggle();
			// });
			// $('.support-content').click(function (e) {
			// 	e.stopPropagation();
			// });
			// $(document).click(function () {
			// 	$('.support-content').slideUp();
			// });
			/*dang ky*/
			// $(".accept_submit input").click(function () {
			// 	if ($(this).is(":checked")) {
			// 		$('.button_register').removeAttr('disabled');
			// 	} else {
			// 		$('.button_register').attr('disabled', 'disabled');
			// 	}
			// });



			/***************************************/
			// $(document).ready(function () {
			// 	var wDW = $(window).width();
			// 	/*Footer*/
			// 	if (wDW > 767) {
			// 		$('.toggle-mn').show();
			// 	} else {
			// 		$('.footer-click > .cliked').click(function () {
			// 			$(this).toggleClass('open_');
			// 			$(this).next('ul').slideToggle("fast");
			// 			$(this).next('div').slideToggle("fast");
			// 		});
			// 	}
			// 	if (wDW < 991) {
			// 		$(".filter-group li span label").click(function () {
			// 			$('.dqdt-sidebar').removeClass('openf');
			// 			$('.open-filters').removeClass('openf');
			// 			$('.opacity_filter').removeClass('opacity_filter_true');
			// 		});
			// 		$('.opacity_filter').click(function (e) {
			// 			$('.dqdt-sidebar').removeClass('openf');
			// 			$('.open-filters').removeClass('openf');
			// 			$('.opacity_filter').removeClass('opacity_filter_true');
			// 		});
			// 	}
			// 	if (wDW > 992) {
			// 		$(".button_clicked").click(function () {
			// 			$('.search_pc').slideToggle('fast');
			// 		})
			// 	}
			// 	$(".search_inner .fa").click(function () {
			// 		$('.search_form').slideToggle('fast');
			// 	})
			// });
			// $('.cate_padding  li .fa').click(function () {
			// 	$(this).closest('li').find('> ul').slideToggle("fast");
			// 	$(this).closest('i').toggleClass('fa-caret-down fa-caret-up');
			// 	return false;
			// });
			/*Open filter*/
			// $('.open-filters').click(function (e) {
			// 	e.stopPropagation();
			// 	$(this).toggleClass('openf');
			// 	$('.opacity_filter').toggleClass('opacity_filter_true');
			// 	$('.dqdt-sidebar').toggleClass('openf');
			// });

			// $('.button-menu').click(function () {
			// 	$('.menu_mobile').slideToggle();
			// });

			// $('.ul_collections li > .fa').click(function () {
			// 	$(this).parent().toggleClass('current');
			// 	$(this).toggleClass('fa-angle-down fa-angle-up');
			// 	$(this).next('ul').slideToggle("fast");
			// 	$(this).next('div').slideToggle("fast");
			// });


			// $('.opacity_menu').click(function (e) {
			// 	$('.menu_mobile').removeClass('open_sidebar_menu');
			// 	$('.opacity_menu').removeClass('open_opacity');
			// });
			// $('.ct-mobile li .ti-plus').click(function () {
			// 	$(this).closest('li').find('> .sub-menu').slideToggle("fast");
			// 	$(this).closest('i').toggleClass('show_open hide_close');
			// 	return false;
			// });


			// /*********************Login register modal **********************/
			// $('.op_login').click(function (e) {
			// 	$('.op_login').removeClass('op_login_true');
			// 	$('.modal_register').hide();
			// 	$('.modal_login').hide();
			// });
			/*dang ky click*/
			// $('.register_click').click(function (e) {
			// 	$('.op_login').toggleClass('op_login_true');
			// 	$('.modal_register').show();
			// });
			/*dang nhap tư form dang ky*/
			// $('.login_form').click(function (e) {
			// 	$('.op_login').add('op_login_true');
			// 	$('.modal_login').show();
			// 	$('.modal_register').hide();
			// });
			/*dang nhap click*/
			// $('.login_click').click(function (e) {
			// 	$('.op_login').toggleClass('op_login_true');
			// 	$('.modal_login').show();
			// });
			/*dang ky tu form dang nhap*/
			// $('.register_form').click(function (e) {
			// 	$('.op_login').add('op_login_true');
			// 	$('.modal_register').show();
			// 	$('.modal_login').hide();
			// });

			// $(".topbar-user>span").click(function () {
			// 	if ($(window).width() < 1200) {
			// 		$(this).next().slideToggle();
			// 	}
			// });






			// Create tab
			// $(".not-dqtab").each(function (e) {
			// 	var $this1 = $(this);
			// 	var datasection = $this1.closest('.not-dqtab').attr('data-section');
			// 	$this1.find('.tabs-title li:first-child').addClass('current');
			// 	$this1.find('.tab-content').first().addClass('current');
			// 	$this1.find('.tabs-title.ajax li').click(function () {
			// 		var $this2 = $(this),
			// 			tab_id = $this2.attr('data-tab'),
			// 			url = $this2.attr('data-url');
			// 		var etabs = $this2.closest('.e-tabs2');
			// 		etabs.find('.tab-viewall').attr('href', url);
			// 		etabs.find('.tabs-title li').removeClass('current');
			// 		etabs.find('.tab-content').removeClass('current');
			// 		$this2.addClass('current');
			// 		etabs.find("." + tab_id).addClass('current');
					//Náº¿u Ä‘Ă£ load rá»“i thĂ¬ khĂ´ng load ná»¯a
			// 		if (!$this2.hasClass('has-content')) {
			// 			$this2.addClass('has-content');
			// 			getContentTab(url, "." + datasection + " ." + tab_id);
			// 		}
			// 	});
			// });

			//Xá»­ lĂ½ mobile

			// $('.not-dqtab .next').click(function (e) {

			// 	var count = 0
			// 	$(this).parents('.content').find('.tab-content').each(function (e) {
			// 		count += 1;
			// 	})

			// 	var str = $(this).parent().find('.tab-titlexs').attr('data-tab'),
			// 		res = str.replace("tab-", ""),
			// 		datasection = $(this).closest('.not-dqtab').attr('data-section');
			// 	res = Number(res);
			// 	if (res < count) {
			// 		var current = res + 1;
			// 	} else {
			// 		var current = 1;
			// 	}
			// 	action(current, datasection);
			// })
			// $('.not-dqtab .prev').click(function (e) {
			// 	var count = 0
			// 	$(this).parents('.content').find('.tab-content').each(function (e) {
			// 		count += 1;
			// 	})

			// 	var str = $(this).parent().find('.tab-titlexs').attr('data-tab'),
			// 		res = str.replace("tab-", ""),
			// 		datasection = $(this).closest('.not-dqtab').attr('data-section'),
			// 		res = Number(res);
			// 	if (res > 1) {
			// 		var current = res - 1;
			// 	} else {
			// 		var current = count;
			// 	}
			// 	action(current, datasection);
			// })
			// Action mobile
			// function action(current, datasection) {
			// 	$('.' + datasection + ' .tab-titlexs').attr('data-tab', 'tab-' + current);
			// 	var text = '',
			// 		url = '',
			// 		tab_id = '';
			// 	$('.' + datasection + ' ul.tabs.tabs-title.hidden-xs li').each(function (e) {

			// 		if ($(this).attr('data-tab') == 'tab-' + current) {
			// 			var $this3 = $(this);
			// 			title = $this3.find('span').text();
			// 			url = $this3.attr('data-url');
			// 			tab_id = $this3.attr('data-tab');
						//Náº¿u Ä‘Ă£ load rá»“i thĂ¬ khĂ´ng load ná»¯a
			// 			if (!$this3.hasClass('has-content')) {
			// 				$this3.addClass('has-content');

			// 				getContentTab(url, "." + datasection + " ." + tab_id);
			// 			}
			// 		}
			// 	})
			// 	$("." + datasection + " .tab-titlexs span").text(title);
			// 	$("." + datasection + " .tab-content").removeClass('current');
			// 	$("." + datasection + " .tab-" + current).addClass('current');
			// }
			// Get content cho tab
			// function getContentTab(url, selector) {
			// 	url = url + "?view=ajaxload";

			// 	var dataLgg = $(selector).parent().find('.tab-1 .owl-carousel').attr('data-lgg-items');
			// 	var loadding = '<div class="a-center"><svg height=30px style="enable-background:new 0 0 50 50"version=1.1 viewBox="0 0 24 30"width=24px x=0px xml:space=preserve xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink y=0px><rect fill=#333 height=10 opacity=0.2 width=4 x=0 y=10><animate attributeName=opacity attributeType=XML begin=0s dur=0.6s repeatCount=indefinite values="0.2; 1; .2"/><animate attributeName=height attributeType=XML begin=0s dur=0.6s repeatCount=indefinite values="10; 20; 10"/><animate attributeName=y attributeType=XML begin=0s dur=0.6s repeatCount=indefinite values="10; 5; 10"/></rect><rect fill=#333 height=10 opacity=0.2 width=4 x=8 y=10><animate attributeName=opacity attributeType=XML begin=0.15s dur=0.6s repeatCount=indefinite values="0.2; 1; .2"/><animate attributeName=height attributeType=XML begin=0.15s dur=0.6s repeatCount=indefinite values="10; 20; 10"/><animate attributeName=y attributeType=XML begin=0.15s dur=0.6s repeatCount=indefinite values="10; 5; 10"/></rect><rect fill=#333 height=10 opacity=0.2 width=4 x=16 y=10><animate attributeName=opacity attributeType=XML begin=0.3s dur=0.6s repeatCount=indefinite values="0.2; 1; .2"/><animate attributeName=height attributeType=XML begin=0.3s dur=0.6s repeatCount=indefinite values="10; 20; 10"/><animate attributeName=y attributeType=XML begin=0.3s dur=0.6s repeatCount=indefinite values="10; 5; 10"/></rect></svg></div>';

			// 	$.ajax({
			// 		type: 'GET',
			// 		url: url,
			// 		beforeSend: function () {
			// 			$(selector).html(loadding);
			// 		},
			// 		success: function (data) {
			// 			var content = $(data);

			// 			$(selector).html(content.html());
			// 			ajaxCarousel(selector, dataLgg);
						//Fix app
			// 			if (window.BPR)
			// 				return window.BPR.initDomEls(), window.BPR.loadBadges();
			// 		},
			// 		dataType: "html"
			// 	});
			// }
			// Ajax carousel
			// function ajaxCarousel(selector, dataLgg) {
			// 	$(selector + ' .owl-carousel.ajax-carousel').each(function () {
			// 		var xss_item = $(this).attr('data-xss-items');
			// 		var xs_item = $(this).attr('data-xs-items');
			// 		var sm_item = $(this).attr('data-sm-items');
			// 		var md_item = $(this).attr('data-md-items');
			// 		var lg_item = $(this).attr('data-lg-items');
			// 		if (dataLgg !== typeof undefined) {

			// 		}
			// 		var lgg_item = dataLgg;
			// 		var margin = $(this).attr('data-margin');
			// 		var dot = $(this).attr('data-dot');
			// 		var nav = $(this).attr('data-nav');
			// 		if (typeof margin !== typeof undefined && margin !== false) {
			// 		} else {
			// 			margin = 30;
			// 		}
			// 		if (typeof xss_item !== typeof undefined && xss_item !== false) {
			// 		} else {
			// 			xss_item = 1;
			// 		}
			// 		if (typeof xs_item !== typeof undefined && xs_item !== false) {
			// 		} else {
			// 			xs_item = 1;
			// 		}
			// 		if (typeof sm_item !== typeof undefined && sm_item !== false) {

			// 		} else {
			// 			sm_item = 3;
			// 		}
			// 		if (typeof md_item !== typeof undefined && md_item !== false) {
			// 		} else {
			// 			md_item = 3;
			// 		}
			// 		if (typeof lg_item !== typeof undefined && lg_item !== false) {
			// 		} else {
			// 			lg_item = 4;
			// 		}
			// 		if (typeof lgg_item !== typeof undefined && lgg_item !== false) {

			// 		} else {
			// 			lgg_item = lg_item;
			// 		}

			// 		if (typeof dot !== typeof undefined && dot !== true) {
			// 			dot = dot;
			// 		} else {
			// 			dot = false;
			// 		}
			// 		if (typeof nav !== typeof undefined && nav !== true) {
			// 			nav = nav;
			// 		} else {
			// 			nav = false;
			// 		}
			// 		$(this).owlCarousel({
			// 			loop: false,
			// 			margin: Number(margin),
			// 			responsiveClass: true,
			// 			dots: dot,
			// 			nav: nav,
			// 			navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
			// 			responsive: {
			// 				0: {
			// 					items: Number(xss_item),
			// 				},
			// 				543: {
			// 					items: Number(xs_item)
			// 				},
			// 				768: {
			// 					items: Number(sm_item)
			// 				},
			// 				992: {
			// 					items: Number(md_item)
			// 				},
			// 				1200: {
			// 					items: Number(lg_item)
			// 				},
			// 				1500: {
			// 					items: Number(lgg_item)
			// 				}
			// 			}
			// 		})
			// 	})
			// }

			// var ww = $(window).width();
			// if (ww >= 1200) {
			// 	$('.xemthem').click(function (e) {
			// 		e.preventDefault();
			// 		$('ul.ul_menu>li').css('display', 'block');
			// 		$(this).hide();
			// 		$('.thugon').show();
			// 	})
			// 	$('.thugon').click(function (e) {
			// 		e.preventDefault();
			// 		$('ul.ul_menu>li').css('display', 'none');
			// 		$(this).hide();
			// 		$('.xemthem').show();
			// 	})
			// } else {
			// 	$('.xemthem').on('mouseover', function (e) {
			// 		e.preventDefault();
			// 		$('ul.ul_menu>li').css('display', 'block');
			// 		$(this).hide();
			// 		$('.thugon').show();
			// 	})
			// 	$('.thugon').on('mouseover', function (e) {
			// 		e.preventDefault();
			// 		$('ul.ul_menu>li').css('display', 'none');
			// 		$(this).hide();
			// 		$('.xemthem').show();
			// 	})
			// }

			// if ($(".site-nav-vetical .li_check").length <= 5) {
			// 	$(".xemthem").addClass("hidden-zz");
			// 	$(".thugon").addClass("hidden-zz");
			// }


			// if (ww <= 1200) {
			// 	$(".menu_mega").click(function () {
			// 		$(".list_menu_header").toggleClass('openz');

			// 	});
			// }

			// $(document).on('keydown', '.number-sidebar-z', function (e) { -1 !== $.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) || /65|67|86|88/.test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey) || 35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey || 48 > e.keyCode || 57 < e.keyCode) && (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault() });	
		// </script> <!-- Quick view -->

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
			</script> -->



	</div>
</body>

</html>