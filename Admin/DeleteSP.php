<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
<?php
    $id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '12345678', 'project');
    $sql = "DELETE FROM product WHERE id='".$id."'";
    if ($result = mysqli_query($con,$sql)) {
        echo "<h1>Xóa sản phẩm  thành công Click vào <a href='HomeSP.php'>đây</a> để về trang danh sách</h1>";
    }else{
        echo "<h1>Có lỗi xảy ra Click vào <a href='HomeSP.php'>đây</a> để về trang danh sách</h1>";
    }
?>
</body>
</html>