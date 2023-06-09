<?php
    $id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '12345678', 'project');
    $sql = "DELETE FROM product WHERE id='".$id."'";
    if ($result = mysqli_query($con,$sql)) {
        echo '<script>alert("Xóa sản phẩm  thành công")</script>';
        header("location:../../product.php");
    }else{
        echo '<script>alert("Có lỗi xảy ra")</script>';
    }
?>
