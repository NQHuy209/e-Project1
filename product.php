
<?php
	require "header.php";
	
?>

<section class="bread-crumb">
	<span class="crumb-border"></span>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 a-left">
				<ul class="breadcrumb">					
					<li class="home">
						<a itemprop="url" href="index.php" ><span title="Trang chủ">Trang chủ</span></a>						
						<span class="mr_lr">&nbsp;/&nbsp;</span>
					</li>
					<?php
					
					if ($conn)
						{if (isset($_GET['id']))
							{
								$sql = "SELECT * FROM product WHERE id = " . $_GET['id'] . " ORDER BY id DESC";
								$result = mysqli_query($conn, $sql);
								$sp = mysqli_fetch_assoc($result);

								echo'<li><strong ><span> ' . $sp['name'] . '</span></strong></li>
								</ul></div></div></div></section>';
							}
						}
						?>
				</ul>
			</div>
		</div>
	</div>
</section>
	
	
	<div class="container">
		<div class="row">
			<div class="details-product  clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<form enctype="multipart/form-data"  action="" method="post" class="row form-width form-inline">
						<div class="product-detail-left product-images col-xs-12 col-sm-6 col-md-5 col-lg-5">
							<div class="rows">
			
							<?php
					
					if ($conn)
					{
						if (isset($_GET['id']))
						{
							$sql = "SELECT * FROM product WHERE id = " . $_GET['id'] . " ORDER BY id DESC";
							$result = mysqli_query($conn, $sql);
							$sp = mysqli_fetch_assoc($result);
							$result1 = mysqli_query($conn, "SELECT * FROM product WHERE id = " . $_GET['id'] . " ORDER BY id DESC");
							$brand = mysqli_fetch_assoc($result1);
							echo '
						
								<div class="relative product-image-block no-thum">
									<div class="large-image">
										<a onclick="return false;" href="//bizweb.dktcdn.net/thumb/1024x1024/100/351/180/products/15-8811e0ca-76b5-473d-a9b4-4de9cb7745b2.jpg?v=1554012816640" class="large_image_url" data-rel="prettyPhoto[product-gallery]">
											
											<img class="img-responsive center-block" src="images/' . $sp['img'] . '" alt="">
											
										</a>						
										<div class="hidden">
											
										</div>

									</div>						

									
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 details-pro">
						
								<h1 class="title-product" itemprop="name">' . $sp['name'] . '</h1>
								<div class="group-status">
									<span class="first_status"><span class="a_name">Thương Hiệu: </span> <span class="status_name">
										
									<a style="color: red;" href="category.php?brand=' . $brand['brand'] . '">' . $sp['brand'] . '</a>
										
									</span>
										<span class="hidden-xs">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
									</span>
									
								</div>
								
								<div class="price-box" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
									
									<div class="special-price"><span class="price product-price" >' . number_format($sp['price']) . '₫</span> 
										
										<meta itemprop="priceCurrency" content="VND">
									</div> <!-- Giá -->
								</div>
	
								
								<div class="product-summary product_description margin-bottom-15">
									<div class="rte description">
										
									' . $sp['information'] . '
									</div>
								</div>
								
								<div class="form-product">
									
									<div class="box-variant clearfix ">
										
										<input type="hidden" name="variantId" value="23928802" />
										
									</div>
									<div class="form-group form_button_details ">

									<div class="custom input_number_product custom-btn-number form-control">	
										<button class="btn_num num_2 button button_qty" type="button" onclick="Increase();">+</button>
										<button class="btn_num num_1 button button_qty" type="button" onclick="Decrease();">-</button>
										<input type="text" id="qtym" name="quantity" value="1" class="form-control prd_quantity">
									</div>
										
									<input type="hidden" name="id" value="' . $sp['id'] . '">
									<input type="hidden" name="name" value="' . $sp['name'] . '">
									<input type="hidden" name="price" value="' . $sp['price'] . '">
									<input type="hidden" name="img" value="' . $sp['img'] . '">
									<button type="submit" name="add" class="btn btn-lg  btn-cart button_cart_buy_enable ">
											<span>Thêm vào giỏ hàng</span>
									</button>	
									<br>
									<input type="hidden" name="categories_id" value="' . $sp['categories_id'] . '">
									<input type="hidden" name="brand" value="' . $sp['brand'] . '">
									<input type="hidden" name="information" value="' . $sp['information'] . '">
									<input type="hidden" name="html" value="' . $sp['html'] . '">
									<button style="margin-left: 15px; margin-top: -23px;" type="submit" name="compare" class="btn btn-lg  btn-cart button_cart_buy_enable ">
											<span>Thêm vào so sánh</span>
									</button>
										
									</div>
	
	
	
	
	
								</div>
	
	
	
	
							</div>
						</form>
						<!-- Tab -->
						<div class="tab_width_full">
							<div class="row xs-margin-top-15">
								
								<div id="tab_ord" class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
									<!-- Nav tabs -->
									<div class="product-tab e-tabs not-dqtab">
										<span class="border-dashed-tab"></span>
										<ul class="tabs tabs-title clearfix">	
											
											<li class="tab-link" data-tab="tab-1">
												<div class="h3"><span>Mô tả</span></div>
											</li>																	
											
											
											<li class="tab-link" data-tab="tab-2">
												<div class="h3"><span>File Word</span></div>
											</li>	
											
											
										</ul>																									
										<div class="tab-float">
											
											<div id="tab-1" class="tab-content content_extab">
												<div class="rte">
												
												<iframe src="html/' . $sp['html'] . '" width="100%" height="200px" >
												</iframe>
																							
												</div>
											</div>	
											
											
											<div id="tab-2" class="tab-content content_extab">
												<div class="rte">
													
													<a href="word/' . $sp['word'] . '" download>' . $sp['word'] . '</a>
													
												</div>
											</div>	
											
											
										</div>
									</div>		
								</div>
								
	
	
							</div>
						</div>
								
								';
							}
						}	
					?>
								
							
					<!-- Endtab -->

		
				</div>
			</div>


		</div>
		
	</div>
</section>
<script>
	var quantity = document.getElementById("qtym");
	var amount = quantity.value;
	
	function Increase()
	{
		amount++;
		quantity.value = amount;
	}
	
	function Decrease()
	{
		if (amount > 1)
		{
			amount--;
		}
		quantity.value = amount;
	}
</script>

<div id="aweCallback">
	<script>
		var productJson = {"id":14167306,"name":"iPhone Xs Max 512G","alias":"iphone-xs-max-512g","vendor":null,"type":null,"content":"<p>Với công nghệ Super Retina kết hợp tấm nền OLED trên&nbsp;iPhone XS Max đem lại dải màu sắc cực kì sống động và sắc nét đến từng chi tiết.</p>\n<p>Bên cạnh đó, Apple còn tích hợp thêm công nghệ HDR10 cùng tần số cảm ứng 120 Hz giúp chất lượng hình ảnh được nâng cao và mượt mà hơn đáng kể.</p>\n<p>Việc sở hữu màn hình lớn đem đến cho bạn khá nhiều tiện ích như dễ dàng chỉnh sửa ảnh, xem phim, lướt web nhưng sẽ khó khăn hơn trong việc di chuyển.</p>\n<h3>Camera kép&nbsp;tích hợp trí tuệ nhân tạo</h3>\n<p>Dù không sở hữu thông số camera khủng nhưng&nbsp;iPhone XS Max luôn cho thấy sự đẳng cấp của mình về khả năng nhiếp ảnh với cụm camera kép có cảm biến chính 12 MP và cảm biến phụ tele 12 MP.</p>\n<p>Máy được trang bị hệ thống xử lý hình ảnh chất lượng&nbsp;cân bằng sáng, giảm nhiễu, tăng cường độ phơi sáng, màu da sao cho phù hợp và tự nhiên nhất.</p>\n<p>Cùng với đó là khả năng điều chỉnh khẩu độ ấn tượng từ f/1.4 đến f/16 ngay trên bức ảnh sau khi chụp ảnh với chế độ chân dung.</p>\n<p>Chưa dừng lại ở đó, máy còn được tích hợp thêm công nghệ&nbsp;Smart HDR giúp tái tạo hình ảnh và cho ra một bức hình với độ sáng tốt nhất.</p>\n<p>Ngoài ra,&nbsp;iPhone XS Max còn được hỗ trợ bởi trí thông minh nhân tạo đem đến khả năng tự động điều chỉnh màu sắc, độ sáng và độ tương phản sao cho phù hợp với từng vật thể khác nhau.</p>\n<h3>Hiệu năng mạnh mẽ tột đỉnh với chip&nbsp;Apple A12 Bionic</h3>\n<p>iPhone XS Max được Apple trang bị cho con chip mới toanh hàng đầu của hãng mang tên&nbsp;Apple A12 Bionic.</p>\n<p>Chip A12 Bionic được xây dựng trên tiến trình 7nm đầu tiên mà hãng sản xuất với 6 nhân đáp ứng vượt trội trong việc xử lý các tác vụ và khả năng tiết kiệm năng lượng tối ưu.</p>\n<p>Hơn nữa,&nbsp;chiếc&nbsp;điện thoại iPhone&nbsp;còn có bộ xử lý đồ họa mạnh mẽ được Apple thiết kế riêng giúp hiệu năng được cải thiện rất lớn về mặt đồ họa của máy.</p>\n<p>Chưa dừng lại ở đó, máy còn được tích hợp trí thông minh nhân tạo giúp phần cứng tối ưu hiệu suất, nhờ đó mà các thao tác của bạn được xử lý một cách nhanh chóng hơn.</p>\n<h3>Thiết kế viền thép không gỉ và mặt kính cường lực cao cấp, chắc chắn</h3>\n<p>&nbsp;Điện thoại&nbsp;iPhone XS Max sở hữu lối thiết kế vô cùng đẹp mắt với những đường cong mềm mại được thừa hưởng từ chiếc&nbsp;iPhone&nbsp;đời trước đó.</p>\n<p>Tuy nhiên,&nbsp;iPhone XS Max lại có một thân hình to bản ngang bằng với kích thước dòng Plus nhưng chứa đựng một màn hình rộng lớn lên đến 6.5 inch.</p>\n<p>Nhờ thế mà bạn sẽ có một không gian trải nghiệm vô cùng rộng rãi để thưởng thức những bộ phim chất lượng cao được trở nên trọn vẹn.</p>\n<h3>Một số tính năng cao cấp được cập nhật và bổ sung</h3>\n<p>Face ID&nbsp;đã được Apple cải tiến về khả năng bảo mật cũng như cho tốc độ mở khóa được nhanh hơn nhờ các thuật toán mới.</p>\n<p>Bên cạnh đó, tính năng&nbsp;Animoji&nbsp;cũng được cập nhật thêm một số biểu tượng mới trông khá ngộ nghĩnh và đáng yêu.</p>\n<p>Với&nbsp;hệ thống camera TrueDepth nay bạn có thể tự tạo cho bản thân những bức ảnh ấn tượng với công nghệ thực tế ảo tăng cường AR.</p>\n<p>Ngoài ra, hệ thống âm thanh 2 chiều trên&nbsp;siêu phẩm mới&nbsp;được Apple tinh chỉnh lại cho dải âm rộng, âm thanh sống động hơn hay khả năng kháng nước và bụi cũng được nâng cấp lên thành IP 68 đảm bảo an toàn hơn cho máy.</p>","summary":null,"template_layout":null,"available":true,"tags":[],"price":24000000.0000,"price_min":24000000.0000,"price_max":24000000.0000,"price_varies":false,"compare_at_price":0,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":23928802,"barcode":null,"sku":null,"title":"Default Title","options":["Default Title"],"option1":"Default Title","option2":null,"option3":null,"available":true,"taxable":false,"price":24000000.0000,"compare_at_price":null,"inventory_management":null,"inventory_policy":"deny","inventory_quantity":1,"weight":0,"requires_shipping":true,"image":null}],"featured_image":{"src":"https://bizweb.dktcdn.net/100/351/180/products/15-8811e0ca-76b5-473d-a9b4-4de9cb7745b2.jpg?v=1554012816640"},"images":[{"src":"https://bizweb.dktcdn.net/100/351/180/products/15-8811e0ca-76b5-473d-a9b4-4de9cb7745b2.jpg?v=1554012816640"}],"options":["Title"],"created_on":"2019-03-31T13:13:35","modified_on":"2019-03-31T13:13:36","published_on":"2019-03-31T13:13:35"};
		
		var variantsize = false;
		
		var alias = 'iphone-xs-max-512g';
		
		var productOptionsSize = 1;
		var optionsFirst = 'Title';
		
		
		var cdefault = 1;
		
	</script>
</div>

<div id="open-filters" class="open-filters hidden-lg hidden-md">
	<span class="fter">
		<i class="fa fa-filter"></i>
		<span>Lọc</span>
	</span>
</div>

<?php
	require "footer.php"
?>
			

<script>
$(document).ready(function ($) {
	"use strict";
	awe_tab();
	if(navigator.userAgent.indexOf("Speed Insights") == -1) {
		awe_lazyloadImage();
	}
});


/********************************************************
# TAB
********************************************************/
function awe_tab() {
	$(".e-tabs").each( function(){
		$(this).find('.tabs-title li:first-child').addClass('current');
		$(this).find('.tab-content').first().addClass('current');

		$(this).find('.tabs-title li').click(function(){
			var tab_id = $(this).attr('data-tab');
			var url = $(this).attr('data-url');
			$(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);
			$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
			$(this).closest('.e-tabs').find('.tab-content').removeClass('current');
			$(this).addClass('current');
			$(this).closest('.e-tabs').find("#"+tab_id).addClass('current');
		});    
	});
} window.awe_tab=awe_tab;


</script>
			
			<!-- Product detail JS,CSS -->
			
			<link href="//bizweb.dktcdn.net/100/351/180/themes/713646/assets/lightbox.css?1677115832170" rel="stylesheet" type="text/css" media="all" />
			<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/351/180/themes/713646/assets/detail.js?1677115832170" />
			<script src="//bizweb.dktcdn.net/100/351/180/themes/713646/assets/detail.js?1677115832170" type="text/javascript"></script>	
			
			<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/351/180/themes/713646/assets/jquery.elevatezoom308.min.js?1677115832170" />
			<script src="//bizweb.dktcdn.net/100/351/180/themes/713646/assets/jquery.elevatezoom308.min.js?1677115832170" type="text/javascript"></script>		
		
		</div>
	</body>
</html>