<?php
    $con = mysqli_connect('localhost', 'root', '12345678', 'project');

    $id = $_GET['id'];
    $sql = "DELETE FROM categories WHERE id='".$id."'";
    if ($result = mysqli_query($con,$sql)) {
        echo "<h1>Xóa danh mục sản phẩm  thành công ";
    }else{
        echo "<h1>Có lỗi xảy ra ";
    }
?>
    
