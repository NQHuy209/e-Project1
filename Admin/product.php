<?php
    include "./sidebar.php";
    include_once "config/connect_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
            table{
                width: 800px;
                margin: auto;
                text-align: center;
                overflow: auto;
            }
            tr {
                border: 1px solid;
            }
            th {
                
                border: 1px solid;   
            }
            td {
                border: 1px solid;
            }
            h1{
                text-align: center;
            }
            #button{
                float: right;
            }
        </style>
</head>
<body>
    <div class="content">
    <table class="table ">
            <h1>Quản lý sản phẩm</h1>
            <thead>
                <th>ID</th>
                <th>CategoriesID</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Thương Hiệu</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <?php
                $conn = mysqli_connect('localhost', 'root', '12345678', 'project');
                if ($conn)
                {
                    $sql = "select * from product";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                            
                        {
                            echo'
                            <tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['categories_id'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['price'].'</td>
                                <td>'.$row['brand'].'</td>
                                <td><a href="controller/product/editSP.php?id='.$row['id'].'">Edit</a></td>
                                <td><a href="controller/product/deleteSP.php?id='.$row['id'].'"> Delete</a></td>
                            </tr>';
                        }
                    }
                }
            ?>
            <tfoot>
                    <td colspan="8">
                        <a href="controller/product/addSP.php"><button id="button">ADD</button></a>
                    </td>
            </tfoot>
        </table>
    </div>
    

</body>
</html>
