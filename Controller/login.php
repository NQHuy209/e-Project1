<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	label {
		color: blue;
		font-size: 25px;
	}
</style>
<body>
     <form action="check.php" method="post">
     	<h2>ADMIN LOGIN PAGE</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

          <!-- <h4>Don't have admin account? Click <a href="register.php">here</a></h4> -->

     	<button type="submit">Login</button>
     </form>
</body>
</html>