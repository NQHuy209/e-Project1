<?php 
            $con = mysqli_connect('localhost', 'root', '12345678', 'project');
            $sql="SELECT * FROM product";
            $result=mysqli_query($con,$sql);
            $info = array();
            while ($row=mysqli_fetch_assoc($result)) 
            {
                $info[$row['id']] = array($row['name'], $row['price'], $row['brand']);
            }
    if (!empty($_POST['edit']))
        
    {
            if ($_POST['price'] < 0) {
                $errors['price'] = "Giá không hợp lệ!";
            }
            if (!$_POST['name'] || !$_POST['price'] ||  !$_POST['brand']) {
                echo'Nhập đầy đủ thông tin';
            }
            
            if (isset($_GET['id'])) {
                $con = mysqli_connect('localhost', 'root', '12345678', 'project');
                $sql = "UPDATE product SET Name = '" . $_POST['name'] .
                    "', price = '" . $_POST['price'] .
                    "', brand = '" . $_POST['brand'] .
                    "' WHERE ID = " . $_GET['id'];
                    mysqli_query($con,$sql);
                    header('location:homeSP.php');
            }
            
        
    }
    ?>
    <center>
    <form action="" method="POST">
        <table>
        <h1>Chỉnh sửa sản phẩm</h1>
            <tr>
                <td><span>Tên sản phẩm: </span></td>
                <td><input type="text" name="name" value="<?php echo $info[$_GET['id']][0]; ?>"></td>
            </tr>
            <tr>
                <td><span>Giá: </span></td>
                <td><input type="text" name="price" value="<?php echo $info[$_GET['id']][1]; ?>"></td>
            </tr>
            <div>
                <td><span>Thương hiệu </span></td>
                <td><input type="text" name="brand" value="<?php echo $info[$_GET['id']][2]; ?>"></td>
            </tr>
            <tr>
                <td><button type="submit" name='edit' value="edit">Cập nhật</button></td>
                <td><a href="homeSP.php"><button type="button">Cancel</button></a></td>
            </tr>
        </table>
    </form>
</center>
