<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>La Imperial Login</title>
	<link rel="stylesheet" href="stylelogin.css">
</head>
<style>
	p {
    margin-top: 0;
    margin-bottom: 1rem;
    color: red;
	font-weight: 300;
    font-size: 22px;
}
</style>
<body>
	
	<img src="https://cdn.freebiesupply.com/logos/large/2x/imperial-1-logo-png-transparent.png">

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h1>Login Page</h1>
				
			</div>
			<div class="card-body">
            <center> 
				<form action="checklog.php" method="post">

				<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="Username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
			</center>
			
					<div class="checkbox">
						<input type="checkbox">
						<span>Remember me</span>
					</div>
					
					<div class="forgot">
						<a href="#">Forgot password?</a>
					</div>
					
            <center>
					<div class="form-group">
						<input type="submit" name="log" value="Login" class="btn btn-warning login_input" >
					</div>
				</form>
            </center>
			</div>

			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account? <a href="register.php"> Register here</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>