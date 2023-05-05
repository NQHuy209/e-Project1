<?php
    include_once "config/connect_db.php";

function delete(){
    $id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '12345678', 'project');
    $sql = "DELETE FROM categories WHERE id='".$id."'";
    if ($result = mysqli_query($con,$sql)) {
        echo "<h1>Xóa danh mục sản phẩm thành công Click vào <a href='categories.php'>đây</a> để về trang danh sách</h1>";
    }else{
        echo "<h1>Có lỗi xảy ra Click vào <a href='categories.php'>đây</a> để về trang danh sách</h1>";
    }
}

function add() {
    if (!empty($_POST['add']))
        {
            if ($_POST['price'] < 0 ) {
                $errors['price'] = "Giá không hợp lệ!";
            }
            if (!$_POST['categories_id'] || !$_POST['name'] || !$_POST['price'] ||  !$_POST['brand']) {
                echo'Nhập đầy đủ thông tin';
            }
            
            if (!$errors)
            {
                $conn = connect();
                $sql = "INSERT INTO product (categories_id, name, price, brand) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt -> bind_param('isss', $cateid, $name, $price, $brand);
                $cateid = $_POST['categories_id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $brand = $_POST['brand'];
            if ($stmt->execute() === TRUE) {
                    echo "Thêm sản phẩm thành công <a href='HomeSP.php'>đây</a> để về trang danh sách</h1>";
                }else{
                    echo "<h1>Có lỗi xảy ra</h1>";
                }
            }
    }
}   


    ?>
    
