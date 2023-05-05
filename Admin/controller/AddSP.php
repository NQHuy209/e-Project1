<?php
    $errors = array();
        function connect()
        {
            $conn = mysqli_connect('localhost', 'root', '12345678', 'project');
            if (!$conn) {
                    die("Kết nối thất bại: " . $conn);
                }
            return $conn;
        }
    
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

    ?>
    <form action="" method="POST">
        <h1>Thêm Sản Phẩm</h1>
            <div>
                <span>Categories ID: </span><input type="text" name="categories_id">
            </div>
            <div>
                <span>Tên: </span><input type="number" name="name">
            </div>
            <div>
                <span>Giá: </span><input type="text" name="price">
            </div>
            <div>
                <span>Thương Hiệu: </span> <input type="text" name="brand">
            </div>
            <div>
                <input type="submit" name='add' value='Add'>
                <a href="HomeSP.php"><button type="button">Cancel</button></a>
            </div>
    </form>
