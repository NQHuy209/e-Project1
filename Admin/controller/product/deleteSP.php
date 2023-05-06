<?php
    $id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '12345678', 'project');
    $sql = "DELETE FROM product WHERE id='".$id."'";
    if ($result = mysqli_query($con,$sql)) {
        echo "<h1>Xóa sản phẩm  thành công Click vào <a href='homeSP.php'>đây</a> để về trang danh sách</h1>";
    }else{
        echo "<h1>Có lỗi xảy ra Click vào <a href='homeSP.php'>đây</a> để về trang danh sách</h1>";
    }
?>
