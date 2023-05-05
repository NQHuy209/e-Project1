<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style type="text/css">
            table{
                width: 800px;
                margin: auto;
                text-align: center;
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
   <table style="border: 1px solid">
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
                                <td><a href="controller/EditSP.php?id='.$row['id'].'">Edit</a></td>
                                <td><a href="controller/DeleteSP.php?id='.$row['id'].'"> Delete</a></td>
                            </tr>';
                        }
                    }
                }
            ?>
            <tfoot>
                    <td colspan="8">
                        <a href="controller/AddSP.php"><button id="button">Thêm sản phẩm</button></a>
                    </td>
            </tfoot>
        </table>
    
</body>
</html>