<?php
	require "header.php"
?>

<section class="bread-crumb">
	<span class="crumb-border"></span>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 a-left">
				<ul class="breadcrumb">					
					<li class="home">
						<a itemprop="url" href="/" ><span title="Trang chủ">Trang chủ</span></a>						
						<span class="mr_lr">&nbsp;/&nbsp;</span>
					</li>
					
					<li><strong ><span>Thay khách hàng</span></strong></li>
					
				</ul>
			</div>
		</div>
	</div>
</section>  
<section class="signup page_customer_account">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
				<div class="block-account">
					<h5 class="title-account">Trang tài khoản</h5>
					<p>Xin chào, <span style="color: red;"><?php echo $_SESSION['user']['username']; ?></span>&nbsp;!</p>
					<ul>
						<li>
							<a class="title-info" href="?type=0">Thông tin tài khoản</a>
						</li>
						<li>
							<a class="title-info" href="?type=1">Đơn hàng của bạn</a>
						</li>
						<li>
                            <form action="" method="post">
                                <button type="submit" name="logout" class="title-info">
                                    <a class="title-info">Đăng xuất</a>
                                </button>
                            </form>
                        </li>
					</ul>
				</div>
			</div>

			<?php
				if (empty($_GET['type']) || $_GET['type'] == 0) {
					echo
					'<div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
						<h1 class="title-head margin-top-0">Thông tin tài khoản</h1>
						<div class="form-signup name-account m992">
							<p><strong>Họ tên: </strong>'.$_SESSION['user']['full_name'].'</p>
							<p><strong>Email: </strong>'.$_SESSION['user']['email'].'</p>
							<p><strong>SĐT: </strong>'.$_SESSION['user']['phone_number'].'</p>
							<p><strong>Address: </strong>'.$_SESSION['user']['address'].'</p>
						</div>
					</div>';
				}
				else if ($_GET['type'] == 1) {
					$result = mysqli_query($conn, "SELECT * FROM project.order WHERE user_id = " . $_SESSION['user']['id']);
					echo
					'<div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
						<h1 class="title-head margin-top-0">Đơn hàng của bạn</h1>
						<div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
							
							<div class="my-account">
								<div class="dashboard">

									<div class="recent-orders">
										<div class="table-responsive-block tab-all" style="overflow-x:auto;">
											<table class="table table-cart table-order" id="my-orders-table">
												<thead class="thead-default">
													<tr>
														<th>Đơn hàng</th>
														<th>Ngày</th>
														<th>Địa chỉ</th>
														<th>Giá trị đơn hàng</th>
														<th>TT vận chuyển</th>
													</tr>
												</thead>
												<tbody>';
												if (mysqli_num_rows($result) > 0)
                                                {
                                                    while ($order = mysqli_fetch_assoc($result))
                                                    {
														echo
														'<tr>
															<td>'.$order['product_name'].'</td>
															<td>'.$order['date'].'</td>
															<td>'.$order['address'].'</td>
															<td>'.number_format($order['price']).'</td>
															<td>'.$order['status'].'</td>
														</tr>';
													}
												}
												echo
												'</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>';
				}
				?>
		</div>
	</div>
</section>

			

			















		<?php
			require "footer.php"
		?>
		</div>
	</body>
</html>