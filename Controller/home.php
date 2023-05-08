<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>ADMIN HOME PAGE</h1>
     <h2>Hello <?php echo $_SESSION['fullname']; ?></h2>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>