<?php
    $errors = array();
    $conn = mysqli_connect('localhost', 'root', '12345678', 'project');
    
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
                    echo "Thêm sản phẩm thành công <a href='homeSP.php'>đây</a> để về trang danh sách</h1>";
                }else{
                    echo "<h1>Có lỗi xảy ra</h1>";
                }
            }
    }

    ?>
    <center>
    <form action="" method="POST">
        <table>
        <h1>Thêm Sản Phẩm</h1>
            <tr>
                <td><span>Categories ID: </span></td>
                <td><input type="text" name="categories_id"></td>
            </tr>
            <tr>
                <td><span>Tên: </span></td>
                <td><input type="number" name="name"></td>
            </tr>
            <tr>
                <td><span>Giá: </span></td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td><span>Thương Hiệu: </span></td> 
                <td><input type="text" name="brand"></td>
            </tr>
            <tr>
                <td><input type="submit" name='add' value='Add'></td>
                <td><a href="homeSP.php"><button type="button">Cancel</button></a></td>
            </tr>
        </table>
    </form>
    </center>
