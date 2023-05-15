<?php
    require "Model/check-register.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">

    <title>La Imperial Sign Up</title>
    <link rel="stylesheet" href="css/styleregister.css">
</head>
<body>

    <img src="https://cdn.freebiesupply.com/logos/large/2x/imperial-1-logo-png-transparent.png">
    
<div class="container">
    <div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
        <h1>Create your account</h1>
            </div>
        <div class="card-body">
            <center>
				<form action="" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user" style="font-size: 120%;"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '';?>">
					</div>
                    <p style="color:red;"><?php echo isset($error['username']) ? $error['username'] : null ?></p>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key" style="font-size: 120%;"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '';?>">
					</div>
                    <p style="color:red;"><?php echo isset($error['password']) ? $error['password'] : null ?></p>


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-edit" style="font-size: 120%;"></i></span>
                        </div>
                        <input type="text" name="fullname" class="form-control" placeholder="Full Name" value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : '';?>">
                    </div>
                    <p style="color:red;"><?php echo isset($error['fullname']) ? $error['fullname'] : null ?></p>


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-prepend"><i class="fa fa-mobile" style="font-size: 154%;padding-top: 7px;padding-left: 13px;"></i></span>
                        </div>
                        <input type="tel" name="phone_number" class="form-control" placeholder="Phone Number" value="<?php echo isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '';?>">
                    </div>
                    <p style="color:red;"><?php echo isset($error['phone_number']) ? $error['phone_number'] : null ?></p>
                    
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-prepend"><i class="fa fa-home" style="font-size: 140%;padding-left: 8px;padding-top: 8px;"></i></span>
                        </div>
                        <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '';?>">
                    </div>
                    <p style="color:red;"><?php echo isset($error['address']) ? $error['address'] : null ?></p>
                    
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-prepend"><i class="fa fa-envelope" style="font-size: 140%;padding-left: 10px;padding-top: 8px;"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Email Address" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '';?>">
                    </div>
                    <p style="color:red;"><?php echo isset($error['email']) ? $error['email'] : null ?></p>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user" style="font-size: 120%;"></i></span>
						</div>
						<input type="text" name="Role" class="form-control" placeholder="Role" value="<?php echo isset($_POST['Role']) ? $_POST['Role'] : '';?>">
					</div>
                    
                    <div class="form-group">
						<input type="submit" name="register" value="Register" class="btn btn-warning login_input">
					</div>
                    <h3>If you already have an account, please <a href="login.php">Login</a></h3>
				</form>
            </center>
        </div>
        </div>
    </div>
</div>
</body>
</html>