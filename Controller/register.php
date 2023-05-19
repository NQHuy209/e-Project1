<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>La Imperial Sign Up</title>
    <link rel="stylesheet" href="styleregister.css">
</head>
<style>
    p {
    margin-top: 0;
    margin-bottom: 1rem;
    color: red;
    font-size: 22px;
    font-weight: 300;
}
   h5 {
    margin-top: 0;
    margin-bottom: 1rem;
    color: green;
    font-size: 22px;
    font-weight: 300;
   }
</style>
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
				<form action="checkregis.php" method="post">

                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

         <?php if (isset($_GET['success'])) { ?>
     		<h5 class="success"><?php echo $_GET['success']; ?></h5>
     	<?php } ?>
        
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user" style="font-size: 120%;"></i></span>
						</div>

                        <?php if (isset($_GET['username'])) { ?>
               <input type="text" name="username" class="form-control" placeholder="User Name" value="<?php echo $_GET['username']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="username" class="form-control" placeholder="User Name"><br>
          <?php }?>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key" style="font-size: 120%;"></i></span>
						</div>
                        
						<input type="password" name="password" class="form-control" placeholder="Password">
                        
					</div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-edit" style="font-size: 120%;"></i></span>
                        </div>

                        <?php if (isset($_GET['fullname'])) { ?>
               <input type="text" name="fullname" class="form-control" placeholder="Full Name" value="<?php echo $_GET['fullname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="fullname" class="form-control" placeholder="Full Name"><br>
          <?php }?>

                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-prepend"><i class="fa fa-mobile" style="font-size: 154%;padding-top: 7px;padding-left: 13px;"></i></span>
                        </div>

                        <?php if (isset($_GET['phone_number'])) { ?>
               <input type="tel" name="phone_number" class="form-control" placeholder="Phone Number" value="<?php echo $_GET['phone_number']; ?>"><br>
          <?php }else{ ?>
               <input type="tel" name="phone_number" class="form-control" placeholder="Phone Number"><br>
          <?php }?>
                    </div>
                    
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-prepend"><i class="fa fa-home" style="font-size: 140%;padding-left: 8px;padding-top: 8px;"></i></span>
                        </div>

                        <?php if (isset($_GET['address'])) { ?>
               <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo $_GET['address']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="address" class="form-control" placeholder="Address"><br>
          <?php }?>

                    </div>
                    
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-prepend"><i class="fa fa-envelope" style="font-size: 140%;padding-left: 10px;padding-top: 8px;"></i></span>
                        </div>

                        <?php if (isset($_GET['email'])) { ?>
               <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" name="email" class="form-control" placeholder="Email"><br>
          <?php }?>
                    </div>
					
					<div class="form-group">
						<input type="submit" name="reg" value="Register" class="btn btn-warning login_input">
					</div>

                    <h3>Already have an account? Please <a href="login.php">Login</a></h3>
				</form>
            </center>
        </div>
        </div>
    </div>
</div>
</body>
</html>