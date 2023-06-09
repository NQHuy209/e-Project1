<?php
include "./sidebar.php";
include_once "config/connect_db.php";
?>
 <?php
    include_once "config/connect_db.php";

    if(isset($_GET['logout'])) {
      unset($_SESSION['user']);
      header('location:../index.php');
  }
  ?>

<head>
    <style type="text/css">
        table {
            width: 2000px;
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

        h1 {
            text-align: center;
        }

        #button {
            float: right;
        }
    </style>
</head>

<body style="background-color: #263238;">
    <?php
    if (isset($_POST['update'])) {
        $sql = "SELECT * FROM project.order WHERE id = " . $_POST['up'] . " AND status != 'Đã giao hàng'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1)
        {
            $order = mysqli_fetch_assoc($result);
            if ($order['status'] == 'Chờ xác nhận')
            {
                $sql1 = "UPDATE project.order SET status = 'Đang giao hàng'  WHERE id = " . $_POST['up'];
            }
            if ($order['status'] == 'Đang giao hàng')
            {
                $sql1 = "UPDATE project.order SET status = 'Đã giao hàng'  WHERE id = " . $_POST['up'];
            }
            mysqli_query($conn, $sql1);
            header('location:ship.php');
        }
    }
    ?>
    <div id="viewport">
        <div id="content">
            <nav class="navbar navbar-default" style="border-radius: 0px; margin-bottom: 0;">
                <div class="container-fluid">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="?logout"><i class="zmdi zmdi-arrow-right" style="margin-right: 3px;"></i>Log out</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <table class="table ">
                    <h1 style="text-align: center;">Order</h1>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $sql = "select * from project.order";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
              <tr>
                  <td>' . $row['id'] . '</td>
                  <td>' . $row['user_id'] . '</td>
                  <td>' . $row['product_name'] . '</td>
                  <td>' . $row['price'] .'đ'. '</td>
                  <td>' . $row['phone_number'] . '</td>
                  <td>' . $row['address'] . '</td>
                  <td>' . $row['date'] . '</td>
                  <td>' . $row['status'] . '</td>
                <td>
                <form method="POST" action="">
                    <input type="hidden" name="up" value="' . $row['id'] . '">
                    <button  class="btn btn-primary" type="submit" name="update">Update</button>
                </form>
                </td>
                  
              </tr>';
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>