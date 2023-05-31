<?php
	require "header.php";
?>
									<?php
										$success = null;
										$error = array();
										if (isset($_POST['send']))
										{
											$temp = 0;
											if (mb_strlen($_POST['contact-Name']) < 2 || mb_strlen($_POST['contact-Name']) > 50)
											{
												$error['contact-Name'] = 'Tên chỉ được phép chứa từ 2-50 ký tự';
												$temp = 1;
											}
											if (!preg_match("/^[A-Za-z0-9_.]{5,32}@([a-zA-Z0-9]{2,9})(.[a-zA-Z]{2,9})+$/", $_POST['contact-email'], $matchs))
											{
												$error['contact-email'] = 'Email không đúng định dạng';
												$temp = 1;
											}
											if (empty($_POST['contact-Body']))
											{
												$error['contact-Body'] = 'Vui lòng nhập nội dung';
												$temp = 1;
											}

											if ($temp == 0)
												{
												$sql = "INSERT INTO contact (name, email, content) VALUES (?, ?, ?)";
												$stmt = $conn->prepare($sql);
												$stmt->bind_param("sss", $name, $email, $content);
												$name = $_POST['contact-Name'];
												$email = $_POST['contact-email'];
												$content = $_POST['contact-Body'];
												if ($stmt->execute() === TRUE) 
												{
													$success = "Gửi liên hệ thành công";
												}
											}
										}
										
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
					
					<li><strong ><span>Liên hệ</span></strong></li>
					
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="margin-bottom-60">
	<div class="wrap_">
		<div class="row">
			<div class="section_maps">
				<div class="container">
					<div class="template-contact row">

						<div class="col-lg-12 col-md-12 col-xs-12 contact">
							<div class="row">
								<form action="" method="post">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="t_contact">
											<h1>La Imperial</h1>
											<ul class="margin-bottom-15">
												<li>
													<span class="block_fonticon"><i class="fa fa-map-marker"></i></span>
													<span class="title_li">
														Địa chỉ: 54 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội
													</span>
												</li>
												<li>
													<span class="block_fonticon"><i class="fa fa-mobile"></i></span>
													<span class="title_li">
														Điện thoại: <a href="tel:19001234">19001234</a>
													</span>
												</li>
												<li>
													<span class="block_fonticon"><i class="fa fa-envelope"></i></span>
													<span class="title_li">
														Email: <a href="mailto:support@sapo.vn">support@laimperial.vn</a>
													</span>
												</li>
											</ul>
										</div>
										<div class="row">
										
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<h2>Liên hệ với chúng tôi</h2>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<input type="text" placeholder="Họ và tên" class="input-control" name="contact-Name" value="<?php echo isset($_POST['contact-Name']) ? $_POST['contact-Name'] : '';?>" required>
												<p style="color:red;"><?php echo isset($error['contact-Name']) ? $error['contact-Name'] : null ?></p>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<input type="email" placeholder="Email" id="email2" class="input-control" name="contact-email" value="<?php echo isset($_POST['contact-email']) ? $_POST['contact-email'] : '';?>" required>
												<p style="color:red;"><?php echo isset($error['contact-email']) ? $error['contact-email'] : null ?></p>
											</div>

											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<textarea name="contact-Body" placeholder="Nội dung" class="input-control" cols="5" rows="4" value="<?php echo isset($_POST['contact-Body']) ? $_POST['contact-Body'] : '';?>"></textarea>
												<p style="color:red;"><?php echo isset($error['contact-Body']) ? $error['contact-Body'] : null ?></p>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-15">
												<button type="submit" class="button_custome_35" name="send">Gửi liên hệ của bạn</button> 
												<br><br>
												<p><?php echo $success; ?></p>
											</div>
										</div>
									</div>
								</form>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="google-map margin-bottom-30">
										
										<div class="maps_iframe">
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7295885046533!2d105.84651927602637!3d21.003473988645062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac428c3336e5%3A0xb7d4993d5b02357e!2sAptech%20Computer%20Education!5e0!3m2!1svi!2s!4v1683902698633!5m2!1svi!2s" width="600" height="450" style="border:0" allowfullscreen></iframe>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



			













<?php
		require "footer.php";
	?>



		</div>
	</body>
</html>