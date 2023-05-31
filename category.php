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
      				{
						$page = 1;
						if (isset($_POST['page']))
						{
							$page = $_POST['pageNumber'];
						}
						$offset = ($page - 1) * 6;

						if (isset($_GET['id']))
						{
							$result = mysqli_query($conn, "SELECT * FROM product WHERE categories_id = " . $_GET['id'] . " ORDER BY id DESC LIMIT 6 OFFSET " . $offset);
							$result1 = mysqli_query($conn, "SELECT * FROM product WHERE categories_id = " . $_GET['id'] . " ORDER BY id DESC");
							$result2 = mysqli_query($conn, "SELECT * FROM categories WHERE id = ". $_GET['id']);
							$category = mysqli_fetch_assoc($result2);

							echo
							'<li><strong ><span> ' . $category['name'] . '</span></strong></li>
							</ul></div></div></div></section>  
			
							<div class="container">
								<div class="row">					
									<section class="main_container collection col-lg-12 col-md-12 col-sm-12">
										<h1 class="title_page absolute margin-top-0 hidden-xs">' . $category['name'] . '</h1>
										<br>			
										<div class="category-products products">';
						}
						else if (isset($_GET['search']))
						{
							$key = $_GET['search'];
							$result = mysqli_query($conn, "SELECT * FROM product WHERE name LIKE '%$key%' ORDER BY id DESC LIMIT 6 OFFSET " . $offset);
							$result1 = mysqli_query($conn, "SELECT * FROM product WHERE name LIKE '%$key%' ORDER BY id DESC");

							echo
							'<li><strong ><span> Tìm kiếm</span></strong></li>
							</ul></div></div></div></section>  
			
							<div class="container">
								<div class="row">					
									<section class="main_container collection col-lg-12 col-md-12 col-sm-12">
										<h1 class="title_page absolute margin-top-0 hidden-xs">Tìm kiếm</h1>
										<br>			
										<div class="category-products products">';
						}
						else if (isset($_GET['brand']))
						{
							$result = mysqli_query($conn, "SELECT * FROM product WHERE brand = '" . $_GET['brand'] . "' ORDER BY id DESC LIMIT 6 OFFSET " . $offset);
							$result1 = mysqli_query($conn, "SELECT * FROM product WHERE brand = '" . $_GET['brand'] . "' ORDER BY id DESC");

							echo
							'<li><strong ><span> ' . $_GET['brand'] . '</span></strong></li>
							</ul></div></div></div></section>  
			
							<div class="container">
								<div class="row">					
									<section class="main_container collection col-lg-12 col-md-12 col-sm-12">
										<h1 class="title_page absolute margin-top-0 hidden-xs">Tìm kiếm</h1>
										<br>			
										<div class="category-products products">';
						}
						else
						{
							$result = mysqli_query($conn, "SELECT * FROM product LIMIT 6 OFFSET " . $offset);
							$result1 = mysqli_query($conn, "SELECT * FROM product");

							echo
							'<li><strong ><span> Sản phẩm</span></strong></li>
							</ul></div></div></div></section>  
			
							<div class="container">
								<div class="row">					
									<section class="main_container collection col-lg-12 col-md-12 col-sm-12">
										<h1 class="title_page absolute margin-top-0 hidden-xs">Tìm kiếm</h1>
										<br>			
										<div class="category-products products">';
						}
						if (mysqli_num_rows($result) > 0)
						{
							$totalPages = ceil(mysqli_num_rows($result1) / 6);

							while($row = mysqli_fetch_assoc($result))
							echo
							'<div class="item_product_main col-lg-4 col-md-4 col-sm-4 col-xs-6">
								<div class="product-box product-item-main">
									<a class="kbdt" href="product.php?id=' . $row['id'] . '" title="' . $row['name'] . '"></a>
										<div class="product-thumbnail">
											<img class="lazyload img-responsive" src="images/' . $row['img'] . '" alt="' . $row['name'] . '">
										</div>
										<h3 class="product-name">' . $row['name'] . '</h3>
											<div class="product-item-price price-box">
												<strong>' . number_format($row['price']) . 'đ</strong>
											</div>
									</div>
								</div>';
						}
					}
					echo
					'</div>		
					</section>
					<ul class="pagination clearfix">';
					for ($num = 1; $num <= $totalPages; $num++)
                    {
						if ($num > $page - 3 && $num < $page + 3)
                        {
							echo
							'<form action="" method="post" style="float:left;margin-bottom:0;margin-top:20px">
								<li class="page-item' . ($num == $page ? ' active' : null) . '">
									<input type="hidden" name="pageNumber" value="' . $num . '">
									<button name="page" style="border:0; padding:0; background:none;"><a class="page-link">' . $num . '</a>
								</li>
							</form>';
						}
					}
					echo '</ul>';
			?>
	</div>
		
		
		<div id="open-filters" class="open-filters hidden-lg hidden-md">
			<span class="fter">
				<i class="fa fa-filter"></i>
				<span>Lọc</span>
			</span>
		</div>
	</div>
</div>

	<?php
		require "footer.php";
	?>	
			


				

	</div>
	</body>
</html>