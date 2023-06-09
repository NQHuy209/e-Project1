<?php
$con = mysqli_connect('localhost', 'root', '12345678', 'project');
$sql = "SELECT * FROM product";
$result = mysqli_query($con, $sql);
$info = array();
while ($row = mysqli_fetch_assoc($result)) {
    $info[$row['id']] = array($row['name'], $row['price'], $row['brand']);
}
if (!empty($_POST['edit'])) {
    if ($_POST['price'] < 0) {
        $errors['price'] = "Giá không hợp lệ!";
    }
    if (!$_POST['name'] || !$_POST['price'] ||  !$_POST['brand']) {
        echo '<script>alert("Xin vui lòng nhập thông tin đầy đủ")</script>';
    }

    if (isset($_GET['id'])) {
        $con = mysqli_connect('localhost', 'root', '12345678', 'project');
        $sql = "UPDATE product SET Name = '" . $_POST['name'] .
            "', price = '" . $_POST['price'] .
            "', brand = '" . $_POST['brand'] .
            "' WHERE ID = " . $_GET['id'];
        mysqli_query($con, $sql);
        header('location:../../product.php');
    }
}
?>

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
                        <h1>Update product</h1>
                    </div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td><span>Product name: </span></td>
                                <td><input type="text" name="name" value="<?php echo $info[$_GET['id']][0]; ?>"></td>
                            </tr>
                            <tr>
                                <td><span>Price: </span></td>
                                <td><input type="text" name="price" value="<?php echo $info[$_GET['id']][1]; ?>"></td>
                            </tr>
                            <div>
                                <td><span>Brand: </span></td>
                                <td><input type="text" name="brand" value="<?php echo $info[$_GET['id']][2]; ?>"></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-success" type="submit" name='edit' value="edit">Update</button></td>
                                    <td><a href="../../product.php"><button class="btn btn-secondary" type="button">Cancel</button></a></td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </center>
</body>