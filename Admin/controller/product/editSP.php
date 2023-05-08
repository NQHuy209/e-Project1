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
        <h1>Chỉnh sửa sản phẩm</h1>
            <div>
                <span>Tên sản phẩm: </span><input type="text" name="name" value="<?php echo $info[$_GET['id']][0]; ?>">
            </div>
            <div>
                <span>Giá: </span><input type="text" name="price" value="<?php echo $info[$_GET['id']][1]; ?>">
            </div>
            <div>
                <span>Thương hiệu </span><input type="text" name="brand" value="<?php echo $info[$_GET['id']][2]; ?>">
            </div>
            <div>
                <button type="submit" name='edit' value="edit">Cập nhật</button>
                <a href="homeSP.php"><button type="button">Cancel</button></a>
            </div>
    </form>
</center>
