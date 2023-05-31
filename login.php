<?php
	require "Model/check-login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
    <title>La Imperial Login</title>
	
</head>
<body>

<div class="container">
		<div class="card">
			<div class="card-header">
				<h1>Login Page</h1>
				
			</div>
			<div class="card-body">
                <center>
				<form action="" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '';?>">
					</div>
					<p style="color:red;"><?php echo isset($error['username']) ? $error['username'] : null ?></p>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '';?>">
					</div>
					<p style="color:red;"><?php echo isset($error['password']) ? $error['password'] : null ?></p>
			</center>
			
					
            <center>
					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-warning login_input" >
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
</body>
</html>