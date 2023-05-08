<?php

$sname= "localhost";
$uname= "root";
$password = "12345678";
$db_name = "project";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}