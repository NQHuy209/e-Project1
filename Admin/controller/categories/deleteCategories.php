<?php
    $id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '12345678', 'project');
    $sql = "DELETE FROM categories WHERE id=".$id;
    if ($result = mysqli_query($con,$sql)) {
        echo '<script>alert("Xóa danh mục sản phẩm  thành công")</script>';
        header("location:../../categories.php");
    }else{
        echo '<script>alert("Có lỗi xảy ra")</script>';
    }
?>
    
