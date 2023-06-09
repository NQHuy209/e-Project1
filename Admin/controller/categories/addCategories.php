<?php
$errors = array();
$conn = mysqli_connect('localhost', 'root', '12345678', 'project');

if (!empty($_POST['add'])) {
    if (!$_POST['id'] || !$_POST['name']) {
        echo "<script>alert('Yêu cầu nhập đầy đủ thông tin')</script>";
    }

    if (!$errors) {
        $sql = "INSERT INTO categories (id, name) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('is', $cateid, $name);
        $cateid = $_POST['id'];
        $name = $_POST['name'];
        if ($stmt->execute() === TRUE) {
            echo '<script>alert("Thêm danh mục sản phẩm thành công")</script>';
            header("location:../../categories.php");
        } else {
            echo '<script>alert("Có lỗi xảy ra")</script>';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_categories.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #263238;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            color: #CFD8DC;
        }
        .card {
            border: 2px solid #37474F;
            border-top-left-radius: 9px;
            border-top-right-radius: 9px;
        }
        .card-header {
            background-color: #37474F;
        }
        .card-body {
            background-color: #455A64;
            border-bottom-left-radius: 2px;
            border-bottom-right-radius: 2px;
        }
        input {
            outline: none;
            width: 335px;
            border: none;
        }
        .container {
            display: flex;
            justify-content: center;
            margin-top: 150px;
        }
    </style>
</head>

<body>
    <center>
        <form action="" method="POST">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h1>Add category</h1>
                    </div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td><span>Categories ID: </span></td>
                                <td><input type="number" name="id"></td>
                            </tr>
                            <tr>
                                <td><span>Name: </span></td>
                                <td><input type="text" name="name"></td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-success" type="submit" name='add' value="add">Add</button></td>
                                <td><a href="../../categories.php"><button class="btn btn-secondary" type="button">Cancel</button></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </center>
</body>

</html>