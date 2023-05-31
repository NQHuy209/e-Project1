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
    <center>
    <form action="" method="POST">
        <table>
        <h1>Thêm Danh Mục</h1>
            <tr>
                <td><span>Categories ID: </span></td>
                <td><input type="text" name="categories_id"></td>
            </tr>
            <tr>
                <td><span>Tên: </span></td>
                <td><input type="number" name="name"></td>
            </tr>
        </table>
    </form>
    </center> 
