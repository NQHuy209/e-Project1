<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="demo5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>


  <title>Document</title>
  <style>
    table {
      width: 1200px;
      margin: auto;
      text-align: center;
      overflow: auto;
    }

    tr {
      border: 1px solid;
    }

    th {
      border-bottom: 1px solid #000;
      border: 1px solid;
    }

    td {
      border: 1px solid;
    }

    h1 {
      text-align: center;
    }

    #button {
      float: right;
    }
  </style>
</head>

<body style="background-color: #263238;
 ">
  <?php
  include_once "config/connect_db.php";

  if (isset($_GET['logout'])) {
    unset($_SESSION['user']);
    header('location:../index.php');
  }
  ?>
  <?php
include "./sidebar.php";
include_once "config/connect_db.php";
?>
  <div id="viewport">
    
    <div id="content">
      <nav class="navbar navbar-default" style="border-left: none; border-right: none;border-radius: 0px; margin-bottom: 0;">
        <div class="container-fluid">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="?logout"><i class="zmdi zmdi-arrow-right" style="margin-right: 3px;"></i>Log out</a></li>
          </ul>
        </div>
      </nav>
      <div class="container-fluid">
        <table class="table ">
          <h1>Product management</h1>
          <thead>
            <th style="width: 3%;">ID</th>
            <th style="width: 5%;">CategoriesID</th>
            <th style="width: 10%;">Image</th>
            <th style="width: 10%;">Product name</th>
            <th style="width: 5%;">Price</th>
            <th style="width: 9%;">Brand</th>
            <th style="width: 40%;">Information</th>
            <th style="width: 10%;">Edit</th>
            <th style="width: 10%;">Delete</th>
          </thead>
          <?php
          $conn = mysqli_connect('localhost', 'root', '12345678', 'project');
          if ($conn) {
            $sql = "select * from product";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '
                            <tr>
                                <td>' . $row['id'] . '</td>
                                <td>' . $row['categories_id'] . '</td>
                                <td>' . $row['img'] . '</td>
                                <td>' . $row['name'] . '</td>
                                <td>' . $row['price'] . 'đ' . '</td>
                                <td>' . $row['brand'] . '</td>
                                <td>' . $row['information'] . '</td>
                                <td><a class="btn btn-success" href="controller/product/editSP.php?id=' . $row['id'] . '">Edit</a></td>
                                <td><a class="btn btn-danger" href="controller/product/deleteSP.php?id=' . $row['id'] . '"> Delete</a></td>
                            </tr>';
              }
            }
          }
          ?>
          <tfoot>
            <td colspan="8" style="border-right: none;">
              <a href="controller/product/addSP.php"><button class="btn btn-outline-dark btn-add" style="float: left;" id="button">ADD</button></a>
            </td>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</body>

</html>