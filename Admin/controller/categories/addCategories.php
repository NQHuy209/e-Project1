<?php
    $errors = array();
    $con = mysqli_connect('localhost', 'root', '12345678', 'project');

    if (!empty($_POST['add']))
        {
            if (!$_POST['categories_id'] || !$_POST['name']) {
                echo'Nhập đầy đủ thông tin';
            }
            
            if (!$errors)
            {
                $conn = connect();
                $sql = "INSERT INTO categories (categories_id, name) VALUES (?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt -> bind_param('is', $cateid, $name);
                $cateid = $_POST['categories_id'];
                $name = $_POST['name'];
            if ($stmt->execute() === TRUE) {
                    echo "Thêm danh mục sản phẩm thành công";
                }else{
                    echo "<h1>Có lỗi xảy ra</h1>";
                }
            }
    }

    ?>
    <form action="" method="POST">
        <h1>Thêm Danh Mục</h1>
            <div>
                <span>Categories ID: </span><input type="text" name="categories_id">
            </div>
            <div>
                <span>Tên: </span><input type="number" name="name">
            </div>
    </form>
