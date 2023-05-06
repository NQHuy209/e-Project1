<?php 
    $con = mysqli_connect('localhost', 'root', '12345678', 'project');
    $sql="SELECT * FROM categories";
    $result=mysqli_query($con,$sql);
    $info = array();
    while ($row=mysqli_fetch_assoc($result)) 
        {
            $info[$row['id']] = array($row['name']);
        }
    if (!empty($_POST['edit']))
        
    {
        if (!$_POST['categories_id'] || !$_POST['name']) {
            echo'Nhập đầy đủ thông tin';
        }
        if (isset($_GET['id'])) {
                $sql = "UPDATE categories SET Name = '" . $_POST['name'] .
                    "' WHERE ID = " . $_GET['id'];
                    mysqli_query($con,$sql);
                    header('location:categories.php');
            }
            
        
    }
    ?>
    <center>
    <form action="" method="POST">
        <h1>Chỉnh sửa danh mục</h1>
            <div>
                <span>Categories ID: </span><input type="text" name="categories_id">
            </div>
            <div>
                <span>Tên: </span><input type="number" name="name">
            </div>
        </form>
</center>

    
